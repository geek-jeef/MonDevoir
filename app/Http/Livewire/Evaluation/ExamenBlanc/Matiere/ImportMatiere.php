<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Matiere;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Matiere ;


use App\Models\Classe ;
use App\Models\Matiere as ClasseMatiere ;


use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;
//use Livewire\WithFileUploads;


class ImportMatiere extends Component
{

    use Actions;
    use WithMedia;
    //use WithFileUploads;

    public $examen;

    public $mediaComponentNames = ['media'];
    public $media;
    public $data;

    protected $listeners = [
        'create-examen-blanc-matiere-from-classe' => 'createFromClasse',
    ];

    protected function rules()
    {
        return [
            'media' => '"mimes:xlsx,csv,tsv,ods,xls,slk,xml,gnumeric,html|max:4096"',
        ];
    }



    public function createFromExcel(){

        //$base_collection = \Excel::toCollection(collect([]), $this->media);

        //dump($base_collection);
        
        /*$base_collection = $base_collection->collapse();
        $this->firstRow = $base_collection->first();
        $base_collection = $base_collection->skip(1);

        $combined = collect([]);

        foreach ($base_collection as $eleve) {
            $combined->push($this->firstRow->combine($eleve));
        }
        $this->eleves = $combined;*/



        debug($this->media);
        //dd('END');
        //$this->clearMedia();
    }


    public function downloadModele(){
        return response()->download(public_path('dist/fichier/Liste matieres - Examen Blanc.xlsx'));
    }


    public function createFromClasse($data){
        $this->data = $data;
        $this->validate([
            'data.classe_id' => 'required|integer|exists:classes,id',
        ]);
        $classe = Classe::find($data['classe_id']);
        $matiereClasse = $classe->matieres;
        foreach ($matiereClasse as $matiere) {
            $newMatiere = Matiere::firstOrNew(
                [
                    'nom_matiere' => $matiere->nom_matiere,
                    'coeficient' => $matiere->coeficient,
                    'examen_id' => $this->examen->id,
                ],
                [
                    'nom_matiere_court' => $matiere->nom_matiere_court,
                    'code' => $matiere->code,
                    'type' => $matiere->type,
                    'active' => true,
                ]
            );
            $newMatiere->save();
        }
        $this->emit('CloseModal','#modal-import-matiere-examen-blanc');
        $this->emit('confetti');
        $this->emit('ExamenBlancShowRefresh');
        $this->notification()->send([
            'title'       => 'Matieres Enregistrées!',
            'description' => "La liste des Matieres a été Enregistrée avec succès",
            'icon'        => 'success'
        ]);

    }



    public function mount(Examen $examen){
        
    }


    public function render()
    {
        return view('livewire.evaluation.examen-blanc.matiere.import-matiere');
    }
}
