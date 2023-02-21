<?php

namespace App\Http\Livewire\Forms\Classe;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use WireUi\Traits\Actions;


class CreateClasseForm extends Component
{
    use Actions;

    public $cycle_id ;
    public Classe $classe ;
    public $cycles;

    protected $rules = [
        'classe.nom_classe' => 'required|string',
        'classe.nom_court' => 'required|string|max:40',
        'classe.serie' => 'nullable|string|max:40',
        'classe.matiere_au_choix' => 'required|boolean',
        'classe.max_matiere_au_choix' => 'nullable|integer',
        'classe.ouvert_pour_inscription' => 'required|boolean',
        'classe.cycle_academique_id' => 'required|integer|exists:cycle_academiques,id',
    ];

    public function mount($cycle_id = null){
        $this->cycle_id = $cycle_id ;
        $this->classe = new Classe;
        $this->cycles = \Hp::annee()->cycles()->where('ouvert_cette_annee', true)->get();
    }


    public function save(){

        $this->validate();
        debug($this->classe);
        if($this->classe->save()){
            $this->notification()->send([
                'title'       => 'Classe Enregistré!',
                'description' => "La classe {$this->classe->nom_classe} {$this->classe->serie} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#formulaire-creation-classe');
            $this->classe = new Classe;
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "La Classe n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.forms.classe.create-classe-form');
    }
}
