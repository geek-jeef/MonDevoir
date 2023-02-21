<?php

namespace App\Http\Livewire\Evaluation\Resultat;

use Livewire\Component;
use App\Models\Examen;
use App\Models\Classe;
use App\Models\Matiere;

class ResultatMatiere extends Component
{

    public $examen;
    public $classe;
    public $matiere;            

    public function mount(Examen $examen, Classe $classe, Matiere $matiere){
        $this->examen = $examen;
        $this->classe = $classe;
        $this->matiere = $matiere;
    }

    public function render()
    {
        return view('livewire.evaluation.resultat.resultat-matiere');
    }
}
