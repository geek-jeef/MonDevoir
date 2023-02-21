<?php

namespace App\Http\Livewire\Academique\Timetable;

use Livewire\Component;
use App\Models\Salle;
use WireUi\Traits\Actions;

class PlanningSalle extends Component
{
    use Actions;

    public $hiddenDays = [0 , 6];
    public $annee ;
    public $titre ;
    protected $listeners = [
        'onChangementClasseForPlanning' => 'changerClasse',
        'refreshment' => '$refresh',
    ];

    public function changerClasse($info){

        if( ($info['salle_id']?? false) && ($info['salle_id'] != '') && ($info['salle_id'] != 'null') ){
            $salle = Salle::find($info['salle_id']);
            if($salle){
                $this->titre = "Emploi du Temps - {$salle->nom_academique} " ;
                $cours = $salle->cours;
                if($cours){
                  $cours = $cours->where('annee_academique_id', $this->annee->id);
                }
                $data = 
                  $cours->map(function ($query) {
                      $query->event = $query->getEvent() ;
                      return $query->event;
                    })
                ;
                $this->dispatchBrowserEvent('onChangementClasseForPlanningBrowser', $data ) ;
                return ;
            }
        }
        $this->titre = "Emploi du Temps" ;
        $this->dispatchBrowserEvent('onChangementClasseForPlanningBrowser', [] ) ;
        $this->notification()->send([
            'title'       => 'Aucune Salle Selectionnée!',
            'description' => "Selectionnez une Salle pour afficher l'Emploi du Temps",
            'icon'        => 'info'
        ]);
    }

    public function mount(){
        $this->annee = \Hp::annee();
    }

    public function render()
    {
        return view('livewire.academique.timetable.planning-salle');
    }
}
