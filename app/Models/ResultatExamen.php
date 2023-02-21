<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatExamen extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $fillable = [
        'eleve_id',
        'classe_id',
        'salle_id',
        'examen_id',
        'annee_academique_id',

        'moyenne',
        'somme_coeficient',
        'points',
        'observations',

        'max_moyenne_classe',
        'min_moyenne_classe',
        'avg_moyenne_classe',

        'max_moyenne_salle',
        'min_moyenne_salle',
        'avg_moyenne_salle',

        'rang_classe',
        'rang_salle',
    ];

    /*  
       {{--
            unsignedInteger('eleve_id');
            unsignedInteger('classe_id');
            unsignedInteger('salle_id');
            unsignedInteger('examen_id');

            unsignedFloat('moyenne');
            unsignedInteger('somme_coeficient');

            unsignedFloat('points');


            unsignedFloat('max_moyenne_classe');
            unsignedFloat('min_moyenne_classe');
            unsignedFloat('avg_moyenne_classe');

            unsignedFloat('max_moyenne_salle');
            unsignedFloat('min_moyenne_salle');
            unsignedFloat('avg_moyenne_salle');


            string('rang_classe');
            string('rang_salle');

            string('observations');

            unsignedInteger('annee_academique_id');


        --}}
    */

    public function examen()
    {
        return $this->belongsTo(Examen::class);
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
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id', 'id');
    }

    public function bulletin()
    {
        return $this->HasOneDeep(Bulletin::class ,['enregistrement_examen_bulletins'])->latest('bulletins.created_at');
    }



    public static function resultatExist($examen_id, $classe_id)
    {
        return ResultatExamen::where('examen_id',$examen_id)->where('classe_id',$classe_id)->count();
    }


    public static function resultatExistSalle($examen_id, $salle_id)
    {
        return ResultatExamen::where('examen_id',$examen_id)->where('salle_id',$salle_id)->count();
    }

    public static function calculResultatClasse($examen, $classe){

        $info = [
                'examen_id' => $examen->id,
                'classe_id' => $classe->id,
                'annee_academique_id' => $examen->annee->id,
            ];

        $matieres = Notation::select('matiere_id')
                            ->distinct()
                            ->where('examen_id',$examen->id)
                            ->where('classe_id',$classe->id)
                            ->get()
                            ->map(function ($notation) {
                                $matiere = Matiere::find($notation->matiere_id);
                                return $matiere;
                            });

        foreach($matieres as $matiere){
            ResultatMatiere::calculResultatMatiere($examen, $classe,$matiere) ;
        }

        //for each salle
            // for each eleve
                // for each ResultatMatiere

        $salles = $classe->salles ;

        foreach($salles as $salle){
            $info_salle = [ 'salle_id' => $salle->id ] ;

            //debug('Salle : '.$salle->nom_salle);

            $eleves = $salle->eleves;

            foreach($eleves as $eleve) {
                $info_eleve = [ 'eleve_id' => $eleve->id ] ;

                $moyenne = 0.0 ;
                $somme_coeficient = 0.0 ;
                $points = 0.0 ;

                //debug('Eleve : '.$eleve->nom_complet);

                foreach($matieres as $matiere) {
                    $info_matiere = [ 'matiere_id' => $matiere->id ] ;

                    //debug('Matiere : '.$matiere->nom_matiere);

                    $somme_coeficient += $matiere->coeficient ;


                    $resultat_matiere = ResultatMatiere::where(array_merge($info,$info_salle,$info_eleve,$info_matiere))->first();
                    //debug($resultat_matiere);

                    $points += $resultat_matiere->points ;
                }

                if($somme_coeficient != 0.0){
                    $moyenne = ( $points * 1.0 ) / $somme_coeficient ;
                }

                $info_note = [ 
                    'points' => $points ,
                    'somme_coeficient' => $somme_coeficient,
                    'moyenne' => $moyenne,
                    'observations' => Note::observation($moyenne)
                ] ;
                $resultat_eleve = ResultatExamen::updateOrCreate(array_merge($info,$info_eleve),
                    array_merge($info_salle,$info_note)
                );
            }

            // salle average and rank

            $resultats_salle = ResultatExamen::where(array_merge($info,$info_salle))->orderByDesc('moyenne')->get();

            $aggregate_data_salle = [
                'max_moyenne_salle' => $resultats_salle->max('moyenne'),
                'min_moyenne_salle' => $resultats_salle->min('moyenne'),
                'avg_moyenne_salle' => $resultats_salle->avg('moyenne'),
            ];
            $resultats_salle->toQuery()->update($aggregate_data_salle);

            $rank = 1;
            $rank = 1;
            $previous = null;

            $moyenne_occurence_salle_collection = $resultats_salle->countBy(function ($item) {
                return (string) $item->moyenne;
                }
            );
            $moyenne_occurence_array = $moyenne_occurence_salle_collection->all() ;

            
            foreach ($resultats_salle as $result) {
                
                $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
                $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );

                if($previous){
                    $result->rang_salle = ($result->moyenne == $previous->moyenne )?  $previous->rang_salle : $rank_string;
                }else{
                    $result->rang_salle = $rank_string;
                }

                $result->save();
                $previous = $result;

                $rank++;
                
            }

        }

        // classe Average and rank
        $resultats_classe = ResultatExamen::where(array_merge($info))->orderByDesc('moyenne')->get();

        $aggregate_data_classe = [
            'max_moyenne_classe' => $resultats_classe->max('moyenne'),
            'min_moyenne_classe' => $resultats_classe->min('moyenne'),
            'avg_moyenne_classe' => $resultats_classe->avg('moyenne'),
        ];
        debug($aggregate_data_classe);
        $output = $resultats_classe->toQuery()->update($aggregate_data_classe);
        debug($output);

        $rank = 1;
        $previous = null;

        $moyenne_occurence_classe_collection = $resultats_classe->countBy(function ($item) {
            return (string) $item->moyenne;
            }
        );
        
        $moyenne_occurence_array = $moyenne_occurence_classe_collection->all() ;

        foreach ($resultats_classe as $result) {
            
            $is_ex = ( $moyenne_occurence_array[(string)$result->moyenne] >= 2 ) ? true : false ;
            $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );

            if($previous){
                $result->rang_classe = ($result->moyenne == $previous->moyenne )?  $previous->rang_classe : $rank_string;
            }else{
                $result->rang_classe = $rank_string;
            }

            $result->save();
            $previous = $result;
            $rank++;
        }


    }



}
