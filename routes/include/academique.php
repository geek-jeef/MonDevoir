<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Academique\Annee\AnneesScolaires;
use App\Http\Livewire\Academique\Annee\ShowAnneeScolaire;

use App\Http\Livewire\Academique\Cycle\CyclesScolaires;
use App\Http\Livewire\Academique\Cycle\ShowCycleScolaire;

use App\Http\Livewire\Academique\Classe\Classes;
use App\Http\Livewire\Academique\Classe\ShowClasse;

use App\Http\Livewire\Academique\Section\Sections;
use App\Http\Livewire\Academique\Section\ShowSalle;

use App\Http\Livewire\Academique\Matiere\Matieres;
use App\Http\Livewire\Academique\Cours\Cours;

use App\Http\Livewire\Academique\Timetable\Timetables;
use App\Http\Livewire\Academique\Timetable\PlanningEnseignant;
use App\Http\Livewire\Academique\Timetable\PlanningSalle;


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

    Route::get('/academique/annees',AnneesScolaires::class)->name('academique.annees');
    Route::get('/academique/annee/{annee}',ShowAnneeScolaire::class)->name('academique.annee.show');

    Route::get('/academique/cycles',CyclesScolaires::class)->name('academique.cycles');
    Route::get('/academique/cycle/{cycle}',ShowCycleScolaire::class)->name('academique.cycle.show');

    Route::get('/academique/classes',Classes::class)->name('academique.classes');
    Route::get('/academique/classe/{classe}',ShowClasse::class)->name('academique.classe.show');

    Route::get('/academique/sections',Sections::class)->name('academique.sections');
    Route::get('/academique/section/{salle}',ShowSalle::class)->name('academique.salle.show');

    Route::get('/academique/matieres',Matieres::class)->name('academique.matieres');
    Route::get('/academique/cours',Cours::class)->name('academique.cours');

    Route::get('/academique/timetables',Timetables::class)->name('academique.timetables');
    Route::get('/academique/timetable/enseignant/',PlanningEnseignant::class)->name('academique.timetable.enseignant');
    Route::get('/academique/timetable/salle/',PlanningSalle::class)->name('academique.timetable.salle');

});
