<?php

namespace App\Http\Livewire\Forms\Salaire;

use Livewire\Component;
use WireUi\Traits\Actions;


use App\Models\Salaire;

class CreateSalaireForm extends Component
{
    use Actions;

    public Salaire $salaire ;
    public $annee;

    public $montant_confirmation;
    public $periode_debut;
    public $periode_fin;
    protected function rules()
    {
        return [
            'salaire.description' => 'required|string',
            'salaire.beneficiaire_id' => 'required|integer|exists:personnels,id',
            'salaire.montant' => 'required|integer',
            'montant_confirmation' => 'required|integer|same:salaire.montant',
            'periode_debut' => 'required|date',
            'periode_fin' => 'required|date|after:periode_debut',
            'salaire.annee_academique_id' => 'required|integer|exists:annee_academiques,id',

        ];
    }

    public function mount(){
        $this->salaire = new Salaire;
        $this->annee = \Hp::annee();
        $this->salaire->annee_academique_id = $this->annee->id; 

    }

    public function save(){
        $this->validate();
        $periode = ['debut' => $this->periode_debut , 'fin' => $this->periode_fin] ;

        $data = $this->salaire->data;
        $data['periode'] = $periode;
        $this->salaire->data = $data;

        if($this->salaire->save()){

            $ficheSalaire = $this->salaire->genererFicheSalaire();

            if($ficheSalaire){

                $this->notification()->confirm([
                'title'       => 'Payement de Salaire Enregistré!',
                'description' => "Le Salaire de {$this->salaire->montant}FCFA  pour  {$this->salaire->beneficiaire->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success',
                'timeout'     => false ,
                'accept'      => [  
                                    'label' => 'Voir La Fiche de Paye',
                                    'style'  => 'btn btn-primary' ,
                                    'url' => route('finance.fiche_salaire.show',$ficheSalaire->id),
                                ],
                ]);

                $this->emit('salaireRefreshment');

                

            }


            $this->salaire = new Salaire;
            $this->reset(['montant_confirmation','periode_debut','periode_fin']);
            $this->salaire->annee_academique_id = $this->annee->id; 
            $this->emit('CloseModal','#formulaire-creation-salaire');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Payement de Salaire n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.salaire.create-salaire-form');
    }
}
