<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Evaluation\Periode\Periodes;
use App\Http\Livewire\Evaluation\Periode\ShowPeriode;

use App\Http\Livewire\Evaluation\Examen\Examens;
use App\Http\Livewire\Evaluation\Examen\ShowExamen;




use App\Http\Livewire\Evaluation\Devoir\Devoirs;
use App\Http\Livewire\Evaluation\Devoir\ShowDevoir;
use App\Http\Livewire\Evaluation\Composition\Compositions;
use App\Http\Livewire\Evaluation\Composition\ShowComposition;

use App\Http\Livewire\Evaluation\Resultat\Resultats;
use App\Http\Livewire\Evaluation\Resultat\ShowResultat;

use App\Http\Livewire\Evaluation\Resultat\ResultatExamen;

use App\Http\Livewire\Evaluation\Resultat\ResultatMatiere;
use App\Http\Livewire\Evaluation\Resultat\ResultatAll;


//use App\Http\Livewire\Evaluation\Examen\Examens;
//use App\Http\Livewire\Evaluation\Examen\Examens;


use App\Http\Livewire\Evaluation\Bulletin\BulletinExamen;
use App\Http\Livewire\Evaluation\Bulletin\BulletinPrintPage;
use App\Http\Livewire\Evaluation\Bulletin\ShowBulletin;

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

    Route::get('/periodes',Periodes::class)->name('periodes');
    Route::get('/periode/{periode}',ShowPeriode::class)->name('periode.show');

    Route::get('/examens',Examens::class)->name('examens');
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

    Route::get('/resultat/print/bulletins',BulletinPrintPage::class)->name('evaluation.bulletin.print');



});

Route::get('/bulletin/{bulletin}',ShowBulletin::class)->name('bulletin.show');
