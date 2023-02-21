<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AnneeAcademiqueController;
use App\Http\Controllers\API\CycleAcademiqueController;

use App\Http\Controllers\API\Tuteurs;
use App\Http\Controllers\API\Profession;
use App\Http\Controllers\API\Pays;

use App\Http\Controllers\API\Enseignants;
use App\Http\Controllers\API\Personnels;
use App\Http\Controllers\API\Timetables;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('annees', AnneeAcademiqueController::class);
Route::apiResource('cycles', CycleAcademiqueController::class);


Route::controller(CycleAcademiqueController::class)->group(function () {
    Route::get('/cycles/annee/{annee}','ofAnneeAcademique')->where('annee', '[0-9]+')->name('api.cycles.ofAnneeAcademique');
    Route::get('/cycles/annee/current','ofCurrentAnneeAcademique')->where('annee', '[0-9]+')->name('api.cycles.ofCurrentAnneeAcademique');

    Route::get('/cycles/{cycle}/annee','anneeAcademiqueOf')->where('cycle', '[0-9]+')->name('api.cycles.anneeAcademiqueOf');

    Route::get('/cycles/{cycle}/classes','classesOf')->where('cycle', '[0-9]+')->name('api.cycles.classesOf');
    //Route::get('/cycles/{cycle}/salles','sallesOf')->where('cycle', '[0-9]+')->name('api.cycles.sallesOf');

    Route::get('/cycles/{cycle}/classes','classesOf')->where('cycle', '[0-9]+')->name('api.cycles.classesOf');

    Route::get('/tuteurs', Tuteurs\Index::class)->name('api.tuteurs.index');
    Route::get('/professions', Profession\Index::class)->name('api.professions.index');
    Route::get('/pays', Pays\Index::class)->name('api.pays.index');
    Route::get('/enseignants', Enseignants\Index::class)->name('api.enseignants.index');
    Route::get('/personnels', Personnels\Index::class)->name('api.personnels.index');


    Route::get('/timetables/enseignants/{enseignant}',[Timetables\Index::class, 'PlanningEnseignant'])->name('api.timetables.enseignants');

    Route::get('/timetables/classe',[Timetables\Index::class, 'PlanningClasse'])->name('api.timetables.classe');

});
