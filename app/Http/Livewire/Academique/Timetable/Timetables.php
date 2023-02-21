<?php

namespace App\Http\Livewire\Academique\Timetable;

use Livewire\Component;
use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Cours;


class Timetables extends Component
{
    public $annee;
    public $events = '';

    public $cycle_id ;
    public $classe_id ;
    public $salle_id ;

    public $hiddenDays = [0 , 6];

    /*public function getevent()
    {       
        $events = Cours::select('id')->where('annee_academique_id', $this->annee->id)->get()->map(function ($query){
            return $query->event ;
        });
        return  json_encode($events);
    }*/


    protected $listeners = [
        'onChangementTimetables' => 'setAcademiqueDivision',
        'ajouterCoursTimetables' => 'ajouterCours',
        'refreshTimetablesView' => 'refreshTimetablesView',
    ];

    public function setAcademiqueDivision($data){
        $this->cycle_id = $data['cycle_id'] ;
        $this->classe_id = $data['classe_id'] ;
        $this->salle_id = $data['salle_id'] ;


        $cours = Cours::with(['classe','cycle'])->where('annee_academique_id',$this->annee->id)->get();
        if($this->salle_id != "null" && $this->salle_id != null ){
           $cours = $cours->where('salle_id', $this->salle_id);
        }elseif($this->classe_id != 'null' && $this->classe_id != null ){
           $cours = $cours->where('classe.id', $this->classe_id);
        }elseif( $this->cycle_id != 'null' && $this->cycle_id != null ){
          $cours = $cours->where('cycle.id', $this->cycle_id );
        }
        $events = $cours->map(function ($query){
            return $query->getEvent() ;
        });
        $this->events = json_encode(array_values($events->toArray()));
        $this->dispatchBrowserEvent('refreshTimetables', $this->events);
        debug($events->toArray());
        debug(array_values($events->toArray()));
        debug($this->events);

        
    }

    public function refreshTimetablesView(){

        $cours = Cours::with(['classe','cycle'])->where('annee_academique_id',$this->annee->id)->get();
        if($this->salle_id != "null" && $this->salle_id != null ){
           $cours = $cours->where('salle_id', $this->salle_id);
        }elseif($this->classe_id != 'null' && $this->classe_id != null ){
           $cours = $cours->where('classe.id', $this->classe_id);
        }elseif( $this->cycle_id != 'null' && $this->cycle_id != null ){
          $cours = $cours->where('cycle.id', $this->cycle_id );
        }
        $events = $cours->map(function ($query){
            return $query->getEvent() ;
        });
        $this->events = json_encode(array_values($events->toArray()));
        $this->dispatchBrowserEvent('refreshTimetables', $this->events);
            
    }


     /**
    * Write code on Method
    *
    * @return response()
    */
    public function eventDrop($event, $oldEvent, $info)
    {
    }
    

    public function mount(){
        $this->annee = \Hp::annee();

        $cours = Cours::with(['classe','cycle'])->where('annee_academique_id',$this->annee->id)->get();
        $events = $cours->map(function ($query){
            return $query->getEvent() ;
        });
        $this->events = json_encode(array_values($events->toArray()));

    }



    public function render()
    {

        return view('livewire.academique.timetable.timetables');
    }
}
