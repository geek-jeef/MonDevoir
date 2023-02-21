<?php

namespace App\Http\Livewire\Payement\Systeme;

use Livewire\Component;


use App\Models\AnneeAcademique;
use App\Models\SystemeEcolage;

use WireUi\Traits\Actions;


class ShowSysteme extends Component
{
    use Actions;
    public $systeme_id ;
    public $systeme ;

    public $editable = false;

    protected $listeners = ['show-systeme-id' => 'setSystemeToShow'];

    public function setSystemeToShow($systeme_id)
    {
        $this->systeme = SystemeEcolage::find($systeme_id);
        debug('From setSystemeToShow ShowSysteme');
        debug($systeme_id);


        $this->menus = collect( 
            array(
                ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
                ['id' => 2 , 'titre' => 'Classes' , 'icon' => 'edit'  , 'loaded' => false ],
                ['id' => 3 , 'titre' => 'Eleves' , 'icon' => 'users'  , 'loaded' => false ],
                ['id' => 4 , 'titre' => 'Attribution' , 'icon' => 'link'  , 'loaded' => false ],
            )
        );
        $this->currentMenu = $this->menus->first();
        $this->emit('ShowModal','#modal-show-systeme-ecolage');
    }

    protected $rules = [
        'systeme.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        'systeme.titre' => [ 'required',  'string' , 'multiple_unique:'.SystemeEcolage::class.',titre,annee_academique_id' ],
        'systeme.montant' => "required|integer",
        'systeme.inscription' => "required|integer",
        'systeme.description' => "nullable|string",
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
        debug($this->systeme);

        if($this->systeme->save()){
            $this->notification()->send([
                'title'       => " Systeme D'Ecolage Enregistré!",
                'description' => "{$this->systeme->titre} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#modal-show-systeme-ecolage');
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "Le  Systeme D'Ecolage n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
    }


    public function render()
    {
        return view('livewire.payement.systeme.show-systeme');
    }
}
