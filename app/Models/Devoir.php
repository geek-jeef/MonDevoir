<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    use HasFactory;

    /*
            $table->string('nom_devoir',100);
            $table->unsignedInteger('ponderation');
            $table->unsignedInteger('matiere_id');

            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */

    protected $fillable = [
            'nom_devoir',
            'ponderation',
            'matiere_id',
            'salle_id',
            'classe_id', 
            'annee_academique_id', 
    ];

    protected $appends = array('nom_notable');

    public function getNomNotableAttribute()
    {
        return $this->nom_devoir;  
    }



    public function note($eleve_id)
    {
        return $this->morphOne(Note::class, 'notable')->where('notes.eleve_id',$eleve_id)->get()->last();
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function academique()
    {
        return $this->salle();
    }


    public function eleves()
    {
        return $this->salle->eleves()->orderBy('nom', 'asc')->orderBy('prenoms', 'asc')->get()->all();
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id' ,'id');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' ,'id');
    }


    /*
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     *
    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }
    */

}
