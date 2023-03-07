<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Matiere;

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

class EnregistrementNote extends Component
{
    use Actions;
    use WithFileUploads;
    use WithPagination;

    public $matiere;
    public $examen;
    public $fichier_excel;
    public $titre;

    public $perPage = 20;
    public $filtre_etablissement;
    protected $listeners = [
       'liste-note-change' => '$refresh',
    ];

    protected function rules()
    {
        return [
            'matiere.nom_matiere' => 'required|string',
            'matiere.nom_matiere_court' => 'required|string',
            'matiere.coeficient' => 'required|integer',
        ];
    }

    public function updatedPerPage(){
        $this->resetPage();
    }

    public function scopeEtablissement(){
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $ecole = Etablissement::find($this->filtre_etablissement);
            if($ecole){
                $this->titre = $this->examen->nom_examen.' | '. $this->matiere->nom_matiere .' | '. $ecole->nom_etablissement_court  ;
            }
        }else{
            $this->titre = $this->examen->nom_examen.' | '. $this->matiere->nom_matiere ;
        }
       // $this->emit('liste-note-change');
    }

    public function exportExcel(){

        $enregistrements = $this->examen
            ->candidats();
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $collection = $collection->where('etablissement_id',$this->filtre_etablissement);
        }
            
        $enregistrements = $enregistrements
            ->with(['etablissement' => 
                function ($query){
                    $query->orderBy('nom_etablissement');
                }])
            ->orderBy('data->salle')
            ->orderBy('nom')
            ->orderBy('prenoms')
            ->orderBy('date_de_naissance')
            ->get();

        $source = $enregistrements->map(function($query){
            $collection = collect([]);
            $collection->put('id', $query->id);
            $collection->put('nom', $query->nom);
            $collection->put('prenoms', $query->prenoms );
            $collection->put('genre', $query->genre );
            $collection->put('Note', $this->matiere->note($query->id)->note ?? null );
            $collection->put('data.salle', $query->data['salle']?? null );
            $collection->put('etablissement.nom_etablissement', $query->etablissement['nom_etablissement'] ?? null );
            $collection->put('etablissement.nom_etablissement_court', $query->etablissement['nom_etablissement_court']?? null );
            return $collection;
        });

        $header = collect([]);
            $header->push('id');
            $header->push('nom');
            $header->push('prenoms');
            $header->push('genre');
            $header->push('Note');

            $header->push('data.salle');
            $header->push('etablissement.nom_etablissement');
            $header->push('etablissement.nom_etablissement_court');

        
        $source->prepend($header);

        $styles = [
            1 => ['font' => ['bold' => true]],
            'E'  => [
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                    'rotation' => 90,
                    'startColor' => [
                        'argb' => '33ffff00',
                    ],
                    'endColor' => [
                        'argb' => '77ffff00',
                    ],
                ],
            ],
        ];

        $export = [
            'data' => $source,
            'styles' => $styles,
        ];

        return \Excel::download( new ExcelCollection($export), $this->titre.'.xlsx');
    }

    public function importFromExcel(){

        $this->validate([
            'fichier_excel' => 'required|mimes:xlsx,csv,tsv,ods,xls,slk,xml,gnumeric,html|max:4096',
        ]);

        $classeur = \Excel::toCollection(collect([]), $this->fichier_excel);
        $feuille = $classeur->first();
        $header = $feuille->first();
        $feuille = $feuille->skip(1);

        $collection = collect([]);
        foreach($feuille as $row) {
            if($row->first()){
                $collection->push($header->combine($row));
            }
        }

        //dd($collection);

        $comflict = collect([]);

        foreach ($collection as $row) {

            //check id
            $candidat = Registre::find($row['id']);

            //check name similarity

            if($candidat){
                $data = [ 
                    'notable_id' => $this->matiere->id,
                    'notable_type' => $this->matiere::class,
                    'eleve_id' => $candidat->id,
                    'matiere_id' => $this->matiere->id,
                    'annee_academique_id' => $this->examen->annee_academique_id,
                ] ;
                $note = Note::firstOrCreate($data) ;
                $note->note = (float)$row['Note'];
                $note->save();
            }
            else{
                debug("id : {$row['id']} not found");
            }
        }

        //dd('END');

        /*
        $this->emit('CloseModal','#modal-import-matiere-examen-blanc');
        */
        $this->emit('confetti');
        $this->emit('liste-note-change');
        $this->resetPage();
        $this->notification()->send([
            'title'       => 'Notes Enregistrées!',
            'description' => "La liste de Notes a été Enregistrée avec succès",
            'icon'        => 'success'
        ]);
    }

    public function save(){
        $this->validate();
        if($this->matiere->save()){
            $this->notification()->send([
                'title'       => 'Matiere Enregistré!',
                'description' => "La matiere {$this->matiere->nom_matiere} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Les changements n'ont pas été enregistré"
            );
        }
    }

    public function deleteMatiere(){
        $soumissions = Notation::where('notable_id', $this->matiere->id)
                    ->where('notable_type', $this->matiere::class)
                    ->delete();
        $notes = Note::where('notable_id', $this->matiere->id)
                    ->where('notable_type', $this->matiere::class)
                    ->delete();
        $this->matiere->delete();
        $this->redirectRoute('examen_blanc.show',$this->examen->id);
    }



    public function mount(Matiere $matiere){
        $this->examen = $this->matiere->examen;
        $this->titre = $this->examen->nom_examen.' | '. $this->matiere->nom_matiere ;
    }

    public function render()
    {
        $collection = $this->examen
            ->candidats();
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $collection = $collection->where('etablissement_id',$this->filtre_etablissement);
        }

        $collection = $collection
            ->with(['etablissement' => 
                function ($query){
                    $query->orderBy('nom_etablissement');
                }])
            ->orderBy('data->salle')
            ->orderBy('nom')
            ->orderBy('prenoms')
            ->orderBy('date_de_naissance')
            ->paginate($this->perPage);

        return view('livewire.evaluation.examen-blanc.matiere.enregistrement-note',[
            'candidats' => $collection,
        ]);
    }
}
