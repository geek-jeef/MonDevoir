<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Eleve;

use Livewire\Component;

use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Etablissement ;

use App\Models\Salle;
use App\Models\Eleve;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;
use App\Settings\GeneralSettings;
//use Illuminate\Support\Facades\DB;


class ImportEleve extends Component
{
    use Actions;
    use WithFileUploads;


    public $examen;
    public $annee ;
    public $information;
    public $etablissement;
    public $firstRow;




    public $entete = true;
    public $titre = 'Importer des eleves' ;
    public $column = 3;
    public $footer = 0;
    public $paysage = true;

    public $excel_file;




    protected $listeners = [
        'getDataFromSalle' => 'importFromSalle',
        'retirer-eleve-liste' => 'confirmRetraitEleve',
    ];

    public function mount(Examen $examen){
        $this->annee = $this->examen->annee;
    }
    

    /**
     * $table->id();
            $table->string('nom_etablissement');
            $table->string('nom_etablissement_court');
            $table->unsignedInteger('annee_academique_id');
            $table->json('responsable')->nullable();
            $table->json('data')->nullable();

     */

    /**
     * public string $nom_ecole;
    public string $nom_court_ecole;
    public string $programme;
    public string $email;
    public string $telephone1;
    public string $telephone2;
    public string $poste;
    public string $quartier;
    public string $ville;
    public string $pays;

     */

    public function importFromSalle($data){
        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $salle = Salle::find($data['salle_id']);
            $listeEleve = $salle->eleves;
            $collection = collect([]);
            foreach ($listeEleve as $eleve) {
                $collection->push([
                    'nom' => $eleve->nom,
                    'prenoms' => $eleve->prenoms,
                    'genre' => $eleve->genre,
                    'date_de_naissance' => $eleve->naissance,
                    'naissance' => $eleve->date_de_naissance,
                    'lieu_de_naissance' => $eleve->lieu_de_naissance,
                    'salle' => $salle->nom_academique,
                    'data' => [
                        'local_id'=> $eleve->id , 
                        'salle' => $salle->nom_academique ],
                ]);
            }
            $this->information = $collection->sortBy([
                ['nom', 'asc'],
                ['prenoms', 'asc'],
                ['date_de_naissance', 'asc'],
            ])->values()->all();
            $this->firstRow = [
                'nom',
                'prenoms',
                'genre',
                'date_de_naissance',
                'lieu_de_naissance',
                'salle'
            ] ;
            $responsable = $salle->cycle->responsable;
            $parametres_generaux = new  GeneralSettings;

            $this->etablissement = [
                'nom_etablissement' => $parametres_generaux->nom_ecole,
                'nom_etablissement_court'=> $parametres_generaux->nom_court_ecole,
                'annee_academique_id'=> $this->annee->id,
                'responsable' => [
                    'nom' => ($responsable->nom_complet)?? '', 
                    'phone' => ($responsable->phone)?? $parametres_generaux->telephone1,
                    'email'=> $parametres_generaux->email
                ],
                'data' => [
                    'hote' => true, 
                ],
            ] ;
            return ;
        }
        $this->information = collect([]);
        $this->firstRow = null;
        $this->etablissement = null;
        $this->notification()->send([
            'title'       => 'Aucune Salle Sélectionnée!',
            'description' => "Veillez choisir une salle",
            'icon'        => 'error'
        ]);
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
        $collection = collect($this->information);
        $index = $collection->search($data);
        if($index !== false){
            unset($this->information[$index]);
        }
    }


    public function importFromExcel()
    {
        ini_set('memory_limit', '128M');

        $this->validate([
            'excel_file' => 'required|mimes:xlsx,csv,tsv,ods,xls,slk,xml,gnumeric,html|max:4096',
        ]);
        dump($this->excel_file);

        $classeur = \Excel::toCollection(collect([]), $this->excel_file);
        dd($classeur);

        $feuille = $classeur->first();
        $header = $feuille->first();
        $feuille = $feuille->skip(1);
        $eleves = collect([]);
        dump($feuille);

        /*foreach($feuille as $row) {
            if($row->first()){
                $eleves->push($header->combine($row));
            }
        }*/

        dd($eleves);

        /*$base_collection = $base_collection->collapse();
        $this->firstRow = $base_collection->first();
        $base_collection = $base_collection->skip(1);


        $combined = collect([]);

        foreach ($base_collection as $eleve) {
            $combined->push($this->firstRow->combine($eleve));
        }

        $this->eleves = $combined;*/
    }
    

    public function confirmEnregistrerEleve(){
        $this->dialog()->confirm([
            'title'       => 'Enregistrer La Liste?',
            'description' => "enregistrer les eleves et les ajouter à l'examen ?",
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
        $newEtablissement = Etablissement::firstOrNew(
            [
                'nom_etablissement' => $this->etablissement['nom_etablissement'],
                'nom_etablissement_court' => $this->etablissement['nom_etablissement_court'],
                'annee_academique_id' => $this->etablissement['annee_academique_id'],
            ],
            [
                'responsable' => $this->etablissement['responsable'] ?? null,
                'data' => $this->etablissement['data'] ?? null,
            ]
        );

        $newEtablissement->save();

        foreach ($this->information as $eleve) {
            $newRegistre = Registre::firstOrNew(
                [
                    'nom' => $eleve['nom'],
                    'prenoms' => $eleve['prenoms'],
                    'genre' => $eleve['genre'],
                    'examen_id' => $this->examen->id,
                    'etablissement_id' => $newEtablissement->id  ,
                    'annee_academique_id' => $this->annee->id,
                ],
                [
                    'date_de_naissance' => date('Y-m-d', strtotime($eleve['naissance'])) ?? null,
                    'lieu_de_naissance' => $eleve['lieu_de_naissance'] ?? null,
                    'active' => true,
                    'data' => $eleve['data'] ?? null,
                ]
            );
            $newRegistre->save();
        }
        $this->emit('confetti');
        $this->emit('listeEleveExamenBlancChange');
        $this->notification()->send([
            'title'       => 'Candidats Enregistrées!',
            'description' => "La liste des Candidats a été Enregistrée avec succès",
            'icon'        => 'success'
        ]);
    }

    public function render()
    {
        return view('livewire.evaluation.examen-blanc.eleve.import-eleve')->layout('layouts.printable');
    }
}
