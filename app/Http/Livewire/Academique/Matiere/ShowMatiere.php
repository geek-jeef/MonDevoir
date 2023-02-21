<?php

namespace App\Http\Livewire\Academique\Matiere;

use Livewire\Component;


use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Matiere;

use WireUi\Traits\Actions;


class ShowMatiere extends Component
{
    use Actions;
    public $matiere_id ;
    public $matiere ;

    protected $listeners = ['show-matiere-id' => 'setMatiereToShow'];

    public function setMatiereToShow($matiere_id)
    {
        $this->matiere = Matiere::find($matiere_id);
        debug('From setMatiereToShow ShowMatiere');
        debug($matiere_id);


        $this->menus = collect( 
            array(
                ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
                ['id' => 2 , 'titre' => 'Compositions' , 'icon' => 'edit'  , 'loaded' => false ],
                ['id' => 3 , 'titre' => 'Devoirs' , 'icon' => 'git-merge'  , 'loaded' => false ],
                ['id' => 4 , 'titre' => 'Examens et Resultats' , 'icon' => 'bar-chart'  , 'loaded' => false ],
                ['id' => 5 , 'titre' => 'Enseignants' , 'icon' => 'user'  , 'loaded' => false ],
            )
        );
        $this->currentMenu = $this->menus->first();
        $this->emit('ShowModal','#modal-show-matiere');
    }

    protected $rules = [
        'matiere.nom_matiere' => 'required|string',
        'matiere.nom_matiere_court' => 'required|string',
        'matiere.code' => 'nullable|string',
        'matiere.coeficient' => 'required|integer|min:1',
        'matiere.type' => 'required|integer|min:1|max:3',
        'matiere.exclure_des_resultats' => 'required|boolean',
        'matiere.classe_id' => 'required|integer|exists:classes,id',
        //'matiere.enseignant_id' => 'nullable|integer|exists:personnels,id',
    ];

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    public function mount(){
        
    }


    public function update(){

        $this->validate();
        debug($this->matiere);

        if($this->matiere->save()){
            $this->notification()->send([
                'title'       => 'Matiere Enregistré!',
                'description' => "La matiere {$this->matiere->nom_matiere} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#modal-show-matiere');
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
        return view('livewire.academique.matiere.show-matiere');
    }
}
