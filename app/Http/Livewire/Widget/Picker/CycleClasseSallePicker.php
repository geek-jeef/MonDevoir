<?php

namespace App\Http\Livewire\Widget\Picker;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;


class CycleClasseSallePicker extends Component
{
    public $annee_id;
    //alll refer to id
    public $cycle;
    public $classe;
    public $salle;


    public $message;
    public $eventToFired;
    public $eventToFiredBrowser;

    protected $listeners = [
        'cycleSelected' => 'setCycle',
        'classeSelected' => 'setClasse',
        'salleSelected' => 'setSalle',
    ];

    public function setCycle($data)
    {
        $this->cycle = $data['value'];
        $this->classe = null;
        $this->salle = null;
    }

    public function setClasse($data)
    {
        $this->classe = $data['value'];
        $this->salle = null;
    }

    public function setSalle($data)
    {
        $this->salle = $data['value'];
    }

    public function cycles()
    {
        $tempcycles = CycleAcademique::where('annee_academique_id',$this->annee_id)->where('ouvert_cette_annee',true)->get()->toArray();
        return $tempcycles;
    }

    public function classes()
    {
        if ($this->cycle == null) {
            return [];
        }
        $classesByCycle = Classe::where('cycle_academique_id',$this->cycle)->get()->toArray();
        return $classesByCycle ;
    }

    public function salles()
    {
        if ($this->classe == null) {
            return [];
        }
        $sallesByClasse = Salle::where('classe_id',$this->classe)->get()->toArray();
        return $sallesByClasse ;
    }

    public function onMakeItRainClick()
    {
        if($this->eventToFired){
            $this->emit($this->eventToFired, ['cycle_id'=> $this->cycle , 'classe_id' => $this->classe , 'salle_id' => $this->salle ]);
        }
        if($this->eventToFiredBrowser){
            $this->dispatchBrowserEvent($this->eventToFiredBrowser, ['cycle_id'=> $this->cycle , 'classe_id' => $this->classe , 'salle_id' => $this->salle ]);
        }
    }


    public function mount($eventToFired = null , $eventToFiredBrowser = null , $annee_id = null , $salle = null , $classe = null, $cycle = null ){

        $this->eventToFired = $eventToFired ;
        $this->eventToFiredBrowser = $eventToFiredBrowser ;

        $this->annee_id = ($annee_id) ? $annee_id : \Hp::annee()->id ;

        if($salle){
            $model = Salle::find($salle);
            $this->salle = $model->id;
            $this->classe = $model->classe->id;
            $this->cycle = $model->classe->cycle->id;
        }elseif($classe){
            $model = Classe::find($classe);
            $this->classe = $model->id;
            $this->cycle = $model->cycle->id;
        }elseif($cycle){
            $this->cycle = $cycle;

        }
    }

    public function render()
    {
        return view('livewire.widget.picker.cycle-classe-salle-picker')
            ->with([
                'cycles' => $this->cycles(),
                'classes' => $this->classes(),
                'salles' => $this->salles(),
                'ready' => $this->cycle != null && $this->classe != null && $this->salle != null,
            ]);
    }
}
