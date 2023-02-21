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
use App\Models\Examen;

class ChoixClasseStep extends Component
{
    use Actions;

    public $examen;

    public $classes = [] ;
    public $classe_id;

    public $matieres = [] ;
    public $matiere_id;

    public function mount(Examen $examen)
    {
        $this->examen = $examen;

        debug('$this->examen');
        debug($this->examen);
        $this->classes = $this->examen->classes();

        debug('$this->classes');
        debug($this->classes);
    }

    protected $listeners = [
        'modifierListeMatiere' => 'modifierListeMatiere' ,
    ];

    public function modifierListeMatiere($data)
    {
        $this->classe_id = $data ;
        $this->matieres = $this->examen->matieres($this->classe_id);
    }

    protected function rules()
    {
        return [
            'classe_id' => 'required|integer|exists:classes,id',
            'matiere_id' => 'nullable|integer|exists:matieres,id',
        ];
    }

    public function Suivant(){
        $this->validate();
        if($this->matiere_id){
            return redirect()->route('resultat.examen.matiere', [$this->examen->id,$this->classe_id,$this->matiere_id]);
        }else{
            return redirect()->route('resultat.examen.all', [$this->examen->id,$this->classe_id]);
        }
    }

    public function render()
    {
        return view('livewire.evaluation.resultat.step.choix-classe-step');
    }
}
