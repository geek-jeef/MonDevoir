<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;
    protected $fillable = [
        'notable_id', 
        'notable_type', 
        'examen_id', 
        'eleve_id', 
        'matiere_id', 
        'salle_id', 
        'classe_id', 
        'annee_academique_id', 
        'data',
    ];


     /*
            $table->unsignedInteger('notable_id');
            $table->unsignedInteger('notable_type');


            $table->unsignedInteger('examen_id');


            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('matiere_id');

            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('classe_id');

            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */

    public function notable()
    {
        return $this->morphTo();
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class);
    }

    public static function moyenneDevoir($eleve_id , $matiere_id , $examen_id){
        return Notation::moyenneNotable(Devoir::class, $eleve_id , $matiere_id , $examen_id);
    }

    public static function moyenneComposition($eleve_id , $matiere_id , $examen_id){
        return Notation::moyenneNotable(Composition::class, $eleve_id , $matiere_id , $examen_id);
    }

    public static function moyenneNotable($notable_type, $eleve_id , $matiere_id , $examen_id){

        /*$notations = Notation::where('examen_id',$examen_id)
                                  ->where('eleve_id',$eleve_id)
                                  ->where('matiere_id',$matiere_id)
                                  ->where('notable_type',$notable_type)->get() ;
        $somme_ponderation = 0;
        $points_cumulé = 0.0;

        debug('resutat moyenneNotable form notation model');

        foreach($notations as $notation ){

            $notable = $notation->notable;
            debug('notable from notation model');
            debug($notable);

            $ponderation 

            debug('note from notation model');
            debug($notable->note($eleve_id)->get());


        }*/

    }


}
