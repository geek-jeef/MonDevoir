<?php

namespace App\Http\Livewire\Academique\Timetable;

use Livewire\Component;
use App\Models\Cours ;
use App\Models\Enseignant ;

class PlanningEnseignant extends Component
{
    public $hiddenDays = [0 , 6];


    public $annee ;
    public $titre ;
    protected $listeners = [
        'onChangementEnseignantForPlanning' => 'changerEnseignant',
        'refreshment' => '$refresh',
    ];

    public function changerEnseignant($info){
        if( ($info['enseignant_id']?? false) && ($info['enseignant_id'] != '') && ($info['enseignant_id'] != 'null') ){
            $enseignant = Enseignant::find($info['enseignant_id']);
            if($enseignant){
                $this->titre = "Emploi du Temps - {$enseignant->nom_complet} " ;
                $cours = $enseignant->cours;
                if($cours){
                  $cours = $cours->where('annee_academique_id', $this->annee->id);
                }
                $data = 
                  $cours->map(function ($query) {
                      $query->event = $query->getEvent() ;
                      return $query->event;
                    });
                $this->dispatchBrowserEvent('onChangementEnseignantForPlanningBrowser', $data ) ;
                return ;
            }
        }
        $this->titre = "Emploi du Temps" ;
        $this->dispatchBrowserEvent('onChangementEnseignantForPlanningBrowser', [] ) ;

    }


    public function mount(){
        $this->annee = \Hp::annee();
    }


    public function render()
    {
        return view('livewire.academique.timetable.planning-enseignant');
    }
}
