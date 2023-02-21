<?php

namespace App\Http\Livewire\Finance\FicheSalaire;

use Livewire\Component;
use App\Models\FicheSalaire ;

use App\Settings\FinanceSettings;

class ShowFicheSalaire extends Component
{

    public FicheSalaire $fiche;

    public function render()
    {
        $parametres_finance = new FinanceSettings;
        $periode = $this->fiche->payement->data['periode']??[];


        debug($this->fiche);
        debug($this->fiche->payement);
        debug($periode);

       
        return view('livewire.finance.fiche-salaire.show-fiche-salaire',['parametres_finance' => $parametres_finance , 'periode'=> $periode])->layout('layouts.printable');
    }
}
