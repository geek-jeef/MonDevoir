<?php

namespace App\Http\Livewire\Forms\Revenu;

use Livewire\Component;
use WireUi\Traits\Actions;


use App\Models\Revenu;

class CreateRevenuForm extends Component
{
    use Actions;

    public Revenu $revenu ;
    public $annee;

    public $montant_confirmation;
    protected function rules()
    {
        return [
            'revenu.type' => 'required|string',
            'revenu.description' => 'required|string',
            'revenu.montant' => 'required|integer',
            'montant_confirmation' => 'required|integer|same:revenu.montant',
            'revenu.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function mount(){
        $this->revenu = new Revenu;
        $this->annee = \Hp::annee();
        $this->revenu->annee_academique_id = $this->annee->id; 

    }

    public function save(){
        $this->validate();
        if($this->revenu->save()){
            $this->notification()->send([
                'title'       => 'Revenu Enregistré!',
                'description' => "La Revenu {$this->revenu->type} de {$this->revenu->montant}FCFA a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->revenu = new Revenu;
            $this->montant_confirmation = null;
            $this->revenu->annee_academique_id = $this->annee->id; 

            $this->emit('CloseModal','#formulaire-creation-revenu');
            $this->emit('revenuRefreshment');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Revenu n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.revenu.create-revenu-form');
    }
}
