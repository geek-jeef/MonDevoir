<?php

namespace App\Http\Livewire\Evaluation\Composition;

use Livewire\Component;
use App\Models\Composition;

class ShowComposition extends Component
{
    public $composition;

    public function mount(Composition $composition){
        $this->composition = $composition;
    }

    public function render()
    {
        return view('livewire.evaluation.composition.show-composition');
    }
}
