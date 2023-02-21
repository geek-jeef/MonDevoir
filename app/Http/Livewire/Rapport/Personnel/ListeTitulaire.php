<?php

namespace App\Http\Livewire\Rapport\Personnel;

use Livewire\Component;
use App\Models\Personnel;

class ListeTitulaire extends Component
{
    public $entete = true;
    public $titre = "Liste Des Titulaires" ;
    public $column = 3;
    public $footer = 0;
    
    public $designation = true;
    public $qualification = false;
    public $genre = false;
    public $date_de_naissance = false;
    public $email = false;
    public $phone = true;
    public $adresse = false;
    public $date_embauche = false;

    public $paysage = false;
    public $annee;



    //public $data = [] ;

    /*protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];*/

    public function mount(){
        $this->annee = \Hp::annee();
    }

    public function render()
    {
        return view('livewire.rapport.personnel.liste-titulaire')->layout('layouts.printable');
    }

}
