<?php

namespace App\Http\Livewire\Academique\Section;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

class SalleParCycle extends Component
{
    public $readyToLoad = false;

    public function setLoadingState(){
        $this->readyToLoad = true;
        debug('ready to show from : SalleParCycle ');
    }

    public CycleAcademique $cycle;
    public $classes;

    public function mount(CycleAcademique $cycle){
        $this->cycle = $cycle ;
        $this->classes = $this->cycle->classes()->get();
    }

    public function render()
    {
        return view('livewire.academique.section.salle-par-cycle');
    }
}
