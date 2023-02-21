<?php

namespace App\Http\Livewire\Forms\Payement;

use Livewire\Component;
use WireUi\Traits\Actions;

use App\Models\Eleve;
use App\Models\Salle;
use App\Models\Classe;
use App\Models\AnneeAcademique;

class EnregistrerPayementEcolageForm extends Component
{
    use Actions;

    public Eleve $eleve;
    public Salle $salle;
    public Classe $classe;
    public AnneeAcademique $annee;


    public $montant;
    public $montant_confirmation;

    protected $listeners = ['create-payement-for-eleve' => 'setEleveParDefault' ,
                             'afficher-recu-from-notification' => 'AfficherRecu'];

    public function setEleveParDefault($eleve_id)
    {
        $this->annee = \Hp::annee();
        $this->eleve = Eleve::find($eleve_id);
        $this->salle = $this->eleve->salle()->where('eleve_salle.annee_academique_id', $this->annee->id)->get()->last();
        $this->classe = $this->salle->classe()->get()->last();
        debug($this->eleve);
        $this->emit('ShowModal','#formulaire-payement-ecolage');
    }

    protected $rules = [
        'montant' => 'required|integer|confirmed',
        'montant_confirmation' => 'required|integer|same:montant',
    ];


    public function confirmPayementInscription(){
        $this->dialog()->confirm([
            'title'       => "Payer les frais d'inscription?",
            'description' => "pour l'eleve {$this->eleve->nom_complet} ",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Payer',
                'method' => 'payementInscription',
            ],
            'reject' => [
                'label'  => 'Non, annuler',
            ],
        ]);
    }

    public function payementInscription(){
        if(!$this->eleve->inscription_courante->isInscriptionPaye()){
            $recu = $this->eleve->inscription_courante->enregisterPayementInscription() ;
            if($recu){
                $this->notification()->confirm([
                    'title'       => "Payement D'Inscription Enregistré!",
                    'description' => "Le Payement de {$this->montant} pour l'inscription {$this->eleve->nom_complet} a été Enregistré avec succès",
                    'icon'        => 'success',
                    'accept'      => [  'label' => 'imprimer le Recu',
                                        'style'  => 'btn btn-primary' ,
                                        'url' => route('payement.recu.show',$recu->id),
                                        ],
                ]);
                $this->reset(['montant','montant_confirmation']);
                $this->emit('CloseModal','#formulaire-payement-ecolage');
                $this->emit('EcolageGridRefreshment');
            }else{
                $this->emit('CloseModal','#formulaire-payement-ecolage');
                $this->notification()->send([
                    'title'       => 'Alerte!',
                    'description' => "Le Payement n'a pas été enregistré ",
                    'icon'        => 'warning'
                ]);
            }
        }
    }


    

    public function save(){

        $this->validate();
        $recu = $this->eleve->inscription_courante->enregisterPayementEcolage($this->montant) ;
        if($recu){
            $this->notification()->confirm([
                'title'       => 'Payement Enregistré!',
                'description' => "Le Payement de {$this->montant} pour {$this->eleve->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success',
                'accept'      => [  'label' => 'imprimer le Recu',
                                    'style'  => 'btn btn-primary' ,
                                    'url' => route('payement.recu.show',$recu->id),
                                    ],
            ]);
            $this->reset(['montant','montant_confirmation']);
            $this->emit('CloseModal','#formulaire-payement-ecolage');
            $this->emit('EcolageGridRefreshment');

            //redirect()->route('payement.recu.show',$recu);
        }else{
            $this->emit('CloseModal','#formulaire-payement-ecolage');
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "Le Payement n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
        
    }



    public function render()
    {
        return view('livewire.forms.payement.enregistrer-payement-ecolage-form');
    }
}
