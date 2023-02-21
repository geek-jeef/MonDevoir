<?php

namespace App\Http\Livewire\Widget\Picker;

use Livewire\Component;

class EnseignantPicker extends Component
{
    public $enseignant_id;

    public $eventToFired;
    public $eventToFiredBrowser;

    public function onValidation()
    {
        if($this->eventToFired){
            $this->emit($this->eventToFired, ['enseignant_id'=> $this->enseignant_id]);
        }
        if($this->eventToFiredBrowser){
            $this->dispatchBrowserEvent($this->eventToFiredBrowser, ['enseignant_id'=> $this->enseignant_id]);
        }
    }

    public function mount($eventToFired = null , $eventToFiredBrowser = null){

        $this->eventToFired = $eventToFired ;
        $this->eventToFiredBrowser = $eventToFiredBrowser ;
    }

    public function render()
    {
        return view('livewire.widget.picker.enseignant-picker');
    }
}
