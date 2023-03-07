<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Evaluation\ExamenBlanc\ExamensBlanc;
use App\Http\Livewire\Evaluation\ExamenBlanc\ShowExamenBlanc;

use App\Http\Livewire\Evaluation\ExamenBlanc\Eleve\ImportEleve;


use App\Http\Livewire\Evaluation\ExamenBlanc\Matiere\EnregistrementNote;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/examen-blanc',ExamensBlanc::class)->name('examen_blanc');
    Route::get('/examen-blanc/{examen}',ShowExamenBlanc::class)->name('examen_blanc.show');
    Route::get('/registre/import/{examen}',ImportEleve::class)->name('examen_blanc.import.eleve');
    
    Route::get('/notes/matiere/{matiere}',EnregistrementNote::class)->name('examen_blanc.notes.matiere.edit');




    /*Route::get('/examens',Examens::class)->name('examens');
    Route::get('/examen/{examen}',ShowExamen::class)->name('examen.show');

    Route::get('/devoirs',Devoirs::class)->name('devoirs');
    Route::get('/devoir/{devoir}',ShowDevoir::class)->name('devoir.show');

    Route::get('/compositions',Compositions::class)->name('compositions');
    Route::get('/composition/{composition}',ShowComposition::class)->name('composition.show');

    Route::get('/resultats',Resultats::class)->name('resultats');
    Route::get('/resultat/examen/{examen}',ResultatExamen::class)->name('resultat.examen');



    Route::get('/resultat/examen/{examen}/classe/{classe}/matiere/{matiere}',ResultatMatiere::class)->name('resultat.examen.matiere');
    Route::get('/resultat/examen/{examen}/classe/{classe}',ResultatAll::class)->name('resultat.examen.all');
    Route::get('/bulletin/examen/{examen}/classe/{classe}',BulletinExamen::class)->name('bulletin.examen');

    Route::get('/resultat/print/bulletins',BulletinPrintPage::class)->name('evaluation.bulletin.print');*/



});
