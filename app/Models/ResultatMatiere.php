<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatMatiere extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
          "matiere_id",
          "classe_id",
          "examen_id",
          "annee_academique_id",
          "salle_id",
          "eleve_id",
          "moyenne_devoir",
          "note_composition",
          "moyenne",
          "points",
          "observations",
          "rang_matiere_classe",
          "rang_matiere_salle",

    ];


    /*
            $table->unsignedInteger('matiere_id');
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('examen_id');
            $table->unsignedFloat('moyenne_devoir');
            $table->unsignedFloat('note_composition');
            $table->unsignedFloat('moyenne');
            $table->unsignedFloat('points');
            $table->string('rang_matiere_classe');
            $table->string('rang_matiere_salle');
            $table->string('observations');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->timestamps();
            $table->userstamps();
            $table->softDeletes();
    */

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


    public static function resultatExist($examen_id, $classe_id,$matiere_id)
    {
        return ResultatMatiere::where('examen_id',$examen_id)->where('matiere_id',$matiere_id)->where('classe_id',$classe_id)->count();
    }



    public static function calculResultatMatiere($examen, $classe,$matiere)
    {
        $info = [  'matiere_id' => $matiere->id,
                    'classe_id' => $classe->id,
                    'examen_id' => $examen->id,
                    'annee_academique_id' => $examen->annee->id,
                ] ;
        $salles = $classe->salles ;

        //for each salle
            //for each notable
                // for each eleve

        foreach($salles as $salle){
            $info_salle = [ 'salle_id' => $salle->id ] ;
            $notables = Notation::select('notable_id','notable_type')
                            ->distinct()
                            ->where('examen_id',$examen->id)
                            ->where('classe_id',$classe->id)
                            ->where('matiere_id',$matiere->id)
                            ->get()
                            ->map(function ($notation) {
                                return $notation->notable;
                            }); 
            $eleves = $salle->eleves;

            foreach($eleves as $eleve) {
                $info_eleve = [ 'eleve_id' => $eleve->id ] ;
                $somme_ponderation_devoir = 0;
                $points_cumule_devoir = 0.0;
                $somme_ponderation_composition = 0;
                $points_cumule_composition = 0.0;
                foreach($notables as $notable){
                    //dd($notable);
                    if($notable->note($eleve->id)){
                        if($notable::class == Devoir::class){
                            $somme_ponderation_devoir += $notable->ponderation ;
                            $points_cumule_devoir += $notable->ponderation * (($notable->note($eleve->id))? $notable->note($eleve->id)->note : 0 );
                        }
                    }

                    if($notable::class == Composition::class){
                        $somme_ponderation_composition += $notable->ponderation ;
                        $points_cumule_composition += $notable->ponderation * (($notable->note($eleve->id))? $notable->note($eleve->id)->note : 0 ) ;
                    }
                    
                }

                $moyenne_devoir = $points_cumule_devoir / $somme_ponderation_devoir ;
                $note_composition = $points_cumule_composition / $somme_ponderation_composition ;
                $moyenne = ( $points_cumule_devoir + $points_cumule_composition ) / ( $somme_ponderation_composition + $somme_ponderation_devoir ) ;
                $points =  $moyenne * $matiere->coeficient ;

                $info_note = [  'moyenne_devoir' => $moyenne_devoir ,
                                'note_composition' => $note_composition ,
                                'moyenne' => $moyenne ,
                                'points' => $points,
                                'observations' => Note::observation($moyenne) ] ;

                $resustatRow = ResultatMatiere::updateOrCreate(array_merge($info,$info_eleve),
                    array_merge($info_salle,$info_note)
                );
            }

            // make rangement for salle

            $resultats_salle = ResultatMatiere::where(array_merge($info,$info_salle))->orderByDesc('moyenne')->get();
            $rank = 1;
            $previous = null;


            $moyenne_occurence_salle_collection = $resultats_salle->countBy(function ($item) {
                return (string) $item->moyenne;
                }
            );
            $moyenne_occurence_array = $moyenne_occurence_salle_collection->all() ;

            foreach ($resultats_salle as $result) {
                /*if ($previous && $previous->moyenne != $result->moyenne) {
                    $rank++;
                }
                $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
                $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );
                $result->rang_matiere_salle = $rank_string;
                $previous = $result;
                $result->save();*/

                $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
                $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );

                if($previous){
                    $result->rang_matiere_salle = ($result->moyenne == $previous->moyenne )?  $previous->rang_matiere_salle : $rank_string;
                }else{
                    $result->rang_matiere_salle = $rank_string;
                }

                $result->save();
                $previous = $result;
                $rank++;

            }

        }

        $resultats_classe = ResultatMatiere::where($info)->orderByDesc('moyenne')->get();
        $rank = 1;
        $previous = null;
        $moyenne_occurence_classe_collection = $resultats_classe->countBy(function ($item) {
            return (string) $item->moyenne;
            }
        );
        $moyenne_occurence_array = $moyenne_occurence_classe_collection->all() ;
        foreach ($resultats_classe as $result) {
            /*if ($previous && $previous->moyenne != $result->moyenne) {
                $rank++;
            }
            $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
            $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );
            $result->rang_matiere_classe = $rank_string;
            $previous = $result;
            $result->save();*/

            $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
            $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );

            if($previous){
                $result->rang_matiere_classe = ($result->moyenne == $previous->moyenne )?  $previous->rang_matiere_classe : $rank_string;
            }else{
                $result->rang_matiere_classe = $rank_string;
            }

            $result->save();
            $previous = $result;
            $rank++;

        }


    }



    public function enseignantSalle(){

        $cours = Cours::
                    select('enseignant_id')
                    ->selectRaw(' count(enseignant_id) as nb')
                    ->where('salle_id',$this->salle_id)
                    ->where('matiere_id',$this->matiere_id)
                    ->groupBy('enseignant_id')
                    ->orderByDesc('nb')
                    ->first();
        return ($cours) ? $cours->enseignant_id : null ;
    }




}
