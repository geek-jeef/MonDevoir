<?php

namespace App\Http\Livewire\Import\Eleve;

use Livewire\Component;
use App\Models\Salle;
use App\Models\Eleve;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;
use App\Settings\GeneralSettings;
//use Illuminate\Support\Facades\DB;

class ImportParSalle extends Component
{
    use Actions;
    use WithFileUploads;

    public $entete = true;
    public $titre = 'Importer des eleves' ;
    public $column = 3;
    public $footer = 0;
    public $paysage = true;
    public $data = [] ;
    public $salle ;

    public $excel_file;

    public $eleves;
    public $firstRow;

    public $annee ;


    protected $listeners = [
        'update-liste-data' => 'updateListeData',
        'retirer-eleve-liste' => 'confirmRetraitEleve',
    ];

    public function updateListeData($data){
        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $this->salle = Salle::find($data['salle_id']);
        }
    }


    public function confirmRetraitEleve($data){

        $nom = (isset($data['nom'])) ? $data['nom'] : '';
        $prenoms = (isset($data['prenoms'])) ? $data['prenoms'] : '';

        $this->dialog()->confirm([
            'title'       => 'Retirer cet eleve?',
            'description' => "Eleve: {$nom} {$prenoms} ?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Retirer',
                'method' => 'retirerEleve',
                'params' => $data,
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);

    }

    public function retirerEleve($data){
        $index = $this->eleves->search($data);

        if($index !== false){
            unset($this->eleves[$index]);
        }
    }


    public function mount(){
        $this->annee = \Hp::annee();
    }



    public function generate()
    {
        $this->validate([
            'excel_file' => 'file|max:1024', // 1MB Max
        ]);

        $base_collection = \Excel::toCollection(collect([]), $this->excel_file);
        $base_collection = $base_collection->collapse();
        $this->firstRow = $base_collection->first();
        $base_collection = $base_collection->skip(1);


        $combined = collect([]);

        foreach ($base_collection as $eleve) {
            $combined->push($this->firstRow->combine($eleve));
        }
        $this->eleves = $combined;
    }



    public function confirmEnregistrerEleve(){

        $this->dialog()->confirm([
            'title'       => 'Enregistrer La Liste?',
            'description' => "enregistrer les eleves et les ajouter à la salle ?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Enregistrer',
                'method' => 'enregistrerEleve',
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);

    }

    public function enregistrerEleve(){

        $parametres_generaux = new  GeneralSettings;

        foreach($this->eleves as $eleve){

            $marquage = '';

            if($eleve['date_de_naissance'] == null){
                $eleve['date_de_naissance'] = now();
            }

            if($eleve['lieu_de_naissance'] == null){
                $eleve['lieu_de_naissance'] = $parametres_generaux->ville.' '.$parametres_generaux->pays;
            }

            if($eleve['nationalite'] == null){
                $eleve['nationalite'] = 'Togolaise'; // TODO put in para
            }

            if($eleve['adresse'] == null){
                $eleve['adresse'] = $parametres_generaux->quartier.' '.$parametres_generaux->ville;; // TODO put in para
            }

            if(isset($eleve['marquage'])){
                $marquage = (string) $eleve['marquage']?? '' ;
                unset($eleve['marquage']);
            }

            $eleve['date_inscription'] = now();
            
            $nouveau = Eleve::create($eleve);

            ///dd($this->salle->annee->id);
            $inscription = Inscription::updateOrCreate(
                [
                    'eleve_id' => $nouveau->id,
                    'annee_academique_id' => $this->salle->annee->id,
                ],
                [
                    'salle_id' => $this->salle->id,
                ]
            );

            if($marquage){
                if(preg_match('/(BS)/',$marquage)){
                    $inscription->marquerBoursier();
                }
                if(preg_match('/(EE)/',$marquage)){
                    $inscription->marquerEnfantEnseignant();
                }
            }
        }


        $this->notification()->send([
            'title'       => 'Liste Enregistré!',
            'description' => "Liste Enregistrée avec succès",
            'icon'        => 'success'
        ]);

    }

    public function render()
    {
        return view('livewire.import.eleve.import-par-salle')->layout('layouts.printable');
    }
}
