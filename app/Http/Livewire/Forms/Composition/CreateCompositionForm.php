<?php

namespace App\Http\Livewire\Forms\Composition;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Composition;

use WireUi\Traits\Actions;


class CreateCompositionForm extends Component
{
    use Actions;

        /*
                $table->string('nom_composition',100);
            $table->unsignedInteger('ponderation');
            $table->unsignedInteger('matiere_id');
            
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
    */

    public Composition $composition ;
    public $classe ;
    public $liste_matiere ;
    public $annee_academique_id ;


    protected $listeners = ['update-classe-for-composition-creation' => 'setClasseParDefault'];

    public function setClasseParDefault($data)
    {
        $this->composition = new Composition;
        if((isset($data['classe_id'])) && ($data['classe_id']) && ($data['classe_id'] != '') && ($data['classe_id'] != 'null') ){
            $this->classe = Classe::find($data['classe_id']) ;
            if($this->classe){
                $this->composition->classe_id =   $this->classe->id ;
                $this->liste_matiere = $this->classe->matieres()->get();
                $this->annee_academique_id = $this->classe->annee()->first()->id;
                $this->composition->annee_academique_id =   $this->annee_academique_id ;
                return ;
            }
        }
        $this->notification()->send([
            'title'       => 'Aucune Classe Selectionnée!',
            'description' => "Selectionnez une Classe pour ajouter un composition",
            'icon'        => 'info'
        ]);

    }
    
    protected function rules()
    {
        return [
            'composition.nom_composition' => 'required|string|min:1',
            'composition.ponderation' => 'required|integer|min:1',

            'composition.classe_id' => 'required|integer|exists:classes,id',
            'composition.matiere_id' => 'required|integer|exists:matieres,id',
            'composition.annee_academique_id' => 'required|integer|exists:annee_academiques,id',

        ];
    }


    public function mount(){
        $this->composition = new Composition;
    }


    public function save(){

        $this->validate();

        if($this->composition->save()){

            $this->notification()->send([
                'title'       => 'Composition Enregistré!',
                'description' => "Le Composition a été Enregistré avec succès",
                'icon'        => 'success'
            ]);

            $this->composition = new Composition;
            $this->emit('CloseModal','#formulaire-creation-composition');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Composition n'a pas été enregistré "
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.composition.create-composition-form');
    }
}
