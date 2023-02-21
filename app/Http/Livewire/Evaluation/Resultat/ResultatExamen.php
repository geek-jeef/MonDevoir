<?php

namespace App\Http\Livewire\Evaluation\Resultat;

use Livewire\Component;
use App\models\Examen;

class ResultatExamen extends Component
{
    public $examen;
    
    public function mount(Examen $examen)
    {
        $this->examen = $examen;
    }

    public function render()
    {
        return view('livewire.evaluation.resultat.resultat-examen');
    }
}
