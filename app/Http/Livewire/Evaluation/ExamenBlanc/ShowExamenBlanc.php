<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Matiere ;
use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;


class ShowExamenBlanc extends Component
{
    use Actions;

    public $examen;

    /*public $menus ;
    public $currentMenu;*/

    /*

    protected function rules()
    {
        return [
            'examen.nom_examen' => 'required|string',
            'examen.periode_id' => "required|integer|exists:periodes,id",
            'examen.ouvert_pour_enregistrement' => "nullable|boolean",
            'examen.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->examen->save()){
            $this->notification()->send([
                'title'       => 'examen Enregistré!',
                'description' => "{$this->examen->nom_examen} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "L'Examen n'a pas été Modifié"
            );
        }
    }*/


    //protected $listeners = ['show-examen-id' => 'setExamenToShow'];

    /*public function setExamenToShow($examen_id)
    {
        $this->examen = Examen::find($examen_id);
        debug('From setExamenToShow ShowExamen');
        debug($examen_id);

        $this->menus = collect( 
            array(
                ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
                //['id' => 2 , 'titre' => 'Examens' , 'icon' => 'edit'  , 'loaded' => false ],
            )
        );
        $this->currentMenu = $this->menus->first();
        $this->emit('ShowModal','#modal-show-examen');
    }*/

    public function deleteMatiere($matiere_id){
        $matiere = Matiere::find($matiere_id);
        if($matiere){
            $matiere->delete();
            $this->emit('listeMatiereExamenBlancChange');
        }
    }

    public function toggleActivityMatiere($matiere_id){
        $matiere = Matiere::find($matiere_id);
        if($matiere){
            $matiere->active = ! $matiere->active;
            $matiere->save();
            $this->emit('listeMatiereExamenBlancChange');
        }
    }

    protected $listeners = [
        'listeMatiereExamenBlancChange' => '$refresh',
        'listeEleveExamenBlancChange' => '$refresh',
    ];

    public function mount(Examen $examen){

    }



    public function render()
    {
        return view('livewire.evaluation.examen-blanc.show-examen-blanc');
    }
}
