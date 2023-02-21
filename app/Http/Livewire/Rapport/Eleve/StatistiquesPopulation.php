<?php

namespace App\Http\Livewire\Rapport\Eleve;

use Livewire\Component;
use App\Models\Salle;
use App\Models\Classe;
use App\Models\CycleAcademique;

class StatistiquesPopulation extends Component
{
    public $entete = true;
    public $titre = "statistiques sur les élèves" ;
    public $column = 3;
    public $footer = 0;

    public $annee;

    public $data = [] ;

    public $cycle ;
    public $classe ;
    public $salle ;

    protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];

    public function updateListeData($data){

        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $this->salle = Salle::find($data['salle_id']);
        }else{
            $this->salle = null;
        }

        if(isset($data['classe_id']) && ($data['classe_id'] != 'null') && ($data['classe_id'] != null) ){
            $this->classe = Classe::find($data['classe_id']);
        }else{
            $this->classe = null;

        }

        if(isset($data['cycle_id']) && ($data['cycle_id'] != 'null') && ($data['cycle_id'] != null) ){
            $this->cycle = CycleAcademique::find($data['cycle_id']);
        }else{
            $this->cycle = null;
        }
        
    }


    public function mount(){
        $this->annee = \Hp::annee();
    }

    public function render()
    {

        return view('livewire.rapport.eleve.statistiques-population')->layout('layouts.printable');
    }

}
