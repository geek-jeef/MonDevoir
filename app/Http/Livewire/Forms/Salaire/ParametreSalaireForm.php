<?php

namespace App\Http\Livewire\Forms\Salaire;

use Livewire\Component;
use App\Settings\FinanceSettings;
class ParametreSalaireForm extends Component
{

    
    public $nb_employeur;

    protected function rules()
    {
        return [
            'nb_employeur' => 'required|string',
        ];
    }

    public function mount(){
        $finance_settings =  new FinanceSettings ;
        $this->nb_employeur = $finance_settings->id_employeur ;
    }

    public function render()
    {
        return view('livewire.forms.salaire.parametre-salaire-form');
    }
}
