<?php

namespace App\Http\Livewire\Evaluation\Devoir;

use Livewire\Component;
use App\Models\Devoir;

class ShowDevoir extends Component
{

    public $devoir;

    public function mount(Devoir $devoir){
        $this->devoir = $devoir;
    }

    public function render()
    {
        return view('livewire.evaluation.devoir.show-devoir');
    }
}
