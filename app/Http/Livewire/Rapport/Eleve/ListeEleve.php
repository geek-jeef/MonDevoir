<?php

namespace App\Http\Livewire\Rapport\Eleve;

use Livewire\Component;
use App\Models\Salle;
class ListeEleve extends Component
{

    public $entete = true;
    public $titre ;
    public $column = 3;
    public $footer = 0;
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

        return view('livewire.rapport.eleve.liste-eleve',['eleves' => $eleves])->layout('layouts.printable');
    }
}
