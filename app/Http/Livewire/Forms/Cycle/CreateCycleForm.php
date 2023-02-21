<?php

namespace App\Http\Livewire\Forms\Cycle;

use Livewire\Component;
use App\Models\CycleAcademique;

use WireUi\Traits\Actions;

class CreateCycleForm extends Component
{
    use Actions;

    public CycleAcademique $cycle ;
    public $annee;

    protected function rules()
    {
        return [
            'cycle.nom_cycle' => 'required',
            'cycle.ouvert_cette_annee' => 'required|boolean',
            'cycle.directeur_id' => 'required|exists:personnels,id',
            //'cycle.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function mount(){
        $this->cycle = new CycleAcademique;
        $this->annee = \Hp::annee();
    }

    public function save(){
        $this->validate();
        $this->cycle->annee_academique_id = $this->annee->id; 
        if($this->cycle->save()){
            $this->notification()->send([
                'title'       => 'Cycle Scolaire Enregistré!',
                'description' => "Le Cycle Scolaire {$this->cycle->nom_cycle} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->cycle = new CycleAcademique;
            $this->emit('CloseModal','#formulaire-creation-cycle');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Cycle Scolaire n'a pas été enregistré"
            );
        }
    }
    public function render()
    {
        return view('livewire.forms.cycle.create-cycle-form');
    }
}
