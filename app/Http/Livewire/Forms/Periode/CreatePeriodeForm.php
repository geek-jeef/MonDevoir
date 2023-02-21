<?php

namespace App\Http\Livewire\Forms\Periode;

use Livewire\Component;
use App\Models\Periode;
use App\Models\CycleAcademique;
use App\Models\AnneeAcademique;
use WireUi\Traits\Actions;

class CreatePeriodeForm extends Component
{
    use Actions;

    public Periode $periode ;
    public AnneeAcademique $annee;
    public $cycles;

    protected function rules()
    {
        return [
            'periode.nom_periode' => 'required|string',
            'periode.date_debut' => "required|date",
            'periode.date_fin' => "required|date|after:periode.date_debut",
            'periode.cycle_academique_id' => 'required|integer',
        ];
    }

    public function mount(){
        $this->periode = new Periode;
        $this->annee = \Hp::annee();
        $this->periode->annee_academique_id = $this->annee->id;
        $this->cycles = CycleAcademique::where('annee_academique_id',$this->annee->id)->get();
    }

    public function save(){
        $this->validate();
        $this->periode->annee_academique_id = $this->annee->id;

        if($this->periode->save()){
            $this->notification()->send([
                'title'       => 'Periode Enregistré!',
                'description' => "La Periode {$this->periode->nom_periode} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->periode = new Periode;
            $this->emit('CloseModal','#formulaire-creation-periode');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Periode n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.periode.create-periode-form');
    }
}
