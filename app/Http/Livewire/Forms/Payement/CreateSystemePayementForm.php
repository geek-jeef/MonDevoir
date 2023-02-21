<?php

namespace App\Http\Livewire\Forms\Payement;

use Livewire\Component;
use App\Models\SystemeEcolage;

use Illuminate\Validation\Rule;

use WireUi\Traits\Actions;

class CreateSystemePayementForm extends Component
{
    use Actions;
    public SystemeEcolage $systeme ;

    protected function rules()
    {
        return [
            'systeme.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
            'systeme.titre' => [ 'required',  'string' , 'multiple_unique:'.SystemeEcolage::class.',titre,annee_academique_id' ],
            'systeme.montant' => "required|integer",
            'systeme.inscription' => "required|integer",
            'systeme.description' => "nullable|string",
        ];
    }

    public function mount(){
        $this->systeme = new SystemeEcolage;
        $this->systeme->annee_academique_id = \Hp::annee()->id ;
    }

    public function save(){
        $this->validate();

        if($this->systeme->save()){
            $this->notification()->send([
                'title'       => "Le Systeme D'Ecolage à été Enregistré!",
                'description' => "Le Systeme  {$this->systeme->titre} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->systeme = new SystemeEcolage;
            $this->systeme->annee_academique_id = \Hp::annee()->id ;
            $this->emit('CloseModal','#formulaire-creation-systeme-ecolage');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Systeme d'Ecolage n'a pas été enregistré"
            );
        }
    }


    public function render()
    {
        return view('livewire.forms.payement.create-systeme-payement-form');
    }
}
