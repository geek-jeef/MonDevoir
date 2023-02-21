<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom_classe',
        'nom_court',
        'serie',
        'matiere_au_choix',
        'max_matiere_au_choix',
        'ouvert_pour_inscription',
        'active',
        'cycle_academique_id',
        'data'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'data' => 'array',
    ];

    public function effectif(){
        $effectif = 0;
        foreach ($this->salles()->get() as $salle) {
            $effectif += $salle->effectif();
        }
        return $effectif;
    }

    public function annee()
    {
        return $this->hasOneDeepFromReverse(
            (new AnneeAcademique())->classes()
        );
    }


    public function cycle()
    {
        return $this->belongsTo(CycleAcademique::class, 'cycle_academique_id', 'id');
    }

    public function infoCycle()
    {
        return CycleAcademique::find($this->cycle_academique_id);
    }

    public function salles()
    {
        return $this->hasMany(Salle::class);
    }

    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }

    public function eleves()
    {
        return $this->hasManyDeep(Eleve::class, [ Salle::class, EleveSalle::class]);
    }

    public function tuteurs()
    {
        return $this->hasManyDeep(Tuteur::class, [Salle::class, EleveSalle::class , Eleve::class , EleveTuteur::class ]);
    }



    public function compositions()
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
            return $this->cycle->getSystemeEcolage();
        }
    }



    public function getNomAcademiqueAttribute(){
        return $this->nom_classe;
    }

    public function getHasAcademiqueChildrenAttribute(){
        return true;
    }
    
    public function getHasAcademiqueParentAttribute(){
        return true;
    }

    public function academique_children()
    {
        return $this->hasMany(Salle::class);
    }

    public function academique_parent()
    {
        return $this->belongsTo(CycleAcademique::class, 'cycle_academique_id', 'id');
    }
    

}

