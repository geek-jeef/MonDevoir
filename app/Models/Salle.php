<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Salle extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    public function effectif(){
        return count(EleveSalle::where('salle_id',$this->id)->get());
    }


    public function getNomAcademiqueAttribute(){
        return $this->nom_salle;
    }

    public function annee()
    {
        return $this->hasOneDeepFromReverse(
            (new AnneeAcademique())->salles()
        );
    }

    public function titulaire()
    {
        $prof = Enseignant::find($this->enseignant_id);
        return $prof->nom." ".$prof->prenoms;
    }

    public function enseignant()
    {
        return $this->belongsTo(Personnel::class,'enseignant_id' ,'id');
    }

    public function cycle()
    {
        return $this->hasOneDeepFromReverse(
            (new CycleAcademique())->salles()
        );
    }

    /*public function salles()
    {
        return $this->hasManyDeep(Salle::class ,[Classe::class]);
    }*/

    public function cours(){
        return $this->hasMany(Cours::class);
    }


    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function matieres()
    {
        return $this->classe->matieres();
    }


    public function eleves()
    {
        return $this->hasManyDeep(Eleve::class, [EleveSalle::class]);
    }

    public function tuteurs()
    {
        return $this->hasManyDeep(Tuteur::class, [EleveSalle::class , Eleve::class , EleveTuteur::class ]);
    }

    public function ajouterEleve(Eleve $eleve){
        return Inscription::updateOrCreate(
            [
                'eleve_id' => $eleve->id,
                'annee_academique_id' => $this->annee->id ,
            ],
            [
                'salle_id' => $this->id,
            ]
        );
    }



    public function devoirs()
    {
        return $this->hasMany(Devoir::class);
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
            return $this->classe->getSystemeEcolage();
        }
    }

    public function getHasAcademiqueChildrenAttribute(){
        return false;
    }
    public function getHasAcademiqueParentAttribute(){
        return true;
    }



    public function academique_parent()
    {
        return $this->belongsTo(Classe::class);
    }






}


