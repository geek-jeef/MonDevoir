<?php

namespace App\Http\Livewire\Evaluation\Periode\Vue;

use Livewire\Component;
use App\Models\Periode;
use App\Models\CycleAcademique;

class ListePeriode extends Component
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
        $data = Periode::where('annee_academique_id',$this->annee->id)->orderByDesc('created_at') ;

        if($this->selected_cycle){
            $data = $data->where('cycle_academique_id',$this->selected_cycle['id']);
        }
        return view('livewire.evaluation.periode.vue.liste-periode',['periodes' => $data->get()]);
    }
}
