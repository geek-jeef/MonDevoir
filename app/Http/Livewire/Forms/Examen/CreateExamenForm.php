<?php

namespace App\Http\Livewire\Forms\Examen;

use Livewire\Component;
use App\Models\Examen;
use App\Models\Periode;
use App\Models\CycleAcademique;
use App\Models\AnneeAcademique;
use WireUi\Traits\Actions;

class CreateExamenForm extends Component
{
    use Actions;

    public Examen $examen ;
    public AnneeAcademique $annee;
    public $cycles;
    public $selected_cycle_id;

    protected function rules()
    {
        return [
            'examen.nom_examen' => 'required|string',
            'examen.periode_id' => "required|integer|exists:periodes,id",
            'examen.ouvert_pour_enregistrement' => "nullable|boolean",
            'examen.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function mount(){
        $this->examen = new Examen;
        $this->annee = \Hp::annee();
        $this->examen->annee_academique_id = $this->annee->id;
        $this->cycles = CycleAcademique::ouvert()->where('annee_academique_id',$this->annee->id)->get();
    }

    public function save(){
        $this->validate();
        if($this->examen->save()){
            $this->notification()->send([
                'title'       => 'Examen Enregistré!',
                'description' => "L'Examen {$this->examen->nom_examen} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->examen = new Examen;
            $this->examen->annee_academique_id = $this->annee->id;
            $this->emit('CloseModal','#formulaire-creation-examen');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "L'Examen n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        $liste_periodes = [] ;
        if($this->selected_cycle_id){
            $liste_periodes = Periode::where('cycle_academique_id',$this->selected_cycle_id)->get();
        }else{
            $liste_periodes = Periode::where('annee_academique_id',$this->annee->id)->get();
        }
        return view('livewire.forms.examen.create-examen-form',['periodes' => $liste_periodes]);
    }
}
