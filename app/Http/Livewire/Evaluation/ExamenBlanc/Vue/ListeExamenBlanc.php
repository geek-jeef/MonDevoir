<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Vue;

use Livewire\Component;

use App\Models\ExamenBlanc\Examen;

class ListeExamenBlanc extends Component
{
    public $annee ;

    public function mount(){
        $this->annee = \Hp::annee();
    }

    protected $listeners = [
        'ExamenBlancListeRefresh' => '$refresh',
    ];

    public function render()
    {   
        debug($this->annee);
        $data = Examen::where('annee_academique_id',$this->annee->id)->orderByDesc('created_at') ;
        return view('livewire.evaluation.examen-blanc.vue.liste-examen-blanc',['examens' => $data->get()]);
    }
}
