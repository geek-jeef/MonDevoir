<?php

namespace App\Http\Livewire\Evaluation\Resultat\Step;

use Livewire\Component;

use WireUi\Traits\Actions;


use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;

use App\Models\Devoir;
use App\Models\Note;
use App\Models\Eleve;

use App\Models\Matiere;
use App\Models\Classe;
use App\Models\Salle;

use App\Models\Periode;
use App\Models\Notation;


class ChoixExamenStep extends Component
{
    use Actions;

    public $annee;
    public $cycles;
    public $cycle_id;

    public $periodes = [] ;
    public $periode_id;

    public $examens = [] ;
    public $examen_id;

    public function mount()
    {
        $this->annee = \Hp::annee();
        $this->cycles = $this->annee->cycles->all();
    }

    protected $listeners = [
        'modifierListePeriode' => 'modifierListePeriode' ,
        'modifierListeExamen' => 'modifierListeExamen' ,
    ];

    public function modifierListePeriode()
    {
        if($this->cycle_id){
            $this->periodes = CycleAcademique::find($this->cycle_id)->periodes ;
            $this->examens = [] ;
        }
    }

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

        return redirect()->route('resultat.examen', [$this->examen_id]);

    }

    /*

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
    }*/




    public function render()
    {
        return view('livewire.evaluation.resultat.step.choix-examen-step');
    }
}
