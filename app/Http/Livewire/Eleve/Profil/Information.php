<?php

namespace App\Http\Livewire\Eleve\Profil;

use Livewire\Component;
use App\Models\Eleve;

class Information extends Component
{
    public Eleve $eleve;

    public function mount(Eleve $eleve){
        $this->eleve = $eleve;
    }

    public function render()
    {
        return view('livewire.eleve.profil.information');
    }
}
