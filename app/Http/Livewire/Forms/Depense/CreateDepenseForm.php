<?php

namespace App\Http\Livewire\Forms\Depense;

use Livewire\Component;
use WireUi\Traits\Actions;


use App\Models\Depense;

class CreateDepenseForm extends Component
{
    use Actions;

    public Depense $depense ;
    public $annee;

    public $montant_confirmation;
    protected function rules()
    {
        return [
            'depense.type' => 'required|string',
            'depense.description' => 'required|string',
            'depense.montant' => 'required|integer',
            'depense.facture' => 'required|boolean',
            'montant_confirmation' => 'required|integer|same:depense.montant',
            'depense.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function mount(){
        $this->depense = new Depense;
        $this->annee = \Hp::annee();
        $this->depense->annee_academique_id = $this->annee->id; 

    }

    public function save(){
        $this->validate();
        if($this->depense->save()){
            $this->notification()->send([
                'title'       => 'Dépense Enregistré!',
                'description' => "La Dépense {$this->depense->type} de {$this->depense->montant}FCFA a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->depense = new Depense;
            $this->montant_confirmation = null;
            $this->depense->annee_academique_id = $this->annee->id; 

            $this->emit('CloseModal','#formulaire-creation-depense');
            $this->emit('depenseRefreshment');


        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Dépense n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.depense.create-depense-form');
    }
}
