<?php

namespace App\Http\Livewire\Rapport\Eleve;

use Livewire\Component;
use App\Models\Salle;
class ListePresence extends Component
{
    public $entete = true;
    public $titre = "Liste De Présence" ;
    public $column = 1;
    public $footer = 3;

    public $data = [] ;

    public $salle ;

    protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];

    public function updateListeData($data){

        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $this->salle = Salle::find($data['salle_id']);
        }
    }

    public function render()
    {
        $eleves = [] ;

        if($this->salle){
            $eleves = $this->salle->eleves ;
            $eleves = $eleves->sortBy('nom_complet');
        }

        return view('livewire.rapport.eleve.liste-presence',['eleves' => $eleves])->layout('layouts.printable');
    }
}
