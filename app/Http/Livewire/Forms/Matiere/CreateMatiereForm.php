<?php

namespace App\Http\Livewire\Forms\Matiere;

use Livewire\Component;


use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Matiere;

use WireUi\Traits\Actions;



class CreateMatiereForm extends Component
{
    use Actions;

    public $classe_id ;
    public Matiere $matiere ;

    protected $listeners = ['create-matiere-for-classe' => 'setClasseParDefault'];

    public function setClasseParDefault($classe_id)
    {
        $this->matiere = new Matiere;
        $this->matiere->classe_id = $classe_id;
        debug('From setClasseParDefault CreateMatiereForm');
        debug($classe_id);
        $this->emit('ShowModal','#formulaire-creation-matiere');
    }

    /*{{--
            *$table->string('nom_matiere');
            *$table->string('nom_matiere_court');
            *$table->string('code')->nullable();
            *$table->unsignedTinyInteger('coeficient')->default(2);
            *$table->enum('type', [1,2,3])->default(1);
            *$table->unsignedInteger('classe_id');
            *$table->unsignedInteger('enseignant_id')->nullable();
            $table->boolean('active')->default(true);
            *$table->boolean('exclure_des_resultats')->default(0);
            $table->json('data')->nullable();
    --}}*/

    protected $rules = [
        'matiere.nom_matiere' => 'required|string',
        'matiere.nom_matiere_court' => 'required|string',
        'matiere.code' => 'nullable|string',
        'matiere.coeficient' => 'required|integer|min:1',
        'matiere.type' => 'required|integer|min:1|max:3',
        'matiere.exclure_des_resultats' => 'nullable|boolean',
        'matiere.classe_id' => 'required|integer|exists:classes,id',
        //'matiere.enseignant_id' => 'nullable|integer|exists:personnels,id',
    ];

    public function mount($classe_id = null){
        $this->matiere = new Matiere;
        $this->matiere->classe_id = $classe_id;
        $this->classe_id = $classe_id ;
    }


    public function save(){



        $this->validate();
        debug($this->matiere);
        if($this->matiere->exclure_des_resultats){
		$this->matiere->exclure_des_resultats = true;
	}else{
		$this->matiere->exclure_des_resultats = false;
	}

        if($this->matiere->save()){
            $this->notification()->send([
                'title'       => 'Matiere Enregistré!',
                'description' => "La matiere {$this->matiere->nom_matiere} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#formulaire-creation-matiere');
            $this->matiere = new matiere;
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "La Matiere n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.forms.matiere.create-matiere-form');
    }
}
