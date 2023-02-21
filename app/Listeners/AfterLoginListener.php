<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\AnneeAcademique;

class AfterLoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $annee = AnneeAcademique::latest()->first(); // returns the latest inserted record
        session(['annee_en_cours' => $annee , 'nom_annee_en_cours' => $annee->nom_annee]);
    }
}
