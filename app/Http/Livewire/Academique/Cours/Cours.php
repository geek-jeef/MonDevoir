<?php

namespace App\Http\Livewire\Academique\Cours;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Cours as ModelsCours;

class Cours extends Component
{
    public $annee;
    public $cycle;
    public $classe;
    public $salle;

    public $titre = 'Liste des Cours';

    /*public function updatedCycle(){
        $this->dispatchBrowserEvent('page-cycle-change', ['cycle' => $this->cycle]);
    }*/

    protected $listeners = [
        'changeCoursTableSetting' => 'changeCoursTableSetting',
        'refreshment' => '$refresh'
    ];

    public function changeCoursTableSetting($data)
    {
        $this->cycle = $data['cycle_id'] ;
        $this->classe = $data['classe_id'] ;
        $this->salle = $data['salle_id'] ;

        $this->dispatchBrowserEvent('CoursTabulator-Data-Change', route('data.cours',array('cycle' => $this->cycle , 'classe' => $this->classe , 'salle' => $this->salle )));

    }

    public function mount(){
        $this->annee = \Hp::annee();
    }



    public function render()
    {
        return view('livewire.academique.cours.cours');
    }
}
