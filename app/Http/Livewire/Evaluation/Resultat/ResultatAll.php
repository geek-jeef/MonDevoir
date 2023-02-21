<?php

namespace App\Http\Livewire\Evaluation\Resultat;

use Livewire\Component;
use App\Models\Examen;
use App\Models\Classe;

class ResultatAll extends Component
{
    public $examen;
    public $classe;

    public function mount(Examen $examen, Classe $classe){
        $this->examen = $examen;
        $this->classe = $classe;
    }
    public function render()
    {
        return view('livewire.evaluation.resultat.resultat-all');
    }
}
