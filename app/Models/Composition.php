<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    /*
                $table->string('nom_composition',100);
            $table->unsignedInteger('ponderation');
            $table->unsignedInteger('matiere_id');
            
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */


    protected $fillable = [
            'nom_composition',
            'ponderation',
            'matiere_id',
            'classe_id', 
            'annee_academique_id', 
    ];
    protected $appends = array('nom_notable');

    public function getNomNotableAttribute()
    {
        return $this->nom_composition;  
    }

    public function note($eleve_id)
    {
        return $this->morphOne(Note::class, 'notable')->where('notes.eleve_id',$eleve_id)->get()->last();
    }

    public function eleves()
    {
        return $this->classe->eleves()->orderBy('nom', 'asc')->orderBy('prenoms', 'asc')->get()->all();
    }


    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }


    public function academique()
    {
        return $this->classe();
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' ,'id');
    }



}
