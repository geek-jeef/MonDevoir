<?php

namespace App\Http\Livewire\Widget\Dashboard;

use Livewire\Component;
use App\Models\Classe;
use App\Models\CycleAcademique;
use App\Models\Salle;
use App\Models\Personnel;

class ApercuGeneral extends Component
{
    public $data ;


    public function mount()
    {
        $annee = \Hp::annee();
        $salles = $annee->salles()->where('cycle_academiques.ouvert_cette_annee', true);
        $eleves = $annee->eleves()->where('cycle_academiques.ouvert_cette_annee', true);
        $tuteurs = $annee->tuteurs()->where('cycle_academiques.ouvert_cette_annee', true);
        $personnels = Personnel::where('date_depart', null)->where('active', true)->get() ;

        $this->data=[ 
                ["icon" => "monitor" , "valeur" => $salles->count() , "texte" => "Salles de Classe"], 
                ["icon" => "users" , "valeur" => $eleves->count() , "texte" => "Eleves Inscrits"], 
                ["icon" => "user" , "valeur" => $personnels->count() , "texte" => "Personnels"], 
                ["icon" => "link" , "valeur" => $tuteurs->count() , "texte" => "Tuteurs"],
            ] ;
    }

    public function render()
    {

        return view('livewire.widget.dashboard.apercu-general');
    }
}
