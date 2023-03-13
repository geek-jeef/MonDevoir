<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Resultat;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Matiere ;
use App\Models\ExamenBlanc\Note ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Etablissement ;
use App\Models\ExamenBlanc\Notation ;

use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Exports\Collection as ExcelCollection ;

use Illuminate\Support\Arr;


class Resultats extends Component
{
    public $examen;
    public $collection;

    public function mount(Examen $examen){
        $this->collection = $this->listeNoteCollection();
        $this->collection = $this->calculRang();
    }

    protected $listeners = [
        //'ListeEleveExamenBlancLoadData' => 'loadData',
    ];

    public $filtre_etablissement;

    public function listeNoteCollection(){
        if($this->examen){
            $HeaderMatieres = $this->examen->matieres;
            $somme_coeficient = $HeaderMatieres->sum('coeficient');
            $matieres_keys = $HeaderMatieres->modelKeys();
            $listeEleve = Registre::where('examen_id',$this->examen->id);
            $listeEleve = $listeEleve->get();
            $listeEleve->loadMissing(['etablissement']);
            $listeEleve->loadMissing(['notes']);
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
                    "nom",
                    "prenoms",
                    "genre",
                    "date_de_naissance",
                    "lieu_de_naissance",
                    "data.salle",
                    "data.local_id",
                    "active",
                    "etablissement_id",
                    "etablissement.id",
                    "etablissement.nom_etablissement",
                    "etablissement.nom_etablissement_court",
                    "etablissement.data.hote",
                ]);
                $matieres = collect([]);
                $cumul_points = 0;
                foreach($eleve->notes as $note){
                    if (in_array($note->matiere_id, $matieres_keys)){
                        $index = \Hp::formatNomMatiere($note->matiere->nom_matiere_court);
                        $points =  (int) $note->matiere->coeficient * (float) $note->note ;
                        $matieres->push(array(
                            'note' => $note->note,
                            'nom_matiere' => $index,
                            'id' => $note->matiere_id,
                            'coeficient' => $note->matiere->coeficient,
                            'points' => $points,
                        ));
                        $cumul_points += $points;
                    }
                }
                $row['matieres'] = $matieres;
                $row['moyenne'] = array( 'valeur' => ($somme_coeficient)? (float)$cumul_points/(float)$somme_coeficient : 0.0 );

                $collection->push($row->undot()) ;
            }
            return $collection ;
        }
        return collect([]);
    }

    /*public function scopeEtablissement(){
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $ecole = Etablissement::find($this->filtre_etablissement);
            if($ecole){
                $this->titre = "Liste De Notes - ". $ecole->nom_etablissement_court;
            }
        }else{
            $this->titre = "Liste De Notes ";
        }
        $this->loadData();
    }*/

    public function calculRang()
    {
        $selection = collect($this->collection->values()->all())->recursive();
        $selection = $selection->sortByDesc('moyenne.valeur');
        
        // rang general
        $rank = 1;
        $previous = null;
        $moyenne_occurence_array = $selection->countBy(function ($item) {
            return (string) $item['moyenne']['valeur'];
        });
        $moyenne_occurence_array = $moyenne_occurence_array->all() ;
        foreach ($selection as $eleve) {
            $is_ex = ( $moyenne_occurence_array[(string)$eleve['moyenne']['valeur']] >= 2 ) ? true : false ;
            $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );
            if($previous){
                $eleve['moyenne']['rang'] = ($eleve['moyenne']['valeur'] == $previous['moyenne']['valeur'] )?
                                                  $previous['moyenne']['rang'] : $rank_string ;
            }else{
                $eleve['moyenne']['rang'] = $rank_string;
            }
            $previous = $eleve;
            $rank++;
        }
        // rang etablissement
        $etablissements = $selection->unique('etablissement_id');
        $etablissements = $etablissements->map(function ($item) {
            return (string) $item['etablissement_id'];
        });
        $etablissements = $etablissements->values()->all();
        foreach($etablissements as $etablissement_id){
            $rank = 1;
            $previous = null;
            $moyenne_occurence_array = $selection->countBy(function ($item) use ($etablissement_id) {
                if($item['etablissement_id'] == $etablissement_id ){
                    return (string) $item['moyenne']['valeur'];
                }
                return (string) -1;
            });
            $moyenne_occurence_array = $moyenne_occurence_array->all() ;
            foreach ($selection as $eleve) {
                if($eleve['etablissement_id'] == $etablissement_id ){
                    $is_ex = ( $moyenne_occurence_array[(string)$eleve['moyenne']['valeur']] >= 2 ) ? true : false ;
                    $rank_string = $rank.( ( $rank == 1 )? 'er' : 'eme').( ($is_ex)? ' ex' : '' );
                    if($previous){
                        $eleve['moyenne']['rang_etablissement'] = ($eleve['moyenne']['valeur'] == $previous['moyenne']['valeur'] )?
                                                        $previous['moyenne']['rang_etablissement'] : $rank_string ;
                    }else{
                        $eleve['moyenne']['rang_etablissement'] = $rank_string;
                    }
                    $previous = $eleve;
                    $rank++;
                }
            }
        }

        return $selection ;

        
    }


    public function render()
    {
        return view('livewire.evaluation.examen-blanc.resultat.resultats');
    }
}
