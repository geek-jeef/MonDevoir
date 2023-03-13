<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Resultat\Vue;

use Livewire\Component;
use App\Models\AnneeAcademique;

use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Matiere ;
use App\Models\ExamenBlanc\Etablissement ;
use Illuminate\Support\Arr;
use WireUi\Traits\Actions;

class ListeNote extends Component
{
    use Actions;
    public $examen ;
    public $collection;
    public $filtre_etablissement;
    public $titre = "Liste De Notes" ;
    
    public function mount(Examen $examen, $collection){
        $this->collection = $collection;
    }

    protected $listeners = [
        'ListeEleveExamenBlancLoadData' => 'loadListeData',
        //'deleteEleveFromRegistre' => 'deleteEleveFromRegistre',
    ];


    public function loadListeData(){
        $selection = collect($this->collection->values()->all())->recursive();
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $selection = $selection->where('etablissement.id', $this->filtre_etablissement);
        }
        $matieres = $this->examen->matieres;
        $header = $matieres->map(function ($item) {
            return \Hp::formatNomMatiere($item->nom_matiere_court);
        });

        $info = [ 'data' => $selection->toArray() , 'matieres' => $header->toArray() ];
        $this->dispatchBrowserEvent('ListeEleveExamenBlancLoadData', $info);
    }

    public function scopeEtablissement(){
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $ecole = Etablissement::find($this->filtre_etablissement);
            if($ecole){
                $this->titre = "Liste De Notes - ". $ecole->nom_etablissement_court;
            }
        }else{
            $this->titre = "Liste De Notes ";
        }
        $this->loadListeData();
    }

    public $filtre_column_id = false;//false
    public $filtre_column_nom_prenoms = true;
    public $filtre_column_genre = false;//f
    public $filtre_column_naissance = false;
    public $filtre_column_etablissement = true;//t
    public $filtre_column_salle = false;//t

    public function updatedFiltreColumnId($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'id' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'id' );
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
    public function updatedFiltreColumnEtablissement($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'etablissement' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'etablissement' );
        }
    }
    public function updatedFiltreColumnSalle($newValue){
        if($newValue){
            $this->dispatchBrowserEvent('EleveTabulator-showColumn-Visibility', 'data.salle' );
        }else{
            $this->dispatchBrowserEvent('EleveTabulator-hideColumn-Visibility', 'data.salle' );
        }
    }
    public function toggleColumnVisibility($column){
        $this->dispatchBrowserEvent('EleveTabulator-ToggleColumn-Visibility', $column );
    }


    public function render()
    {
        return view('livewire.evaluation.examen-blanc.resultat.vue.liste-note');
    }
}
