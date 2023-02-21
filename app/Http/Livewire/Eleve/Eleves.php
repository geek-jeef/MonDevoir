<?php

namespace App\Http\Livewire\Eleve;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Eleve;

use Illuminate\Support\Arr;

class Eleves extends Component
{

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
    public function toggleColumnVisibility($column){

        $this->dispatchBrowserEvent('EleveTabulator-ToggleColumn-Visibility', $column );
    }


    public $recherche;
    public function performRecherche()
    {
        $this->dispatchBrowserEvent('EleveTabulator-Recherche-Change', $this->recherche );
    }

    public $filtre_type;
    public $data = [] ;
    public $titre = "Liste D'Eleves" ;


    protected $listeners = ['changeEleveTableSetting'];


    public function scopeEleve(){
        //<x-select.option label="Inscrit" value="Inscrit" description="Eleves inscrits cette année Uniquement" />
        //<x-select.option label="Non-Inscrit" value="Non-Inscrit" description="Anciens Eleves" />
        //<x-select.option label="Tous" value="Tous" description="Tous les Elèves enregistrés" />

        if($this->filtre_type == 'Tous'){
            $eleves = datatables(Eleve::orderByDesc('created_at')->get())->toArray();
            $this->dispatchBrowserEvent('EleveTabulator-Data-Change-Array', $eleves );

            $this->titre = "Liste Des Eleves Enregistrés";


        }elseif($this->filtre_type == 'Non-Inscrit'){
            $annee = \Hp::annee();
            $eleves_inscrit = $annee->eleves()->get()->pluck('id');
            $eleves_non_inscrit =  Eleve::whereNotIn('id', $eleves_inscrit)->orderByDesc('created_at')->get();
            $eleves = datatables($eleves_non_inscrit)->toArray();
            $this->dispatchBrowserEvent('EleveTabulator-Data-Change-Array', $eleves );

            $this->titre = "Liste Des Eleves Non-Inscrits";
        }elseif($this->filtre_type == 'Supprimé'){
            $eleves = datatables(Eleve::onlyTrashed()->orderByDesc('deleted_at')->get())->toArray();
            $this->dispatchBrowserEvent('EleveTabulator-Data-Change-Array', $eleves );
            $this->titre = "Liste Des Eleves Supprimés";
        }else{
            $cycle  = $this->data['cycle_id']  ?? null;
            $classe = $this->data['classe_id'] ?? null ;
            $salle  = $this->data['salle_id']  ?? null;

            $academique = null;
            if($salle){
                $academique = Salle::find($salle);
            }elseif($classe){
                $academique = Classe::find($salle);
            }elseif($cycle){
                $academique = CycleAcademique::find($salle);
            }else{
                $this->titre = "Liste Des Eleves" ;
            }

            if($academique){
                $this->titre = "Liste Des Eleves - ".$academique->nom_academique;
            }

            $this->dispatchBrowserEvent('EleveTabulator-Data-Change', route('data.eleves', array('cycle' => $cycle , 'classe' => $classe , 'salle' => $salle )));
        }

    }


    public function changeEleveTableSetting($data)
    {
        $this->data = $data;
        $this->scopeEleve() ;
    }

    public function render()
    {
        return view('livewire.eleve.eleves');
    }
}
