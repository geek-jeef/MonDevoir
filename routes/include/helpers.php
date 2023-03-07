<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;


use App\Http\Livewire\Design;
use App\Http\Livewire\Design2;
use App\Http\Livewire\Design3;
use App\Http\Livewire\Test;


use App\Http\Controllers\DatatablesController;



use App\Http\Livewire\Import\Eleve\ImportParSalle;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

  
    Route::get('/import/eleve/salle',ImportParSalle::class)->name('import.eleve.salle');



    Route::get('/design',Design::class)->name('design');
    Route::get('/design2',Design2::class)->name('design2');
    Route::get('/design3',Design3::class)->name('design3');
    Route::get('/datatables/eleves',[DatatablesController::class, 'ElevesTablesData'])->name('data.eleves');
    Route::get('/datatables/cours',[DatatablesController::class, 'CoursTablesData'])->name('data.cours');

});

Route::get('/test',Test::class)->name('test');


use SimpleSoftwareIO\QrCode\Facades\QrCode;
Route::get('/qr/{test}',function ($test) {
    $test = preg_replace('/[^A-Za-z0-9\-\\n,.:Ïàâäèéêëìîíïôœùûüÿç]/', ' ', $test); // Removes special chars.
    return response(QrCode::size(200)->generate($test))->header('Content-Type', 'image/svg+xml');
})->name('qr');

Route::get('/avatar/{text}',function ($text) {    
    return response(Avatar::create($text)->toSvg())->header('Content-Type', 'image/svg+xml');
})->name('avatar');

Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/svg/{test}',function ($test) {
    $data="data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMjBweCcgaGVpZ2h0PScyOHB4JyB2ZXJzaW9uPScxLjEnPjx0ZXh0IHg9JzAnIHk9JzE1JyBmaWxsPSdzbGF0ZS01MCcgZm9udC1zaXplPScyNCc+TW9uIERldm9pcjwvdGV4dD48L3N2Zz4=";
    return response($data);
})->name('svg');



Route::get('events', function () {

    $test =  '[
          {
            "title":"Vue Vixens Day",
            "start":"2021-01-05",
            "end":"2021-01-08"
          },
          {
            "title":"VueConfUS",
            "start":"2021-01-11",
            "end":"2021-01-15"
          },
          {
            "title":"VueJS Amsterdam",
            "start":"2021-01-17",
            "end":"2021-01-21"
          },
          {
            "title":"Vue Fes Japan 2019",
            "start":"2021-01-21",
            "end":"2021-01-24"
          },
          {
            "title":"Laracon 2021",
            "start":"2021-01-24",
            "end":"2021-01-27"
          }
    ]' ;
    
    return response($test)->header('Content-Type', 'application/json');

});



Route::get('action1', function () {
        $ListeMatiere = array(
            '9' => array( //6eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 1) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 1) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 1) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '10' => array( //5eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 1) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 1) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 1) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '11' => array( //4eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 3) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '12' => array( //3eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 3) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
        );

        $MesClasses = \App\Models\Classe::where('cycle_academique_id',2)->get();
        foreach ($MesClasses as $classe) {
            foreach ($ListeMatiere[$classe->id] as $matiere => $data) {
                \App\Models\Matiere::updateOrCreate([
                  'nom_matiere' => $matiere,
                  'nom_matiere_court' => $data['court'],
                  //'code' => null,
                  //'coeficient' => $data['coeficient'],
                  //'type' => $data['type'],
                  'classe_id' => $classe->id,
                  'active' => true,
                ],
                [
                  //'nom_matiere' => $matiere,
                  //'nom_matiere_court' => $data['court'],
                  'code' => null,
                  'coeficient' => $data['coeficient'],
                  'type' => $data['type'],
                  //'classe_id' => $classe->id,
                  //'active' => true,
                ]
              );
            }
        }

        return $MesClasses;
});

/*Route::get('action2', function () {
        $ListeMatiere = array(
            '9' => array( //6eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 1) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 1) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 1) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '10' => array( //5eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 1) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 1) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 1) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '11' => array( //4eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 3) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '12' => array( //3eme
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 3) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
        );

        $MesClasses = \App\Models\Classe::where('cycle_academique_id',2)->get();
        foreach ($MesClasses as $classe) {
            foreach ($ListeMatiere[$classe->id] as $matiere => $data) {
                \App\Models\Matiere::create([
                    'nom_matiere' => $matiere,
                    'nom_matiere_court' => $data['court'],
                    'code' => null,
                    'coeficient' => $data['coeficient'],
                    'type' => $data['type'],
                    'classe_id' => $classe->id,
                    //'enseignant_id' => \App\Models\Enseignant::inRandomOrder()->first()->id,
                    'active' => true,
                ]);
            }
        }

        return $MesClasses;
});
*/

Route::get('action3', function () {

    $MesClasses = \App\Models\Classe::where('id',12)->get();
    $periode = \App\Models\Periode::find(1);
    $annee = \App\Models\AnneeAcademique::find(1);

    foreach($MesClasses as $classe){

      echo PHP_EOL, 'Classe : '. $classe->nom_classe;

      $matieres = $classe->matieres()->get();

      foreach($matieres as $matiere){
        echo PHP_EOL, 'matiere : '. $matiere->nom_matiere_court;
        // creer compo
        $composition = \App\Models\Composition::firstOrCreate([
          'nom_composition' => 'Composition '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
          'ponderation' => 50,
          'matiere_id' => $matiere->id,
          'classe_id' => $classe->id, 
          'annee_academique_id' => $annee->id, 
        ]);


        $salles = $classe->salles()->get();

        foreach($salles as $salle){

          echo PHP_EOL, 'Salle : '. $salle->nom_salle;
          $eleves = $salle->eleves()->get();
            
              $devoir = \App\Models\Devoir::firstOrCreate([
                'nom_devoir' => 'Devoir 1 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 50,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ]);

              /*$devoir2 = \App\Models\Devoir::firstOrCreate([
                'nom_devoir' => 'Devoir 2 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 25,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ]);*/


          $notables = [ $devoir , $composition] ;
          foreach($notables as $notable) {
            echo PHP_EOL, 'notable : '. $notable->nom_notable;

            foreach($eleves as $eleve){
              $note = \App\Models\Note::firstOrCreate([
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

    return "Creation des devoirs de College - Fin" ;
});


Route::get('action4', function () {

    $MesClasses = \App\Models\Classe::where('cycle_academique_id',2)->get();
    $periode = \App\Models\Periode::find(1);
    $annee = \App\Models\AnneeAcademique::find(1);

    foreach($MesClasses as $classe){

      echo PHP_EOL, 'Classe : '. $classe->nom_classe;

      $matieres = $classe->matieres()->get();

      foreach($matieres as $matiere){
        echo PHP_EOL, 'matiere : '. $matiere->nom_matiere_court;
        // creer compo
        $composition = \App\Models\Composition::where([
          'nom_composition' => 'Composition '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
          'ponderation' => 50,
          'matiere_id' => $matiere->id,
          'classe_id' => $classe->id, 
          'annee_academique_id' => $annee->id, 
        ])->first();


        $salles = $classe->salles()->get();

        foreach($salles as $salle){

          echo PHP_EOL, 'Salle : '. $salle->nom_salle;
          $eleves = $salle->eleves()->get();
            
              $devoir = \App\Models\Devoir::where([
                'nom_devoir' => 'Devoir 1 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 25,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ])->first();

              $devoir2 = \App\Models\Devoir::where([
                'nom_devoir' => 'Devoir 2 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 25,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ])->first();


          $notables = [ $devoir, $devoir2 , $composition] ;
          foreach($notables as $notable) {
              if($notable){

                echo PHP_EOL, 'notable : '. $notable->nom_notable;
                foreach($eleves as $eleve){
                  $note = \App\Models\Note::where([
                    'notable_id' => $notable->id,
                    'notable_type' => $notable::class,
                    'eleve_id' => $eleve->id,
                    'matiere_id' => $matiere->id,
                    'annee_academique_id' => $annee->id, 
                  ])->update(['note' => rand(8,20) ]);

                }

              }
          }

        }

      }


    }

    return "Creation des devoirs de College - Fin" ;
});


Route::get('actionMatiereLycee', function () {
        $ListeMatiere = array(
            '13' => array( //2nde a4
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 4) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 2) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 3) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 2) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 3) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 2) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),

 	    '14' => array( //2nde D
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 2) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 1) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 3) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),

	   '15' => array( //1ere A
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 4) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 2) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 3) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 2) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 3) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 2) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),
	    '16' => array( //1nde D
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 2) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 1) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 4) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),

		'17' => array( //term A
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 3) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 4) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 3) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 2) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 3) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 1) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 1) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 1) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),

	    '18' => array( //term D
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) ,
                 'Philosophie' => array('court' => 'Philosophie' , 'type' => 1 , 'coeficient' => 2) ,

                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 1) ,

		'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,


                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 3) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 3) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 4) ,

                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Info.' , 'type' => 2 , 'coeficient' => 1) ,
                'Enseignement Ménager' => array('court' => 'EM' , 'type' => 2 , 'coeficient' => 1) ,
            ),


        );

        $MesClasses = \App\Models\Classe::where('cycle_academique_id',3)->get();
        foreach ($MesClasses as $classe) {
            foreach ($ListeMatiere[$classe->id] as $matiere => $data) {
                \App\Models\Matiere::create([
                    'nom_matiere' => $matiere,
                    'nom_matiere_court' => $data['court'],
                    'code' => null,
                    'coeficient' => $data['coeficient'],
                    'type' => $data['type'],
                    'classe_id' => $classe->id,
                    //'enseignant_id' => \App\Models\Enseignant::inRandomOrder()->first()->id,
                    'active' => true,
                ]);
            }
        }

        return $MesClasses;
});



Route::get('actionDevoirLycee', function () {

    $MesClasses = \App\Models\Classe::where('cycle_academique_id',3)->get();
    $periode = \App\Models\Periode::find(1);
    $annee = \App\Models\AnneeAcademique::find(1);

    foreach($MesClasses as $classe){

      echo PHP_EOL, 'Classe : '. $classe->nom_classe;

      $matieres = $classe->matieres()->get();

      foreach($matieres as $matiere){
        echo PHP_EOL, 'matiere : '. $matiere->nom_matiere_court;
        // creer compo
        $composition = \App\Models\Composition::firstOrCreate([
          'nom_composition' => 'Composition '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
          'ponderation' => 50,
          'matiere_id' => $matiere->id,
          'classe_id' => $classe->id, 
          'annee_academique_id' => $annee->id, 
        ]);


        $salles = $classe->salles()->get();

        foreach($salles as $salle){

          echo PHP_EOL, 'Salle : '. $salle->nom_salle;
          $eleves = $salle->eleves()->get();
            
              $devoir = \App\Models\Devoir::firstOrCreate([
                'nom_devoir' => 'Devoir 1 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 25,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ]);

              $devoir2 = \App\Models\Devoir::firstOrCreate([
                'nom_devoir' => 'Devoir 2 '.$matiere->nom_matiere_court.' '.$periode->nom_periode,
                'ponderation' => 25,
                'matiere_id' => $matiere->id,
                'salle_id' => $salle->id,
                'classe_id' => $classe->id, 
                'annee_academique_id' => $annee->id, 
              ]);


          $notables = [ $devoir, $devoir2 , $composition] ;
          foreach($notables as $notable) {
            echo PHP_EOL, 'notable : '. $notable->nom_notable;

            foreach($eleves as $eleve){
              $note = \App\Models\Note::firstOrCreate([
                //'note' => rand(8,20) ,
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

    return "Creation des devoirs de College - Fin" ;
});









