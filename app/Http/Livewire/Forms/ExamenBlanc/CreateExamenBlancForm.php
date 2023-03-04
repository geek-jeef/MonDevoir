<?php

namespace App\Http\Livewire\Forms\ExamenBlanc;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen;
use App\Models\AnneeAcademique;
use WireUi\Traits\Actions;

class CreateExamenBlancForm extends Component
{
    use Actions;

    public Examen $examen ;
    public $info ;
    public AnneeAcademique $annee;

    protected function rules()
    {
        return [
            'examen.nom_examen' => 'required|string',
            'examen.ouvert_pour_enregistrement' => "nullable|boolean",
            'examen.annee_academique_id' => 'required|integer|exists:annee_academiques,id',

            'info.date.date_debut' => 'required|string',
            'info.date.date_fin' => 'required|string',
            'info.responsable.nom' => 'nullable|string',
            'info.responsable.phone' => 'nullable|string',
            'info.responsable.email' => 'nullable|email',

        ];
    }

    public function mount(){
        $this->examen = new Examen;
        $this->annee = \Hp::annee();
        $this->examen->annee_academique_id = $this->annee->id;
    }

    public function save(){
        $this->validate();

        $this->examen->date = $this->info['date'];
        $this->examen->responsable = $this->info['responsable']??["nom"=>'','phone'=>'','email'=>''];
        
        if($this->examen->save()){
            $this->notification()->send([
                'title'       => 'Examen Blanc Enregistré!',
                'description' => "L'Examen  {$this->examen->nom_examen} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->examen = new Examen;
            $this->examen->annee_academique_id = $this->annee->id;
            $this->emit('ExamenBlancListeRefresh');
            $this->emit('CloseModal','#formulaire-creation-examen-blanc');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "L'Examen n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.examen-blanc.create-examen-blanc-form');
    }
}
