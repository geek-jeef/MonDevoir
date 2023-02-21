<?php

namespace App\Http\Livewire\Payement;

use Livewire\Component;
use App\Models\SystemeEcolage;

class ParametreEcolage extends Component
{
    


    public function render()
    {

        $systemes = SystemeEcolage::actuel()->get();
        return view('livewire.payement.parametre-ecolage',['systemes' => $systemes]);
    }
}
