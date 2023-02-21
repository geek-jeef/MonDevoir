<?php

namespace App\Http\Livewire\Evaluation\Periode;

use Livewire\Component;
use App\Models\Periode ;
use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;

class ShowPeriode extends Component
{
    use Actions;

    public $periode;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    protected function rules()
    {
        return [
            'periode.nom_periode' => 'required|string',
            'periode.date_debut' => "required|date",
            'periode.date_fin' => "required|date|after:periode.date_debut",
            'periode.cycle_academique_id' => 'required|integer',
        ];
    }

    public function update(){
        $this->validate();
        if($this->periode->save()){
            $this->notification()->send([
                'title'       => 'periode Enregistré!',
                'description' => "{$this->periode->nom_periode} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Periode n'a pas été Modifié"
            );
        }
    }


    protected $listeners = ['show-periode-id' => 'setPeriodeToShow'];

    public function setPeriodeToShow($periode_id)
    {
        $this->periode = Periode::find($periode_id);
        debug('From setPeriodeToShow ShowPeriode');
        debug($periode_id);

        $this->menus = collect( 
            array(
                ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
                ['id' => 2 , 'titre' => 'Examens' , 'icon' => 'edit'  , 'loaded' => false ],
            )
        );
        $this->currentMenu = $this->menus->first();
        $this->emit('ShowModal','#modal-show-periode');
    }

    public function mount($periode = null){
        if($periode){
            $this->setPeriodeToShow($periode);
        }
    }

    public function render()
    {
        return view('livewire.evaluation.periode.show-periode');
    }
}
