<?php

namespace App\Http\Livewire\Forms\Annee;

use Livewire\Component;
use App\Models\AnneeAcademique;

use WireUi\Traits\Actions;

class CreateAnneeForm extends Component
{
    use Actions;
    public AnneeAcademique $annee ;

    protected function rules()
    {
        return [
            'annee.nom_annee' => 'required|unique:annee_academiques,nom_annee',
            'annee.date_debut' => "required|date",
            'annee.date_fin' => "required|date|after:annee.date_debut",
            'annee.ouvert_pour_inscription' => 'required|boolean',
        ];
    }

    public function mount(){
        $this->annee = new AnneeAcademique;
    }

    public function save(){
        $this->validate();
        if($this->annee->save()){
            $this->notification()->send([
                'title'       => 'Année Scolaire Enregistré!',
                'description' => "L'Année Scolaire {$this->annee->nom_annee} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->annee = new AnneeAcademique;
            $this->emit('CloseModal','#formulaire-creation-annee');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "L'Année Scolaire n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.annee.create-annee-form');
    }
}
