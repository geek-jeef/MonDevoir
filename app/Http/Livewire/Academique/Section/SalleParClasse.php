<?php

namespace App\Http\Livewire\Academique\Section;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

class SalleParClasse extends Component
{
    public Classe $classe;
    public $salles;

    public function mount(Classe $classe){
        $this->classe = $classe ;
        $this->salles = $this->classe->salles()->get();
    }

    public function render()
    {
        return view('livewire.academique.section.salle-par-classe');
    }
}
