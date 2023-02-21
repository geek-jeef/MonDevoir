<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Laravolt\Avatar\Generator\DefaultGenerator as InitialGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscription extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTags;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $table = 'eleve_salle';

            
    protected $fillable = [
        'eleve_id',
        'salle_id',
        'annee_academique_id',
        'data',
    ];


    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class) ;
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class) ;
    }
    

    public function systemeEcolage()
    {
        return $this->hasOneDeep(
            SystemeEcolage::class, 
            [MinervableSystemeEcolage::class],
            [['minervable_type','minervable_id']]
            );
    }

    public function hasSystemeEcolage() 
    {
        return ($this->systemeEcolage) ? true : false ;
    }

    public function getSystemeEcolage() 
    {
        if($this->hasSystemeEcolage()){
            return $this->systemeEcolage ;
        }else{
            return $this->salle->getSystemeEcolage();
        }
    }

    public function getPayementCharge(){
        $systemeEcolage = $this->getSystemeEcolage();
        if($systemeEcolage == null){
            return null;
        }
        $data = [ 'eleve_id' => $this->eleve_id ,
                  'payable_id' =>  $systemeEcolage->id ,
                  'payable_type' =>  $systemeEcolage::class ,
                  'annee_academique_id' => $this->annee_academique_id ,
                ] ;
        $charge_payement = Payement::firstOrNew($data) ;

        if($charge_payement->ref_no == null){
            $charge_payement->ref_no = $this->createPayementRefNo();
            $charge_payement->save();
        }
        return $charge_payement;
    }

    public function enregisterPayement($montant){

      $charge = $this->getPayementCharge();
      if($charge == null){
        return null;
      }

      $data = ['payement_id' => $charge->id,
               'eleve_id' => $this->eleve_id ,
               'annee_academique_id' => $this->annee_academique_id ,
               'ref_no' => $this->createEnregistrementPayementRefNo($charge) ,
               'montant_paye' => $montant ,
               'balance' => $this->calculBalance($charge,  $montant) ,
               'complete' => $this->calculComplete($charge,  $montant),
             ] ;

      $enregistrement = EnregistrementPayement::create($data);

      return $enregistrement ;
    }

    public function enregistrerRecu($enregistrement)
    {
      $data = [ 'enregistrement_payement_id' => $enregistrement->id,
                'montant_paye' => $enregistrement->montant_paye,
                'balance' => $enregistrement->balance,
                'annee_academique_id' => $enregistrement->annee_academique_id 
              ];

      $recu = Recu::create($data);
      return $recu ;
    }

    public function calculBalance($charge,  $montant = 0){

        if($charge == null ){
            return 0.0;
        }else{
            $somme_payement = $this->somme_payement($charge);
            $somme_payement += $montant;
            $montant_payable = $charge->payable->montant ;
            return $montant_payable - $somme_payement ;
        }

    }

    public function calculComplete($charge,  $montant = 0){
      $somme_payement = $this->somme_payement($charge);
      $somme_payement += $montant;
      $montant_payable = $charge->payable()->get()->last()->montant ;
      return ( ($montant_payable - $somme_payement) <= 0 )  ;
    }

    public function createEnregistrementPayementRefNo($charge){
      $nb_payement = EnregistrementPayement::count();
                                          /*where('eleve_id', $this->eleve_id)
                                          ->where('annee_academique_id', $this->annee_academique_id)
                                          ->where('payement_id',$charge->id)
                                          ->*/


      return $charge->ref_no.'/'.($nb_payement+1);
    }

    public function createPayementRefNo(){
      $generator = new InitialGenerator ;
      $initial = $generator->make($this->eleve->nom_complet) ;
      $presence = Payement::where('ref_no','like', "%{$initial}%" )->count();

      return  ($presence)?
        config('panel.payement.ref_no_prefix').$initial.'-'.($presence + 1) : 
        config('panel.payement.ref_no_prefix').$initial   ;
    }



    public function somme_payement($charge){
        return $somme_payement = EnregistrementPayement::where('eleve_id', $this->eleve_id)
                                          ->where('annee_academique_id', $this->annee_academique_id)
                                          ->where('payement_id',$charge->id)
                                          ->whereJsonDoesntContainKey('data->pour_inscription')
                                          ->sum('montant_paye');
    }


    public function valeurProgressionEcolage(){
        $charge = $this->getPayementCharge();
        $balance = $this->calculBalance($charge);

        if($charge){
            $montant_payable = $charge->payable->montant ;
            if($montant_payable){
                $pourcent = ( 100 - ((($balance * 1.00)/($montant_payable))*100.0) );
                return round($pourcent, 2);
            }else{
                return 100;
            }
        }else{
            return 0.0;
        }
    }


    public function getBalance(){
        $charge = $this->getPayementCharge();
        return $this->calculBalance($charge);
    }


    public function enregisterPayementEcolage($montant){
      $enregistrement = $this->enregisterPayement($montant);
      $recu = $this->enregistrerRecu($enregistrement);
      return $recu;
    }


    public function needPayementIncription() 
    {
        $nb = count($this->eleve->inscriptions);
        if($nb >= 2){
            return false;
        }
        $charge = $this->getPayementCharge();
        if(!$charge){
            return false ;         
        }
        $montant_inscription = $charge->payable->inscription ;
        if(!$montant_inscription){
            return false ;
        }
        return true;
    }


    public function isInscriptionPaye() 
    {
        $charge = $this->getPayementCharge();
        $count_payementInscription = EnregistrementPayement::where('eleve_id', $this->eleve_id)
                                          ->where('annee_academique_id', $this->annee_academique_id)
                                          ->where('payement_id',$charge->id)
                                          ->whereJsonContainsKey('data->pour_inscription')
                                          ->count();

        return ($count_payementInscription)? true : false ;
    }


    public function inscriptionCondition() 
    {
        
        return ((!$this->needPayementIncription()) || $this->isInscriptionPaye() ) ;
    }






    public function enregisterPayementInscription(){
        $charge = $this->getPayementCharge();

        if($charge == null){
            return null;
        }

        $data = [
            'payement_id' => $charge->id,
            'eleve_id' => $this->eleve_id ,
            'annee_academique_id' => $this->annee_academique_id ,
            'ref_no' => $this->createEnregistrementPayementRefNo($charge) ,
            'montant_paye' => $charge->payable->inscription ,
            'balance' => $this->calculBalance($charge,  0.0) ,
            'complete' => $this->calculComplete($charge,  0.0),
            'data' => ['pour_inscription' => true] ,
        ] ;

        $enregistrement = EnregistrementPayement::create($data);

        $recu = $this->enregistrerRecuInscription($enregistrement);
        return $recu;
    }

    public function enregistrerRecuInscription($enregistrement)
    {

        $data = [
            'enregistrement_payement_id' => $enregistrement->id,
            'montant_paye' => $enregistrement->montant_paye,
            'balance' => $enregistrement->balance,
            'annee_academique_id' => $enregistrement->annee_academique_id,
            'data' => ['pour_inscription' => true] ,
        ];

        $recu = Recu::create($data);
        return $recu ;
    }


    public function fraisInscription(){
        $charge = $this->getPayementCharge();
        if($charge){
            return $charge->payable->inscription ;
        }else{
            return 0.0;
        }
    }

    public function fraisEcolage(){
        $charge = $this->getPayementCharge();
        if($charge){
            return $charge->payable->montant ;
        }else{
            return 0.0;
        }
    }

    public function trancheEcolage(){
        $charge = $this->getPayementCharge();
        if($charge){
            $liste_payement = EnregistrementPayement::where('eleve_id', $this->eleve_id)
                                ->where('annee_academique_id', $this->annee_academique_id)
                                ->where('payement_id',$charge->id)
                                ->whereJsonDoesntContainKey('data->pour_inscription')
                                ->orderBy('created_at')
                                ->get();

            $tranche = [null,null,null,null] ;
            $liste_count = $liste_payement->count();

            for ($i=0; ($i < $liste_count) && ($i < 4 ) ; $i++) { 
                $tranche[$i] = $liste_payement[$i]->montant_paye ;
            }
            if($liste_count >= 5){
                $tranche[3] = ($liste_payement->sum('montant_paye')) - ($tranche[0] + $tranche[1] + $tranche[2]) ;
            }
            return $tranche;

        }else{
            return [0,0,0,0];
        }
    }


    public function marquerAbandon(){
        $tagAbd = \Spatie\Tags\Tag::findOrCreate('Abandon','Eleves');
        $tagAbd->setTranslation('name', 'court', 'ABD');
        $tagAbd->save();
        $this->attachTag($tagAbd);
        return $this->delete();
    }

    public function annulerAbandon(){
        $tagAbd = \Spatie\Tags\Tag::findOrCreate('Abandon','Eleves');
        $tagAbd->setTranslation('name', 'court', 'ABD');
        $tagAbd->save();
        $this->detachTag($tagAbd);
        return $this->restore();
    }


    public function marquerBoursier(){
        $tagBoursier = \Spatie\Tags\Tag::findOrCreate('Boursier','Eleves');
        $tagBoursier->setTranslation('name', 'court', 'BS');
        $tagBoursier->save();
        return $this->attachTag($tagBoursier);
    }

    public function annulerBoursier(){
        $tagBoursier = \Spatie\Tags\Tag::findOrCreate('Boursier','Eleves');
        $tagBoursier->setTranslation('name', 'court', 'BS');
        $tagBoursier->save();
        return $this->detachTag($tagBoursier);
    }

    public function marquerEnfantEnseignant(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Enfant d'Enseignant",'Eleves');
        $tagEE->setTranslation('name', 'court', 'EE');
        $tagEE->save();
        return $this->attachTag($tagEE);
    }

    public function annulerEnfantEnseignant(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Enfant d'Enseignant",'Eleves');
        $tagEE->setTranslation('name', 'court', 'EE');
        $tagEE->save();
        return $this->detachTag($tagEE);
    }




    public function marquerNouveauEleve(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Nouvel Eleve",'Eleves');
        $tagEE->setTranslation('name', 'court', 'N');
        $tagEE->save();
        return $this->attachTag($tagEE);
    }

    public function annulerNouveauEleve(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Nouvel Eleve",'Eleves');
        $tagEE->setTranslation('name', 'court', 'N');
        $tagEE->save();
        return $this->detachTag($tagEE);
    }

    public function marquerAncienEleve(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Ancien Eleve",'Eleves');
        $tagEE->setTranslation('name', 'court', 'AE');
        $tagEE->save();
        return $this->attachTag($tagEE);
    }

    public function annulerAncienEleve(){
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Ancien Eleve",'Eleves');
        $tagEE->setTranslation('name', 'court', 'AE');
        $tagEE->save();
        return $this->detachTag($tagEE);
    }


    

}
