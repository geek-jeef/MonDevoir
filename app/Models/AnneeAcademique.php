<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnneeAcademique extends Model
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
        'nom_annee',
        'date_debut',
        'date_fin',
        'ouvert_pour_inscription',
        'active',
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

    public function debut_annee(){
        return date('d/m/Y', strtotime($this->date_debut)) ;
    }

    public function fin_annee(){
        return date('d/m/Y', strtotime($this->date_fin)) ;
    }

    public function directeur()
    {
        return $this->belongsTo(Personnel::class,'directeur_id','id') ;
    }
    
    public function cycles()
    {
        return $this->hasMany(CycleAcademique::class);
    }

    public function classes()
    {
        return $this->HasManyDeep(Classe::class ,[CycleAcademique::class]);
    }


    public function salles()
    {
        return $this->hasManyDeep(Salle::class, [CycleAcademique::class, Classe::class]);
    }

    public function eleves()
    {
        return $this->hasManyDeep(Eleve::class, [CycleAcademique::class, Classe::class , Salle::class, EleveSalle::class]);
    }

    public function tuteurs()
    {
        return $this->hasManyDeep(Tuteur::class, [CycleAcademique::class, Classe::class , Salle::class, EleveSalle::class , Eleve::class , EleveTuteur::class ]);
    }


    public function Cours(){

        return DB::table('cours')
                ->select('*')
                ->addSelect('cours.id as cours_id')
                ->join('salles', 'salles.id', '=', 'cours.salle_id')
                ->join('personnels', 'personnels.id', '=', 'cours.enseignant_id')
                ->join('matieres', 'matieres.id', '=', 'cours.matiere_id')
                ->join('classes', 'classes.id', '=', 'salles.classe_id')
                ->join('annee_academiques', 'annee_academiques.id', '=', 'cours.annee_academique_id')
                ->join('cycle_academiques', 'cycle_academiques.id', '=', 'classes.cycle_academique_id')
                ->where('cours.annee_academique_id',$this->id) ;
    }



    /*public function examens()
    {
        return $this->hasMany(Examen::class);
    }*/

    public function periodes()
    {
        return $this->hasMany(Periode::class);
    }





    public function enregistrementPayement()
    {
        return $this->hasMany(EnregistrementPayement::class);
    }



    public function getNomAcademiqueAttribute(){
        return $this->nom_annee;
    }

    public function getHasAcademiqueChildrenAttribute(){
        return true;
    }

    public function getHasAcademiqueParentAttribute(){
        return false;
    }


    public function academique_children()
    {
        return $this->hasMany(CycleAcademique::class);
    }


}
