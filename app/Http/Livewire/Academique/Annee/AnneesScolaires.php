<?php

namespace App\Http\Livewire\Academique\Annee;

use Livewire\Component;
use App\Models\AnneeAcademique ;

class AnneesScolaires extends Component
{
    public $annees;

    public function mount(){
        $this->annees = AnneeAcademique::orderByDesc('created_at')->get() ;
    }


    public function render()
    {
        return view('livewire.academique.annee.annees-scolaires');
    }
}
