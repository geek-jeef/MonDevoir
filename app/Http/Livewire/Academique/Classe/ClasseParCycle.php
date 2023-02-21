<?php

namespace App\Http\Livewire\Academique\Classe;

use Livewire\Component;
use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

class ClasseParCycle extends Component
{
    public CycleAcademique $cycle;
    public $classes;

    public function mount(CycleAcademique $cycle){
        $this->cycle = $cycle ;
        $this->classes = $this->cycle->classes()->get();
    }

    public function render()
    {
        return view('livewire.academique.classe.classe-par-cycle');
    }
}
