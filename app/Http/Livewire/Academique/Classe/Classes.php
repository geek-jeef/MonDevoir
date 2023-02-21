<?php

namespace App\Http\Livewire\Academique\Classe;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

class Classes extends Component
{
    public $cycles;
    public $currentCycle ;
    
    public function mount(){
        $this->cycles = \Hp::annee()->cycles()->where('ouvert_cette_annee',true)->get();
        if($this->cycles){
            $this->currentCycle = $this->cycles->first();
        }
    }

    public function changeCurrentCycle($cycle_id){
        $this->currentCycle = $this->cycles->firstWhere('id', $cycle_id);
        debug($this->currentCycle);
    }

    public function render()
    {
        return view('livewire.academique.classe.classes');
    }
}
