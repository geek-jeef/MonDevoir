<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Rapport\Eleve\ListeEleve;
use App\Http\Livewire\Rapport\Eleve\ListePresence;
use App\Http\Livewire\Rapport\Eleve\CarteScolaire;
use App\Http\Livewire\Rapport\Eleve\StatistiquesPopulation;

use App\Http\Livewire\Rapport\Personnel\ListePersonnel;
use App\Http\Livewire\Rapport\Personnel\ListeTitulaire;

use App\Http\Livewire\Rapport\Payement\ProgressionPayement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/rapport/eleve/liste-eleve',ListeEleve::class)->name('rapport.eleve.liste.blank');
    Route::get('/rapport/eleve/liste-presence',ListePresence::class)->name('rapport.eleve.liste.presence');

    Route::get('/rapport/personnel/liste',ListePersonnel::class)->name('rapport.personnel.liste');
    Route::get('/rapport/personnel/liste-titulaire',ListeTitulaire::class)->name('rapport.personnel.liste.titulaire');

    Route::get('/rapport/eleve/carte-scolaire',ListeEleve::class)->name('rapport.eleve.carte-scolaire');
    Route::get('/rapport/eleve/stat-population',StatistiquesPopulation::class)->name('rapport.eleve.stat-population');

    Route::get('/rapport/payement/progression',ProgressionPayement::class)->name('rapport.payement.progression');

    
    
});
