<?php

namespace App\Http\Livewire\Evaluation\Notable;

use Livewire\Component;
use WireUi\Traits\Actions;

use App\Models\Devoir;
use App\Models\Note;
use App\Models\Eleve;

use App\Models\Matiere;
use App\Models\Classe;
use App\Models\Salle;

use App\Models\Periode;
use App\Models\Notation;


class SoumettreNotable extends Component
{
    use Actions;

    public $notable;
    public $editable = false;

    public $periodes = [] ;
    public $periode_id;
    public $examens = [] ;
    public $examen_id;

    public function mount($notable)
    {
        $this->notable = $notable ;
        $this->periodes = $notable->classe->cycle->periodes;
        debug($notable);
        debug($this->periodes);
    }

    protected $listeners = ['modifierListeExamen' => 'modifierListeExamen'];


    public function modifierListeExamen()
    {
        if($this->periode_id){
            $this->examens = Periode::find($this->periode_id)->examens ;
        }
    }

    protected function rules()
    {
        return [
            'examen_id' => 'required|integer|exists:examens,id',
        ];
    }

    public function Soumettre(){
        $this->validate();
        $notable_data = [
                         'notable_id' => $this->notable->id,
                         'notable_type' => $this->notable::class,

                         'examen_id' => $this->examen_id,
                         'matiere_id' => $this->notable->matiere_id,
                         'classe_id' => $this->notable->classe_id,
                         'annee_academique_id' => $this->notable->annee_academique_id,
                     ] ;

        $eleves = $this->notable->eleves() ;
        foreach($eleves as $eleve){
            $data = $notable_data;
            $data['eleve_id'] = $eleve->id;
            $data['salle_id'] = $eleve->salle->id;
            $notation = Notation::firstOrCreate($data);
            debug($notation);
        }

        $this->dialog()->show([
            'title'       => 'Soumission Enregistré!',
            'description' => "Les Notes ont été soumis avec succès ",
            'icon'        => 'success'
        ]);
        $this->editable = false ;
    }

    public function Retirer(){
        $this->dialog()->confirm([
            'title'       => 'Etes vous Sure? ',
            'description' => 'Rétirer Les Notes?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui,Retirer',
                'method' => 'ExecuterRetirer',
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);
    }

    public function ExecuterRetirer(){
        $deleted = Notation::where('notable_id', $this->notable->id)
                    ->where('notable_type', $this->notable::class)
                    ->delete();
        if($deleted){
            $this->dialog()->show([
                'title'       => 'Soumission Retirée!',
                'description' => "Les Notes ont été retirée avec succès ",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->show([
                'title'       => 'Aucune Soumission a Retirée!',
                'description' => "Aucune Donnée n'a été trouvé ",
                'icon'        => 'warning'
            ]);
        }
        $this->editable = false ;
    }


    public function render()
    {
        return view('livewire.evaluation.notable.soumettre-notable');
    }
}
