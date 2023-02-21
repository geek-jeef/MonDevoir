<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Finance\FinanceOverview;
use App\Http\Livewire\Finance\Depense\Depenses;
use App\Http\Livewire\Finance\Revenu\Revenus;
use App\Http\Livewire\Finance\Salaire\Salaires;

use App\Http\Livewire\Finance\FicheSalaire\ShowFicheSalaire;


use App\Http\Livewire\Rapport\Finance\RapportEcolage;
use App\Http\Livewire\Rapport\Finance\RapportFinance;


use App\Http\Livewire\Payement\ParametreEcolage;

use App\Http\Livewire\Payement\Ecolage;
use App\Http\Livewire\Payement\FraisProgramme;
use App\Http\Livewire\Payement\Recu\ShowRecu;
use App\Http\Livewire\Payement\Historique\ListePayement;


use App\Http\Livewire\Payement\Systeme\AttributionSysteme;
use App\Http\Livewire\Payement\Systeme\ShowSysteme;

use App\Http\Livewire\Import\Payement\PayementParSalle;

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

    Route::get('/finance/overview',FinanceOverview::class)->name('finance.overview');
    Route::get('/finance/depenses',Depenses::class)->name('finance.depenses');
    Route::get('/finance/revenus',Revenus::class)->name('finance.revenus');
    Route::get('/finance/salaires',Salaires::class)->name('finance.salaires');
    Route::get('/finance/fiche-salaire/{fiche}',ShowFicheSalaire::class)->name('finance.fiche_salaire.show');
    Route::get('/finance/revenus',Revenus::class)->name('finance.revenus');

    Route::get('/rapport/finance/ecolage',RapportEcolage::class)->name('rapport.finance.ecolage');
    Route::get('/rapport/finance/finance',RapportFinance::class)->name('rapport.finance.finance');

    Route::get('/payement/parametre/ecolage',ParametreEcolage::class)->name('payement.parametre.ecolage');
    Route::get('/payement/ecolage',Ecolage::class)->name('payement.ecolage');
    Route::get('/payement/frais-programme',FraisProgramme::class)->name('payement.programme');
    Route::get('/payement/historique',ListePayement::class)->name('payement.historique');

    Route::get('/payement/recu/{recu}',ShowRecu::class)->name('payement.recu.show');
    Route::get('/payement/systeme/show/{systeme}',ShowSysteme::class)->name('payement.systeme.show');
    Route::get('/payement/systeme/attribution',AttributionSysteme::class)->name('payement.systeme.attribution');


    Route::get('/import/payement/salle',PayementParSalle::class)->name('import.payement.salle');


});
