<?php

namespace App\Http\Livewire\Academique\Matiere;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Matiere;


class MatiereParCycle extends Component
{
    public $readyToLoad = false;

    public function setLoadingState(){
        $this->readyToLoad = true;
        debug('ready to show from : MatiereParCycle ');
    }

    public CycleAcademique $cycle;
    public $classes;

    public function mount(CycleAcademique $cycle){
        $this->cycle = $cycle ;
        $this->classes = $this->cycle->classes()->get();
    }
    
    public function render()
    {
        return view('livewire.academique.matiere.matiere-par-cycle');
    }
}
