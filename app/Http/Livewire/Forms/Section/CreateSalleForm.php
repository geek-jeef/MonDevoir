<?php

namespace App\Http\Livewire\Forms\Section;

use Livewire\Component;


use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use WireUi\Traits\Actions;


class CreateSalleForm extends Component
{
    use Actions;

    public $classe_id ;
    public Salle $salle ;

    protected $listeners = ['create-salle-for-classe' => 'setClasseParDefault'];

    public function setClasseParDefault($classe_id)
    {
        $this->salle = new Salle;
        $this->salle->classe_id = $classe_id;
        debug('From setClasseParDefault');
        debug($classe_id);
        $this->emit('ShowModal','#formulaire-creation-salle');
    }

    protected $rules = [
        'salle.nom_salle' => 'required|string',
        'salle.info_salle' => 'required|string',
        'salle.capacite' => 'nullable|integer',
        'salle.classe_id' => 'required|integer|exists:classes,id',
        'salle.enseignant_id' => 'nullable|integer|exists:personnels,id',
    ];

    public function mount($classe_id = null){
        $this->salle = new Salle;
        $this->salle->classe_id = $classe_id;
        $this->classe_id = $classe_id ;
    }


    public function save(){

        $this->validate();
        debug($this->salle);
        if($this->salle->save()){
            $this->notification()->send([
                'title'       => 'Salle Enregistré!',
                'description' => "La salle {$this->salle->nom_salle} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#formulaire-creation-salle');
            $this->salle = new salle;
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "La Salle n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
    }


    public function render()
    {
        return view('livewire.forms.section.create-salle-form');
    }
}
