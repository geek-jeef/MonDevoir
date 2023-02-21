<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

Use App\Models\AnneeAcademique;
Use App\Models\CycleAcademique;
Use App\Models\Periode;
Use App\Models\Examen;
Use App\Models\Eleve;
Use App\Models\Classe;
Use App\Models\Salle;
Use App\Models\Note;
Use App\Models\Notation;
Use App\Models\Devoir;
Use App\Models\Composition;


class PeriodeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $annee = AnneeAcademique::find(1);
    $cycle = CycleAcademique::find(2);

    $periode = Periode::create([
      'nom_periode' => '1er Trimestre',
      'date_debut' => date('Y-m-d',strtotime('-40 days')),
      'date_fin' => date('Y-m-d',strtotime('+40 days')),
      'cycle_academique_id' => $cycle->id, // college
      'annee_academique_id' => $annee->id, // 2021-2022
    ]);
    
    echo PHP_EOL, 'periode crée';
    $examen = Examen::create([
      'nom_examen' => 'Examen 1er Trimestre',
      'periode_id' => $periode->id,
      'ouvert_pour_enregistrement' => true,
      'annee_academique_id' => $annee->id,
    ]);

    echo PHP_EOL, 'Examen crée';

    $classes = $cycle->classes()->get();
    foreach($classes as $classe){
      $salles = $classe->salles()->get();
      echo PHP_EOL, 'Classe : '. $classe->nom_classe;
      foreach($salles as $salle){
        echo PHP_EOL, 'Salle : '. $salle->nom_salle;

        $matieres = $salle->matieres()->get();
        $eleves = $salle->eleves()->get();
        foreach($matieres as $matiere){
          echo PHP_EOL, 'matiere : '. $matiere->nom_matiere_court;

          $devoir = Devoir::create([
            'nom_devoir' => 'Devoir 1 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
            'ponderation' => 25,
            'matiere_id' => $matiere->id,
            'salle_id' => $salle->id,
            'classe_id' => $classe->id, 
            'annee_academique_id' => $annee->id, 
          ]);

          $devoir2 = Devoir::create([
            'nom_devoir' => 'Devoir 2 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
            'ponderation' => 25,
            'matiere_id' => $matiere->id,
            'salle_id' => $salle->id,
            'classe_id' => $classe->id, 
            'annee_academique_id' => $annee->id, 
          ]);

          $composition = Composition::create([
            'nom_composition' => 'Composition '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
            'ponderation' => 50,
            'matiere_id' => $matiere->id,
            'classe_id' => $classe->id, 
            'annee_academique_id' => $annee->id, 
          ]);

          $notables = [ $devoir , $devoir2 , $composition] ;
          foreach($notables as $notable) {
            echo PHP_EOL, 'notable : '. $notable->nom_notable;

            foreach($eleves as $eleve){
              $note = Note::create([
                'note' => rand(8,20) ,
                'notable_id' => $notable->id,
                'notable_type' => $notable::class,
                'eleve_id' => $eleve->id,
                'matiere_id' => $matiere->id,

                'annee_academique_id' => $annee->id, 
              ]);
            }
          }
        }
      }
    }

  }
}
