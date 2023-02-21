<?php

namespace App\Http\Livewire\Rapport\Payement;

use Livewire\Component;

use App\Models\Salle;
use App\Models\Classe;
use App\Models\CycleAcademique;
use WireUi\Traits\Actions;

class ProgressionPayement extends Component
{
    use Actions;

    public $entete = true;
    public $titre = 'Progression des payements';
    public $column = 1;
    public $footer = 0;
    public $data = [] ;
    public $salle ;
    protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];

    public function updateListeData($data){
        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $this->salle = Salle::find($data['salle_id']);
            //$this->emit('confetti');
        }else{
            $this->notification()->send([
                'title'       => 'Veuillez Choisir Une Salle!',
                'description' => "Aucune Salle Selectionnée",
                'icon'        => 'info'
            ]);
        }
    }

    public function render()
    {
        $eleves = [] ;

        if($this->salle){
            $eleves = $this->salle->eleves ;
            $eleves = $eleves->map(function ($query) {
              $query->progression_inscription = $query->inscription_courante->inscriptionCondition();
              $query->progression_balance = $query->inscription_courante->getBalance();
              $query->progression_valeur = $query->inscription_courante->valeurProgressionEcolage();
              return $query;
            });

            $eleves = $eleves->sortBy([
                    ['progression_inscription', 'asc'],
                    ['progression_balance', 'desc'],
                    ['nom_complet', 'asc'],
                ]);
        }

        debug($eleves);

        return view('livewire.rapport.payement.progression-payement',['eleves' => $eleves])->layout('layouts.printable');
    }
}
