<?php

namespace App\Http\Livewire\Evaluation\Bulletin;

use Livewire\Component;
use App\Models\Examen;
use App\Models\Classe;
use App\Models\Salle;

class BulletinExamen extends Component
{
    public $examen;
    public $classe;

    public function mount(Examen $examen , Classe $classe){
        $this->examen = $examen;
        $this->classe = $classe;
    }

    public function render()
    {
        return view('livewire.evaluation.bulletin.bulletin-examen');
    }
}
