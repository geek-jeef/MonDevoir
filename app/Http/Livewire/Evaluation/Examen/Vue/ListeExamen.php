<?php

namespace App\Http\Livewire\Evaluation\Examen\Vue;

use Livewire\Component;
use App\Models\Examen;
use App\Models\Periode;
use App\Models\CycleAcademique;

class ListeExamen extends Component
{
    public $annee ;
    public $cycles;
    public $selected_cycle = false ;

    public function mount(){
        $this->annee = \Hp::annee();
        $this->cycles = $this->annee->cycles()->where('cycle_academiques.ouvert_cette_annee',true)->get();

    }

    public function render()
    {   
        debug($this->annee);
        $data = Examen::where('annee_academique_id',$this->annee->id)->orderByDesc('created_at') ;

        if($this->selected_cycle){
            $liste_periode = Periode::select('id')->where('cycle_academique_id',$this->selected_cycle['id'])->get()->modelKeys();
            $data = $data->whereIn('periode_id',$liste_periode);
        }
        return view('livewire.evaluation.examen.vue.liste-examen',['examens' => $data->get()]);
    }
}
