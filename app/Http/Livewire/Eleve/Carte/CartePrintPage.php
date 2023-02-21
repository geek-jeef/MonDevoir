<?php

namespace App\Http\Livewire\Eleve\Carte;

use Livewire\Component;
use App\Models\AnneeAcademique;

class CartePrintPage extends Component
{
    public $cartes;
    public $pages;
    public $annee;

    public function mount(){
        debug('data');
        debug(request()->query('cartePrintData'));

        $annne_id = request()->query('cartePrintData')["annee_id"];

        if($annne_id){
            $this->annee = AnneeAcademique::find($annne_id);
            debug('annne from data');
        }else{
            $this->annee = \Hp::annee();
            debug('annne from computation');
        }
        debug($this->annee);

        $cartes = request()->query('cartePrintData')["cartes"] ?? [];

        if($cartes){
            $this->cartes = $cartes;
            debug('cartes from data');
        }else{
            $this->cartes = [];
            debug('cartes from cumputation');
        }
        debug($this->cartes);
        $this->pages = array_chunk($this->cartes, 9);

    }




    public function render()
    {
        return view('livewire.eleve.carte.carte-print-page')->layout('layouts.printable');
    }
}
