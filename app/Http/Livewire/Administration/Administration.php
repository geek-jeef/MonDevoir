<?php

namespace App\Http\Livewire\Administration;

use Livewire\Component;

class Administration extends Component
{
    public $menus;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    public function mount(){
        $this->menus = collect(
            [
                [   'id' => 1,
                    'icon' => 'sliders',
                    'titre' => 'Paramétres Etablissement',
                    'file_name' => 'administration.tab.parametres-etablissement'
                ],
                /*[   'id' => 2,
                    'icon' => 'calendar',
                    'titre' => 'Année Academique',
                    'file_name' => 'administration.tab.année-academique'
                ],
                [   'id' => 3,
                    'icon' => 'credit-card',
                    'titre' => 'Modéle de Carte',
                    'file_name' => 'administration.tab.modeles-cartes',
                ],*/
                /*[   'id' => 4,
                    'icon' => 'file-text',
                    'titre' => 'Paramétres des Documents',
                    'file_name' => 'administration.tab.parametres-document'
                ],*/
                /*[
                    'id' => 5,
                    'icon' => 'users',
                    'titre' => 'Rôle & Permissions',
                    'file_name' => 'administration.tab.role-permissions'
                ],
                [
                    'id' => 6,
                    'icon' => 'github',
                    'titre' => 'Administrateur Système',
                    'file_name' => 'administration.tab.administrateur-systeme'

                ],*/
                [
                    'id' => 7,
                    'icon' => 'hash',
                    'titre' => 'Réinitialisation Mot De Passe',
                    'file_name' => 'administration.tab.reinitialiser-mot-de-passe'
                ],
            ]
        );
        $this->currentMenu = $this->menus->first();

        debug($this->menus);
        
    }
    public function render()
    {
        return view('livewire.administration.administration');
    }
}
