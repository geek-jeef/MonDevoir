<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Vue;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Etablissement ;
use App\Models\ExamenBlanc\Matiere ;

class OngletProgression extends Component
{
    public $examen;

    public function mount(Examen $examen){

    }
    
    public function render()
    {
        return view('livewire.evaluation.examen-blanc.vue.onglet-progression');
    }
}
