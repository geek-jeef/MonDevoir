<?php

namespace App\Http\Livewire\Academique\Annee;

use Livewire\Component;
use App\Models\AnneeAcademique ;
use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;


class ShowAnneeScolaire extends Component
{
    use Actions;

    public $annee;
    public $stats;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    protected function rules()
    {
        return [
            'annee.nom_annee' => ['required', Rule::unique('annee_academiques', 'nom_annee')->ignore($this->annee->id)],
            'annee.date_debut' => "required|date",
            'annee.date_fin' => "required|date|after:annee.date_debut",
            'annee.ouvert_pour_inscription' => 'required|boolean',
            'annee.directeur_id' => 'required|integer|exists:personnels,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->annee->save()){
            $this->notification()->send([
                'title'       => 'Année Scolaire Enregistré!',
                'description' => "L'Année Scolaire {$this->annee->nom_annee} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "L'Année Scolaire n'a pas été Modifié"
            );
        }
    }

    public function mount(AnneeAcademique $annee){

        $this->menus = collect( array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            ['id' => 2 , 'titre' => 'Cycles' , 'icon' => 'git-merge'  , 'loaded' => false ],
            ['id' => 3 , 'titre' => 'Examens et Resultats' , 'icon' => 'bar-chart'  , 'loaded' => false ],
            //['id' => 4 , 'titre' => 'Finances' , 'icon' => 'dollar-sign' , 'loaded' => false  ],
        )
        );
        $this->currentMenu = $this->menus->first();
        $this->annee = $annee;

        $salles = $this->annee->salles()->where('cycle_academiques.ouvert_cette_annee', true);
        $eleves = $this->annee->eleves()->where('cycle_academiques.ouvert_cette_annee', true);
        $tuteurs = $this->annee->tuteurs()->where('cycle_academiques.ouvert_cette_annee', true);
        $this->stats=[ 
                ["icon" => "monitor" , "valeur" => $salles->count() , "texte" => "Salles de Classe"], 
                ["icon" => "users" , "valeur" => $eleves->count() , "texte" => "Eleves Inscrits"], 
                ["icon" => "link" , "valeur" => $tuteurs->count() , "texte" => "Tuteurs"],
            ] ;
    }

    public function render()
    {
        return view('livewire.academique.annee.show-annee-scolaire');
    }
}
