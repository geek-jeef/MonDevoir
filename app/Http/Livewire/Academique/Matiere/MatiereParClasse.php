<?php

namespace App\Http\Livewire\Academique\Matiere;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Matiere;


class MatiereParClasse extends Component
{
    public Classe $classe;
    public $matieres;

    public $readyToLoad = false;

    public function setLoadingState(){
        $this->readyToLoad = true;
        debug('ready to show from : MatiereParClasse ');
    }

    public function mount(Classe $classe){
        $this->classe = $classe ;
        $this->matieres = $this->classe->matieres()->get();
    }
    
    public function render()
    {
        return view('livewire.academique.matiere.matiere-par-classe');
    }
}
