<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Vue;

use Livewire\Component;
use App\Models\AnneeAcademique;

use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Etablissement ;

use Illuminate\Support\Arr;
use WireUi\Traits\Actions;

class ListeEleve extends Component
{
    use Actions;

    public $examen ;
    public function mount(Examen $examen){
    }

    protected $listeners = [
        'ListeEleveExamenBlancLoadData' => 'loadData',
        'deleteEleveFromRegistre' => 'deleteEleveFromRegistre',
    ];

    public $filtre_etablissement;
    public $data = [] ;
    public $titre = "Liste D'Eleves" ;


    public function loadData(){
        if($this->examen){
            $listeEleve = Registre::where('examen_id',$this->examen->id);
            if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
                $listeEleve = $listeEleve->where('etablissement_id',$this->filtre_etablissement);
            }
            $listeEleve = $listeEleve->get();
            $listeEleve->loadMissing(['etablissement']);
            $collection = collect([]);

            $listeEleve = $listeEleve->sortBy([
                ['etablissement.nom_etablissement', 'asc'],
                ['data.salle', 'asc'],
                ['nom', 'asc'],
                ['prenoms', 'asc'],
                ['date_de_naissance', 'asc'],
            ])->values()->all();

            foreach ($listeEleve as $eleve) {
                $row = collect(Arr::dot($eleve->toArray()));

                $row = $row->only([
                    "id",
                    //"num_table",
                    "nom",
                    "prenoms",
                    "genre",
                    "date_de_naissance",
                    "lieu_de_naissance",
                    "data.salle",
                    "data.local_id",
                    "active",
                    //"etablissement.id",
                    "etablissement.nom_etablissement",
                    "etablissement.nom_etablissement_court",
                    //"etablissement.responsable.nom",
                    //"etablissement.responsable.email",
                    //"etablissement.responsable.phone",
                    "etablissement.data.hote",
                    //"annee.id",
                    //"annee.nom_annee",
                    //"annee.date_debut",
                    //"annee.date_fin",
                    //"annee.ouvert_pour_inscription",
                    //"annee.active",
                ]);
                $collection->push($row->undot());
            }

            $info = [ 'data' => $collection->toArray()];
            $this->dispatchBrowserEvent('ListeEleveExamenBlancLoadData', $info);
        }
    }

    public function scopeEtablissement(){
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $ecole = Etablissement::find($this->filtre_etablissement);
            if($ecole){
                $this->titre = "Liste D'Eleves - ". $ecole->nom_etablissement_court;
            }
        }else{
            $this->titre = "Liste D'Eleves ";
        }
        $this->loadData();
    }


    public $filtre_column_id = false;//false
    public $filtre_column_nom_prenoms = true;
    public $filtre_column_genre = false;//f
    public $filtre_column_naissance = true;
    public $filtre_column_etablissement = true;//t
    public $filtre_column_salle = true;//t

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
    public function deleteEleveFromRegistre($id)
    {
        $ban = Registre::find($id);
        if($ban){
            $name = $ban->nom." ".$ban->prenoms ;
            if($ban->delete()){
                $this->notification()->send([
                    'title'       => 'Eleve retiré!',
                    'description' => "{$name} a été retiré de l'examen - {$this->examen->nom_examen}",
                    'icon'        => 'success'
                ]);
                $this->loadData();
            }
        }
    }


    public function render()
    {
        return view('livewire.evaluation.examen-blanc.vue.liste-eleve');
    }
}
