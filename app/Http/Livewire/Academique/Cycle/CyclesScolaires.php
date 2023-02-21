<?php

namespace App\Http\Livewire\Academique\Cycle;

use Livewire\Component;

class CyclesScolaires extends Component
{
    public $cycles;
    public $annee;


    public function mount(){
        $this->annee = \Hp::annee();
        $this->cycles = $this->annee->cycles;
    }

    public function render()
    {
        return view('livewire.academique.cycle.cycles-scolaires');
    }
}
