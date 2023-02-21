<?php

namespace App\Http\Livewire\Import\Payement;

use Livewire\Component;

use App\Models\Salle;
use App\Models\Eleve;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;
use App\Settings\GeneralSettings;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PayementParSalle extends Component
{
    use Actions;
    use WithFileUploads;

    public $entete = true;
    public $titre = 'Importer des Payements' ;
    public $column = 3;
    public $footer = 0;
    public $paysage = true;
    public $data = [] ;
    public $salle ;

    public $excel_file;
    public $ListePayement;
    public $firstRow;
    public $annee ;



    public $indexNom;
    public $indexPrenoms;
    public $liste_index_tranche;
    public $indexInscription;

    public $listeRecu = [] ;


    protected $listeners = [
        'update-liste-data' => 'updateListeData',
        //'retirer-eleve-liste' => 'confirmRetraitEleve',
    ];

    
    public function updateListeData($data){
        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $this->salle = Salle::find($data['salle_id']);
        }
    }



    public function mount(){
        $this->annee = \Hp::annee();
    }

    public function getExcel()
    {
        $this->validate([
            'excel_file' => 'file|max:1024', // 1MB Max
        ]);

        $base_collection = \Excel::toCollection(collect([]), $this->excel_file);
        $base_collection = $base_collection->collapse();

        $dataFirstRow = $base_collection->first();
        $base_collection = $base_collection->skip(1);


        $nameFieldAccepted = ['Noms', 'noms', 'Nom', 'nom'];
        $this->indexNom =  false;
        foreach($nameFieldAccepted as $field){
            $this->indexNom = $dataFirstRow->search($field) ;
            //dump($this->indexNom);
            if( $this->indexNom !== false){
                break;
            }
        }
        if($this->indexNom === false ){
            $this->notification()->send([
                'title'       => 'Document invalide!',
                'description' => "Aucune colonne contenant le 'Nom' des eleves",
                'icon'        => 'error'
            ]);

            return;
        }


        $firstnameFieldAccepted = ['Prenoms', 'Prenom', 'prenoms', 'prenom', "Prénoms" , "prénoms" , "Prénoms" , "prénoms"];
        $this->indexPrenoms =  false;
        foreach($firstnameFieldAccepted as $field){
            $this->indexPrenoms = $dataFirstRow->search($field) ;
            //dump($this->indexPrenoms);
            if( $this->indexPrenoms !== false){
                break;
            }
        }
        if($this->indexPrenoms === false ){
            $this->notification()->send([
                'title'       => 'Document invalide!',
                'description' => "Aucune colonne contenant le 'Prenoms' des eleves",
                'icon'        => 'error'
            ]);
            return;
        }


        $inscriptionFieldAccepted = ['Inscription', 'inscription', 'insc.', 'INSC.', "INSCRIPTION"];
        $this->indexInscription =  false;
        foreach($inscriptionFieldAccepted as $field){
            $this->indexInscription = $dataFirstRow->search($field) ;
            //dump($this->indexInscription);
            if( $this->indexInscription !== false){
                break;
            }
        }
        if($this->indexInscription === false ){
            $this->notification()->send([
                'title'       => 'Document invalide!',
                'description' => "Aucune colonne contenant pour les frais d'inscription des eleves ('Inscription' ou 'Insc.') ",
                'icon'        => 'error'
            ]);
            return;
        }




 
        $liste_montant = $dataFirstRow->filter(function ($value, $key) {
            return Str::of($value)->startsWith('TRAN') 
                || Str::of($value)->startsWith('MONT') 
                || Str::of($value)->startsWith('Tran') 
                || Str::of($value)->startsWith('Mont')
                || Str::of($value)->startsWith('tran') 
                || Str::of($value)->startsWith('mont') ;
        });
 
        $this->liste_index_tranche = $liste_montant->keys();


        if( count($this->liste_index_tranche) == 0 ){
            $this->notification()->send([
                'title'       => 'Document invalide!',
                'description' => "Aucune colonne contenant pour les tranches de payement ('Tranche' ou 'Montant') ",
                'icon'        => 'error'
            ]);
            return;
        }



        $this->firstRow = collect(['Eleves','Ecolage','Etat Inscription', 'Inscription']);
        for ($i=1; $i <= count($this->liste_index_tranche) ; $i++) { 
            $this->firstRow->push("Tranche {$i}");
        }
        $this->firstRow->push("Nouveau Solde");
        $this->firstRow->push("Action");

        /*
        $ecolageFieldAccepted = ['ECOLAGE', 'ecolage', 'écolage'];
        $inscriptionFieldAccepted = ['INSC.', 'inscription', 'écolage'];

        $expectedFormat =  collect(
            ["N°", "Nom", "Prenoms", "ECOLAGE", "INSC.", "TRAN. 1", "TRAN. 2", "TRAN. 3", "TRAN. 4", "RESTE"]
        );*/

        /*$combined = collect([]);

        foreach ($base_collection as $row) {
            $combined->push($this->firstRow->combine($row));
        }*/

        $this->ListePayement = $base_collection;

    }


    public function identificationEleve($info){
        $name = $info[$this->indexNom];
        $firstName = $info[$this->indexPrenoms];
        //debug(" {$name} , {$firstName} ");

        $eleve_classe = $this->salle->eleves;
        $eleve_liste = $eleve_classe->where('nom', $name);

        if(count($eleve_liste) == 1 ){
            //debug($eleve_liste->first());
            return $eleve_liste->first();

        }elseif(count($eleve_liste) > 1){

            $eleve_u_prenom = $eleve_liste->where('prenoms', $firstName);
            if(count($eleve_u_prenom) == 1 ){
                //debug($eleve_u_prenom->first());
                return $eleve_u_prenom->first();

            }elseif( count($eleve_u_prenom) > 1){
                //alert eleve multiple
                /*$this->notification()->send([
                    'title'       => 'Nom invalide!',
                    'description' => "Plus d'un élève porte le nom : \n {$name}, {$firstName} \n dans la classe {$this->salle->nom_academique}. \n l'enregistrement à été ignoré.",
                    'icon'        => 'warning',
                    'timeout'     => false
                ]);*/
            }
        }
        //alert aucun eleve
        /*$this->notification()->send([
            'title'       => 'Nom invalide!',
            'description' => "Aucun élève ne porte le nom : \n {$name}, {$firstName} \n dans la classe {$this->salle->nom_academique}. \n l'enregistrement à été ignoré.",
            'icon'        => 'warning',
            'timeout'     => false
        ]);*/
        return false ;
    }




    public function confirmRetrait($info){

        $this->dialog()->confirm([
            'title'       => 'Retirer cet eleve?',
            'description' => "Eleve: {$info[1]}?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Retirer',
                'method' => 'retirerEleve',
                'params' => $info[0],
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);
    }

    public function retirerEleve($index){
        debug($index);
        $this->ListePayement->pull($index);
    }


    public function confirmEnregistrerPayement(){
        $this->dialog()->confirm([
            'title'       => 'Enregistrer Les Payements?',
            'description' => "Enregistrer les payements dans cette liste ?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Enregistrer',
                'method' => 'enregistrerPayement',
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);
    }


    public function enregistrerPayement(){

        debug("debut payement");

        //iterer sur les eleves qui doivent faire des payements

        foreach ($this->ListePayement as $key => $information){
           

            $eleve = $this->identificationEleve($information);
            if($eleve === false){
                //debug("{$information[$this->indexNom]}, {$information[$this->indexPrenoms]} : Eleve non-identifié");
                continue ;
            }
            $inscription = $eleve->inscription_courante;
            debug("{$information[$this->indexNom]}, {$information[$this->indexPrenoms]} : inscription data : {$information[$this->indexInscription]} ");
            if(is_numeric($information[$this->indexInscription])){
                debug('is is_numeric : true');
                debug("condition inscription : {$inscription->inscriptionCondition()} ");
                debug("valeur inscription : {$inscription->fraisInscription()}");
                debug("valeur inscription payement : {$information[$this->indexInscription]}");
                if ( (!$inscription->inscriptionCondition()) && ( $inscription->fraisInscription() == $information[$this->indexInscription] ) ){
                    $recu = $inscription->enregisterPayementInscription();
                    $this->listeRecu[] = $recu ;
                }
            }

            // verif ecolage
            $montant_exist = false ;
            foreach($this->liste_index_tranche as $index){
                if(is_numeric($information[$index])){
                    $montant_exist = true ;
                    break;
                }
            }
            if($montant_exist === false){
                //debug("{$information[$this->indexNom]}, {$information[$this->indexPrenoms]} : Aucun payement dans la liste");
                continue ;
            }
            //proceder au payement ecolage
            foreach($this->liste_index_tranche as $index){
                $montant = $information[$index] ;
                if(is_numeric($information[$index])){

                    if(!(($inscription->getBalance() - $information[$index] ) < 0)  ) {
                        $recu = $inscription->enregisterPayementEcolage($montant);
                        $this->listeRecu[] = $recu ;
                    }
                }
            }
        }


        /*debug($this->listeRecu);
        $recu_data = 
        debug($this->listeRecu);*/

        debug("Fin payement");



        //$this->preparerRecu();

        $this->notification()->send([
            'title'       => 'Payement Enregistré!',
            'description' => "Payement Enregistrée avec succès",
            'icon'        => 'success'
        ]);


    }

    public function preparerRecu(){
        $recu_data = collect($this->listeRecu);
    }

    public function render()
    {
        return view('livewire.import.payement.payement-par-salle')->layout('layouts.printable');
    }
}
