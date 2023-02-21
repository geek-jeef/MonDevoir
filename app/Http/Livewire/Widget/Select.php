<?php

namespace App\Http\Livewire\Widget;

use Livewire\Component;

class Select extends Component
{
    public $value;

    public $title;

    public $options;

    public $option_value;
    public $option_label;

    public $emitUpEvent;

    public function mount($title, $options, $value, $option_value, $option_label,  $emitUpEvent = null)
    {
        $this->title = $title;

        $this->options = $options;

        $this->option_value = $option_value;
        $this->option_label = $option_label;


        $this->value = $value;
        $this->emitUpEvent = $emitUpEvent;
    }

    public function updatedValue()
    {
        if ($this->emitUpEvent == null) {
            return;
        }

        $this->emitUp($this->emitUpEvent, [
            'value' => $this->value
        ]);
    }


    public function render()
    {
        return view('livewire.widget.select');
    }
}
