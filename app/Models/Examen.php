<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    /*
    $table->id();
            $table->string('nom_examen');
            $table->unsignedInteger('periode_id');
            $table->boolean('ouvert_pour_enregistrement')->default(true);
            
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' ,'id');
    }



    public function classes()
    {
        $notations = Notation::select('classe_id')->distinct()->where("examen_id",$this->id)->get();
        $listeClasse = $notations->map(function ($notation) {
                            return Classe::find($notation->classe_id);
                      });
        return $listeClasse;
    }


    public function matieres($classe_id)
    {
        $notations = Notation::select('matiere_id')->distinct()->where("examen_id",$this->id)->where("classe_id",$classe_id)->get();
        $liste = $notations->map(function ($notation) {
                            return Matiere::find($notation->matiere_id);
                      });
        return $liste;
    }









}
