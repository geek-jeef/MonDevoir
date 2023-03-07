<?php

namespace App\Http\Livewire\Evaluation\Notable;

use Livewire\Component;

use App\Models\Devoir;
use App\Models\Note;
use App\Models\Eleve;

use App\Models\Matiere;
use App\Models\Classe;
use App\Models\Salle;

class ModifierNotes extends Component
{
    public $notable;
    public $titre;
    public $eleves;

    public function mount($notable)
    {
        $this->notable = $notable ;
        $this->titre = " {$notable->nom_notable} - {$notable->academique->nom_academique}" ;
        $this->eleves = $notable->eleves() ;
    }

    public function render()
    {
        return view('livewire.evaluation.notable.modifier-notes');
    }
}
