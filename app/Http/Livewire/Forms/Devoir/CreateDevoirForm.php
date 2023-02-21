<?php

namespace App\Http\Livewire\Forms\Devoir;

use Livewire\Component;


use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Salle;
use App\Models\Classe;
use App\Models\Devoir;

use WireUi\Traits\Actions;

class CreateDevoirForm extends Component
{
    use Actions;

    /*
            $table->string('nom_devoir',100);
            $table->unsignedInteger('ponderation');
            $table->unsignedInteger('matiere_id');
            ²$table->unsignedInteger('salle_id');
            ²$table->unsignedInteger('classe_id');
            ²$table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */

    public Devoir $devoir ;
    public $salle ;
    public $liste_matiere ;
    public $annee_academique_id ;


    protected $listeners = ['update-salle-for-devoir-creation' => 'setSalleParDefault'];

    public function setSalleParDefault($data)
    {
        $this->devoir = new Devoir;
        if((isset($data['salle_id'])) && ($data['salle_id']) && ($data['salle_id'] != '') && ($data['salle_id'] != 'null') ){
            $this->salle = Salle::find($data['salle_id']) ;
            if($this->salle){
                $this->devoir->salle_id =   $this->salle->id ;
                $this->devoir->classe_id =   $this->salle->classe_id ;
                $this->liste_matiere = $this->salle->classe->matieres()->get();
                $this->annee_academique_id = $this->salle->annee()->first()->id;
                $this->devoir->annee_academique_id =   $this->annee_academique_id ;
                return ;
            }
        }
        $this->notification()->send([
            'title'       => 'Aucune Salle Selectionnée!',
            'description' => "Selectionnez une Salle pour ajouter un devoir",
            'icon'        => 'info'
        ]);

    }
    
    protected function rules()
    {
        return [
            'devoir.nom_devoir' => 'required|string|min:1',
            'devoir.ponderation' => 'required|integer|min:1',

            'devoir.salle_id' => 'required|integer|exists:salles,id',
            'devoir.matiere_id' => 'required|integer|exists:matieres,id',
            'devoir.classe_id' => 'required|integer|exists:classes,id',

            'devoir.annee_academique_id' => 'required|integer|exists:annee_academiques,id',

        ];
    }


    public function mount(){
        $this->devoir = new Devoir;
    }


    public function save(){

        $this->validate();

        if($this->devoir->save()){

            $this->notification()->send([
                'title'       => 'Devoir Enregistré!',
                'description' => "Le Devoir a été Enregistré avec succès",
                'icon'        => 'success'
            ]);

            $this->devoir = new Devoir;
            $this->emit('CloseModal','#formulaire-creation-devoir');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Devoir n'a pas été enregistré "
            );
        }
    }


    public function render()
    {
        return view('livewire.forms.devoir.create-devoir-form');
    }
}
