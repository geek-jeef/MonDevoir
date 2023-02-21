<?php

namespace App\Http\Livewire\Widget;

use App\Models\User;
use App\Models\Eleve;
use App\Models\Personnel;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

use App\Models\Periode;
use App\Models\Examen;

use Livewire\Component;

class OutilsRecherche extends Component
{
    public $recherche = "";

    public function render()
    {
        $data = array() ;
        if($this->recherche){
            $eleves = Eleve::search($this->recherche)->take(10)->get();
            if($eleves->count()){
                $data['eleves'] = [
                    'titre' => 'Eleves',
                    'image' => true,
                    'image_url' => 'photo',
                    'value' => 'nom_complet',
                    'url' => 'url',
                    'description' => 'description',
                    'data' => $eleves

                ];
            }

            $personnels = Personnel::search($this->recherche)->take(10)->get();

            if($personnels->count()){
                $data['personnels'] = [
                    'titre' => 'Personnels',
                    'image' => true,
                    'image_url' => 'photo',
                    'value' => 'nom_complet',
                    'url' => 'url',
                    'description' => 'description',
                    'data' => $personnels
                ];
            }
        }
        return view('livewire.widget.outils-recherche', ['resultats' => $data]);
    }
}
