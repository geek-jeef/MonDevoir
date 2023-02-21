<?php

namespace App\Http\Livewire\Academique\Cycle;

use Livewire\Component;
use App\Models\CycleAcademique;

use App\Models\SystemeEcolage;



use Illuminate\Validation\Rule;

use WireUi\Traits\Actions;

class ShowCycleScolaire extends Component
{
    use Actions ;
    public $annee;
    public $cycle;
    public $stats;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    protected function rules()
    {
        return [
            'cycle.nom_cycle' => 'required',
            'cycle.ouvert_cette_annee' => 'required|boolean',
            'cycle.directeur_id' => 'required|exists:personnels,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->cycle->save()){
            $this->notification()->send([
                'title'       => 'Cycle Enregistré!',
                'description' => "Le Cycle {$this->cycle->nom_cycle} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Cycle n'a pas été Modifié"
            );
        }
    }



    public $systeme_ecolage_id;


    public function setSystemeEcolage(){

        $this->validate([
            'systeme_ecolage_id' => 'required|exists:systeme_ecolages,id',
        ]);

        $systeme = SystemeEcolage::find($this->systeme_ecolage_id);

        if($systeme->linkToMinervable($this->cycle)){
            $this->notification()->send([
                'title'       => 'Systeme de Payement Enregistré!',
                'description' => "Le Systeme {$systeme->titre} a été appliqué au cycle {$this->cycle->nom_cycle} avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Systeme de Payement n'a pas été Enregistré"
            );
        }


    }


    public function mount(CycleAcademique $cycle){
        $this->menus = collect( array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            ['id' => 2 , 'titre' => 'Classes' , 'icon' => 'git-merge'  , 'loaded' => false ],
            ['id' => 3 , 'titre' => 'Examens et Resultats' , 'icon' => 'bar-chart'  , 'loaded' => false ],
            ['id' => 4 , 'titre' => 'Finances' , 'icon' => 'dollar-sign' , 'loaded' => false  ] )
        );
        $this->currentMenu = $this->menus->first();

        $this->cycle = $cycle;


        $this->annee = $cycle->annee;


        $salles = $this->cycle->salles();
        $eleves = $this->cycle->eleves();
        $tuteurs = $this->cycle->tuteurs();
        $this->stats=[ 
                ["icon" => "monitor" , "valeur" => $salles->count() , "texte" => "Salles de Classe"], 
                ["icon" => "users" , "valeur" => $eleves->count() , "texte" => "Eleves Inscrits"], 
                ["icon" => "link" , "valeur" => $tuteurs->count() , "texte" => "Tuteurs"],
            ] ;
    }
 
    public function render()
    {
        return view('livewire.academique.cycle.show-cycle-scolaire');
    }
}
