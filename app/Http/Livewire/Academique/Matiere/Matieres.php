<?php

namespace App\Http\Livewire\Academique\Matiere;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Matiere;

class Matieres extends Component
{
    public $cycles;
    public $currentCycleId;
    public $currentClasseId;

    public $currentClasse;

    public function changeCurrentClasse($classe_id, $cycle_id){
        $this->currentClasse = Classe::find($classe_id);
        $this->currentCycleId = $cycle_id ;
        $this->currentClasseId = $classe_id ;

    }

    public function mount(){
        $this->cycles = \Hp::annee()->cycles()->where('ouvert_cette_annee',true)->get();
    }
    
    
    public function render()
    {
        return view('livewire.academique.matiere.matieres');
    }
}
