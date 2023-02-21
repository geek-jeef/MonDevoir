<?php

namespace App\Http\Livewire\Evaluation\Examen;

use Livewire\Component;
use App\Models\Examen ;
use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;

class ShowExamen extends Component
{
    use Actions;

    public $examen;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

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
    }


    protected $listeners = ['show-examen-id' => 'setExamenToShow'];

    public function setExamenToShow($examen_id)
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
    }

    public function mount($examen = null){
        if($examen){
            $this->setExamenToShow($examen);
        }
    }


    public function render()
    {
        return view('livewire.evaluation.examen.show-examen');
    }
}
