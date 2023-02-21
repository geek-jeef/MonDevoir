<?php

namespace App\Http\Livewire\Tuteur;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Tuteur;
use App\Models\Eleve;

use WireUi\Traits\Actions;


class ShowTuteur extends Component
{
    use Actions;
    public $tuteur_id ;
    public $tuteur ;

    protected $listeners = ['show-tuteur-id' => 'setTuteurToShow'];

    public function setTuteurToShow($tuteur_id)
    {
        $this->tuteur = Tuteur::find($tuteur_id);

        $this->menus = collect( 
            array(
                ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
                ['id' => 2 , 'titre' => 'Eleves' , 'icon' => 'users'  , 'loaded' => false ],
            )
        );
        $this->currentMenu = $this->menus->first();
        $this->emit('ShowModal','#modal-show-tuteur');
    }

    protected $rules = [
        'tuteur.nom' => 'required|string|min:6',
        'tuteur.phone_primaire' => 'nullable|string|max:20',
        'tuteur.phone_secondaire' => 'nullable|string|max:20',
        'tuteur.genre' => 'required|string',
        'tuteur.email' => 'nullable|email',
        'tuteur.adresse' => 'nullable|string|max:500',
        'tuteur.profession' => 'nullable|string|max:250',
    ];

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    public function update(){

        $this->validate();
        debug($this->tuteur);

        if($this->tuteur->save()){
            $this->notification()->send([
                'title'       => 'Tuteur Enregistré!',
                'description' => "Le tuteur {$this->tuteur->nom} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#modal-show-tuteur');
            $this->emit('confetti');
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "Le Tuteur n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
    }


    public function render()
    {
        return view('livewire.tuteur.show-tuteur');
    }
}
