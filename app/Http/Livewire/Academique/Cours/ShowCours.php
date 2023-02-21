<?php

namespace App\Http\Livewire\Academique\Cours;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Salle;
use App\Models\Cours;
use App\Rules\TempsCoursDisponibleRule ;
use WireUi\Traits\Actions;
use Carbon\Carbon;


class ShowCours extends Component
{
    use Actions;
    public $cours;
    public $trackId;

    protected $listeners = [
        'show-cours-modal' => 'setCurrentCours',
    ];

    public function setCurrentCours($data)
    {
        debug('$data setCurrentCours');
        debug($data);
        $this->cours = Cours::find($data['id']);
        $this->trackId = uniqid('cours-to-show-');

        $this->emit('ShowModal','#modal-afficher-cours');
    }

    public function supprimerCours(){
        $this->cours->delete();
        $this->cours = null;
        $this->emit('CloseModal','#modal-afficher-cours');
        $this->emit('refreshTimetablesView');
    }



    public function updateCours(){
        debug('updateCours');
        //$this->cours = null;

        $this->emitTo('forms.cours.add-cours-form', 'ancienCours', [ 'id' => $this->cours->id]);

        $this->emit('CloseModal','#modal-afficher-cours');
        //$this->emit('refreshTimetablesView');
    }






    public function mount(){
        $this->trackId = uniqid('cours-to-show-');
    }


    public function render()
    {
        return view('livewire.academique.cours.show-cours');
    }
}
