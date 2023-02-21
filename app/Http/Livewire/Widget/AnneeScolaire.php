<?php

namespace App\Http\Livewire\Widget;

use Livewire\Component;
use App\Models\AnneeAcademique;

class AnneeScolaire extends Component
{
    public AnneeAcademique $annee;


    public $new_annee_id;


    protected function rules()
    {
        return [
            'new_annee_id' => 'required|integer|exists:annee_academiques,id',
        ];
    }

    public function changer(){

        $this->validate();

        $new_annee = AnneeAcademique::find($this->new_annee_id); 
        session(['annee_en_cours' => $new_annee , 'nom_annee_en_cours' => $new_annee->nom_annee]);

        return redirect(request()->header('Referer'));

    }
    
    public function render()
    {
        $this->annee = \Hp::annee() ;
        return view('livewire.widget.annee-scolaire');
    }
}
