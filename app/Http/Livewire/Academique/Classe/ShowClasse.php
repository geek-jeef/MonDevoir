<?php

namespace App\Http\Livewire\Academique\Classe;

use Livewire\Component;
use App\Models\Classe;
use App\Models\SystemeEcolage;

use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;


class ShowClasse extends Component
{
    use Actions;
    public $classe;
    public $stats;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    protected function rules()
    {
        return [
            'classe.nom_classe' => 'required|string',
            'classe.nom_court' => 'required|string|max:40',
            'classe.serie' => 'nullable|string|max:40',
            'classe.matiere_au_choix' => 'required|boolean',
            'classe.max_matiere_au_choix' => 'nullable|integer',
            'classe.ouvert_pour_inscription' => 'required|boolean',
            //'classe.cycle_academique_id' => 'required|integer|exists:cycle_academiques,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->classe->save()){
            $this->notification()->send([
                'title'       => 'Classe Enregistré!',
                'description' => "La Classe {$this->classe->nom_classe} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Classe n'a pas été Modifié"
            );
        }
    }


    public $systeme_ecolage_id;
    public function setSystemeEcolage(){

        $this->validate([
            'systeme_ecolage_id' => 'required|exists:systeme_ecolages,id',
        ]);

        $systeme = SystemeEcolage::find($this->systeme_ecolage_id);

        if($systeme->linkToMinervable($this->classe)){
            $this->notification()->send([
                'title'       => 'Systeme de Payement Enregistré!',
                'description' => "Le Systeme {$systeme->titre} a été appliqué à la classe {$this->classe->nom_classe} avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Systeme de Payement n'a pas été Enregistré"
            );
        }


    }


    public function mount(Classe $classe){
        $this->menus = collect( array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            ['id' => 2 , 'titre' => 'Salles' , 'icon' => 'git-merge'  , 'loaded' => false ],
            ['id' => 3 , 'titre' => 'Matieres' , 'icon' => 'edit'  , 'loaded' => false ],
            ['id' => 4 , 'titre' => 'Examens et Resultats' , 'icon' => 'bar-chart'  , 'loaded' => false ],
            ['id' => 5 , 'titre' => 'Finances' , 'icon' => 'dollar-sign' , 'loaded' => false  ] )
        );
        $this->currentMenu = $this->menus->first();

        $this->classe = $classe;

        $salles = $this->classe->salles();
        $eleves = $this->classe->eleves();
        $tuteurs = $this->classe->tuteurs();

        $this->stats=[ 
                ["icon" => "monitor" , "valeur" => $salles->count() , "texte" => "Salles de Classe"], 
                ["icon" => "users" , "valeur" => $eleves->count() , "texte" => "Eleves Inscrits"], 
                ["icon" => "link" , "valeur" => $tuteurs->count() , "texte" => "Tuteurs"],
            ] ;
    }
 

    public function render()
    {
        return view('livewire.academique.classe.show-classe');
    }
}
