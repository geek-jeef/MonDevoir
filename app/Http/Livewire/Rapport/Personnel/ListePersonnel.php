<?php

namespace App\Http\Livewire\Rapport\Personnel;

use Livewire\Component;
use App\Models\Personnel;

class ListePersonnel extends Component
{

    public $entete = true;
    public $titre = "Liste Du Personnel" ;
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



    //public $data = [] ;

    /*protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];*/

    public function render()
    {
        $personnels = Personnel::where('date_depart',null)->where('active',true)->get() ;

        /*if($this->salle){
            $eleves = $this->salle->eleves ;
            $eleves = $eleves->sortBy('nom_complet');
        }*/
        $personnels = $personnels->sortBy('nom_complet');


        return view('livewire.rapport.personnel.liste-personnel',['personnels' => $personnels])->layout('layouts.printable');
    }
}
