<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CycleAcademique extends Model
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
        'nom_cycle',
        'ouvert_cette_annee',
        'annee_academique_id',
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

    public function getAnnee()
    {
        return AnneeAcademique::find($this->annee_academique_id) ;
    }
    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
    }
    public function directeur()
    {
        return $this->belongsTo(Personnel::class,'directeur_id','id') ;
    }
    public function responsable()
    {
        return $this->belongsTo(Personnel::class,'directeur_id','id') ;
    }

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    public function salles()
    {
        return $this->hasManyDeep(Salle::class ,[Classe::class]);
    }

    public function eleves()
    {
        return $this->hasManyDeep(Eleve::class, [Classe::class , Salle::class, EleveSalle::class]);
    }

    public function tuteurs()
    {
        return $this->hasManyDeep(Tuteur::class, [Classe::class , Salle::class, EleveSalle::class , Eleve::class , EleveTuteur::class ]);
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
        return $this->systemeEcolage ;
    }


    /**
     * Scope a query to only include open cycle.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeOuvert($query)
    {
        $query->where('cycle_academiques.ouvert_cette_annee', true);
    }

    /**
     * Scope a query to only include open cycle.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopePourAnnee($query,$annee_id)
    {
        $query->where('cycle_academiques.annee_academique_id', $annee_id);
    }

    public function periodes()
    {
        return $this->hasMany(Periode::class);
    }


    public function getNomAcademiqueAttribute(){
        return $this->nom_cycle;
    }

    public function getHasAcademiqueChildrenAttribute(){
        return true;
    }

    public function getHasAcademiqueParentAttribute(){
        return false;
    }


    public function academique_children()
    {
        return $this->hasMany(Classe::class);
    }

}