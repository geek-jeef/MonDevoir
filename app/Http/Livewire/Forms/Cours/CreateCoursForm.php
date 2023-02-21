<?php

namespace App\Http\Livewire\Forms\Cours;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Salle;
use App\Models\Cours;

Use App\Rules\TempsCoursDisponibleRule ;

use WireUi\Traits\Actions;

class CreateCoursForm extends Component
{
    use Actions;

    public $salle ;
    public $liste_matiere ;
    public Cours $cours ;
    public $annee_academique_id ;


    protected $listeners = ['update-salle-for-cours-creation' => 'setSalleParDefault'];

    public function setSalleParDefault($data)
    {
        $this->cours = new Cours;
        if((isset($data['salle_id'])) && ($data['salle_id']) && ($data['salle_id'] != '') && ($data['salle_id'] != 'null') ){
            $this->salle = Salle::find($data['salle_id']) ;
            if($this->salle){
                $this->cours->salle_id =   $this->salle->id ;
                $this->liste_matiere = $this->salle->matieres()->get();
                $this->annee_academique_id = $this->salle->annee()->first()->id;
                $this->cours->annee_academique_id =   $this->annee_academique_id ;
                return ;
            }
        }
        $this->notification()->send([
            'title'       => 'Aucune Salle Selectionnée!',
            'description' => "Selectionnez une Salle pour ajouter un cours",
            'icon'        => 'info'
        ]);

    }
    
    protected function rules()
    {
        return [
            'cours.jour' => 'required|integer|min:1|max:7',
            'cours.heure_debut' => 'required|date_format:H:i',
            'cours.salle_id' => 'required|integer|exists:salles,id',
            'cours.matiere_id' => 'required|integer|exists:matieres,id',
            'cours.enseignant_id' => 'required|integer|exists:personnels,id',
            'cours.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
            'cours.heure_debut' => ['required', function ($attribute, $value, $fail) {
                                        $result = Cours::isTimeAvailable($this->cours->jour, $value, $this->cours->heure_fin, $this->cours->salle_id, $this->cours->enseignant_id, null);
                                        if (!$result) {
                                            $fail("Cette Plage Horaire n'est pas Disponible");
                                        }
                                    }
                                    , 'date_format:H:i'
                                    ],
            'cours.heure_fin' => 'required|date_format:H:i|after:cours.heure_debut',

        ];
    }


    public function mount(){
        $this->cours = new Cours;
    }


    public function save(){

        $this->validate();

        if($this->cours->save()){

            $this->notification()->send([
                'title'       => 'Cours Enregistré!',
                'description' => "Le Cours a été Enregistré avec succès",
                'icon'        => 'success'
            ]);

            $this->cours = new Cours;
            $this->emit('CloseModal','#formulaire-creation-cours');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Cours n'a pas été enregistré "
            );
        }
    }


    public function render()
    {
        return view('livewire.forms.cours.create-cours-form');
    }
}
