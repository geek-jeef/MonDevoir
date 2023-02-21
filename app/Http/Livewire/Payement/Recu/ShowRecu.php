<?php

namespace App\Http\Livewire\Payement\Recu;

use Livewire\Component;
use App\Models\Recu;

class ShowRecu extends Component
{

    public Recu $recu;
    public $inscription;
    public $enregistrement;
    public $salle;
    public $data_code;

    public function mount(Recu $recu){

        $this->recu = $recu;
        $this->enregistrement = $this->recu->enregistrement;
        $this->salle = $this->enregistrement->eleve->inscription_courante->salle;
        $this->data_code = "Recu : ". $this->recu->id . "\n" ;
        $this->data_code .= "Eleve : ". $this->enregistrement->eleve->nom_complet . "\n" ;
        $this->data_code .= "Montant : ". $this->recu->montant_paye . "\n" ;
        $this->data_code .= "Restant : ". $this->enregistrement->balance . "\n" ;
        $this->data_code .= "Date : ". $this->recu->created_at ;



        $this->inscription = ($recu->data['pour_inscription'])?? false;

        debug($this->data_code);

    }
    
    public function render()
    {
        return view('livewire.payement.recu.show-recu')->layout('layouts.printable');
    }
}
