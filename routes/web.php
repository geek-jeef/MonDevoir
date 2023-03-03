<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dashboard;

use App\Http\Livewire\Eleve\Eleves;
use App\Http\Livewire\Eleve\CreateEleve;
use App\Http\Livewire\Eleve\ShowEleve;
use App\Http\Livewire\Eleve\UpdateClasse;
use App\Http\Livewire\Eleve\Carte\Cartes;
use App\Http\Livewire\Eleve\Carte\ShowCarte;
use App\Http\Livewire\Eleve\Carte\CartePrintPage;


use App\Http\Livewire\Personnel\Personnels;
use App\Http\Livewire\Personnel\CreatePersonnel;
use App\Http\Livewire\Personnel\ShowPersonnel;


use App\Http\Livewire\Programme\CreateProgramme;
use App\Http\Livewire\Programme\ShowProgramme;
use App\Http\Livewire\Programme\Programmes;


use App\Http\Livewire\Administration\Administration;

use App\Http\Livewire\Database\Sauvegarde;
use App\Http\Livewire\Database\Recuperation;



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

    Route::get('/',Dashboard::class)->name('dashboard');

    Route::get('/eleves',Eleves::class)->name('eleves');
    Route::get('/eleves/new',CreateEleve::class)->name('eleve.create');
    Route::get('/eleves/changer_classe',UpdateClasse::class)->name('eleve.update.classe');
    
    Route::get('/eleves/cartes',Cartes::class)->name('eleve.cartes');
    Route::get('/eleve/carte/{eleve}',ShowCarte::class)->name('eleve.carte.show');
    Route::get('/eleve/{eleve}',ShowEleve::class)->name('eleve.show')->withTrashed();
    Route::get('/eleve/show/{eleve}',ShowEleve::class)->name('eleve.show.alt ')->withTrashed();

    Route::get('/eleves/print/carte',CartePrintPage::class)->name('eleve.cartes.print');


    Route::get('/personnels',Personnels::class)->name('personnels');
    Route::get('/personnels/nouveau',CreatePersonnel::class)->name('personnel.create');
    Route::get('/personnel/{personnel}',ShowPersonnel::class)->name('personnel.show');

    Route::get('/programme/programmes',Programmes::class)->name('programmes');
    Route::get('/programme/show',ShowProgramme::class)->name('programme.show');
    Route::get('/programme/nouveau',CreateProgramme::class)->name('programme.create');

    Route::get('/administration',Administration::class)->name('administration');

    Route::get('/database/sauvegarde',Sauvegarde::class)->name('database.sauvegarde');
    Route::get('/database/recuperation',Recuperation::class)->name('database.recuperation');

});

require __DIR__.'/include/academique.php';
require __DIR__.'/include/evaluation.php';
require __DIR__.'/include/finance.php';
require __DIR__.'/include/helpers.php';
require __DIR__.'/include/rapport.php';
require __DIR__.'/include/examen-blanc.php';
