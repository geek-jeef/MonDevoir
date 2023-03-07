<?php

namespace App\Http\Livewire\Evaluation\Note;

use Livewire\Component;
//use App\Models\Note;
class WidgetNote extends Component
{
    public $note;

    public function mount($note){
        $this->note = $note ;
    }


    protected $rules = [
        'note.note' => 'required|numeric|between:0,20',
    ];

    function save(){
        $this->validate();
        $this->note->save();
    }

    public function render()
    {
        return view('livewire.evaluation.note.widget-note');
    }
}
