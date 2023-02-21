<?php

namespace App\Http\Livewire\Eleve\Carte;

use Livewire\Component;
use App\Models\Eleve;
use App\Models\AnneeAcademique;

class ShowCarte extends Component
{

    public Eleve $eleve;
    public AnneeAcademique $annee;

    public function render()
    {
        return view('livewire.eleve.carte.show-carte');
    }
}
