<?php

namespace App\Http\Livewire\Academique\Section;

use Livewire\Component;
use App\Models\Salle;
use App\Models\SystemeEcolage;

use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;


class ShowSalle extends Component
{
    use Actions;
    public $salle;
    public $stats;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    protected function rules()
    {
        return [
            'salle.nom_salle' => 'required|string',
            'salle.info_salle' => 'required|string',
            'salle.capacite' => 'nullable|integer',
            'salle.classe_id' => 'required|integer|exists:classes,id',
            'salle.enseignant_id' => 'nullable|integer|exists:personnels,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->salle->save()){
            $this->notification()->send([
                'title'       => 'Salle Enregistré!',
                'description' => "La Salle {$this->salle->nom_classe} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Salle n'a pas été Modifié"
            );
        }
    }

    public $systeme_ecolage_id;


    public function setSystemeEcolage(){

        $this->validate([
            'systeme_ecolage_id' => 'required|exists:systeme_ecolages,id',
        ]);

        $systeme = SystemeEcolage::find($this->systeme_ecolage_id);

        if($systeme->linkToMinervable($this->salle)){
            $this->notification()->send([
                'title'       => 'Systeme de Payement Enregistré!',
                'description' => "Le Systeme {$systeme->titre} a été appliqué à la salle {$this->salle->nom_salle} avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Systeme de Payement n'a pas été Enregistré"
            );
        }


    }



    public $titre ;


    public function mount(Salle $salle){
        $this->menus = collect( array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            ['id' => 2 , 'titre' => 'Eleves' , 'icon' => 'users'  , 'loaded' => false ],
            ['id' => 3 , 'titre' => 'Devoirs' , 'icon' => 'bar-chart'  , 'loaded' => false ],
            ['id' => 4 , 'titre' => 'Resultats' , 'icon' => 'bar-chart' , 'loaded' => false  ], 

            ['id' => 5 , 'titre' => 'Enseignants' , 'icon' => 'user' , 'loaded' => false  ], 
            ['id' => 6 , 'titre' => 'Finances' , 'icon' => 'dollar-sign' , 'loaded' => false  ], 
        )
        );
        $this->currentMenu = $this->menus->first();
        $this->salle = $salle;
        $eleves = $this->salle->eleves();
        $tuteurs = $this->salle->tuteurs();

        $this->stats=[ 
                ["icon" => "users" , "valeur" => $eleves->count() , "texte" => "Eleves Inscrits"], 
                ["icon" => "link" , "valeur" => $tuteurs->count() , "texte" => "Tuteurs"],
            ] ;

        $this->titre = 'Liste des Eleves - '. $this->salle->nom_academique;
    }



    public $filtre_column_id = false;
    public $filtre_column_image = true;
    public $filtre_column_nom_prenoms = true;
    public $filtre_column_genre = false;
    public $filtre_column_naissance = true;
    public $filtre_column_nationalite = false;
    public $filtre_column_adresse = false;
    public $filtre_column_description = true;

    public function updatedFiltreColumnId($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'id' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'id' );
        }
    }
    public function updatedFiltreColumnImage($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'image' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'image' );
        }
    }
    public function updatedFiltreColumnNomPrenoms($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'nom_complet' );
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'nom' );
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'prenoms' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'nom_complet' );
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'nom' );
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'prenoms' );
        }
    }
    public function updatedFiltreColumnGenre($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'genre' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'genre' );
        }
    }
    public function updatedFiltreColumnNaissance($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'info_naissance' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'info_naissance' );
        }
    }
    public function updatedFiltreColumnNationalite($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'nationalite' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'nationalite' );
        }
    }
    public function updatedFiltreColumnAdresse($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'adresse' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'adresse' );
        }
    }
    public function updatedFiltreColumnDescription($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'description' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'description' );
        }
    }
    public function toggleColumnVisibility($column)
    {
        $this->dispatchBrowserEvent('EleveTabulator-ToggleColumn-Visibility', $column );
    }

 

    public function render()
    {
        return view('livewire.academique.section.show-salle');
    }
}
