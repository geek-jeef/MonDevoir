<?php

namespace App\Http\Livewire\Forms\Cours;

use Livewire\Component;

use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Salle;
use App\Models\Cours;
use App\Rules\TempsCoursDisponibleRule ;
use WireUi\Traits\Actions;
use Carbon\Carbon;

class AddCoursForm extends Component
{
    use Actions;

    public $salle ;
    public $classe ;
    public $cycle ;

    public $salle_id ;
    public $classe_id ;
    public $cycle_id ;



    public $liste_matiere ;
    public $cours ;
    public $info;
    public $annee_academique_id ;
    public $pickerId;

    protected $listeners = [
        'update-salle-for-cours-add' => 'setSalleParDefault',
        'nouveauCours' => 'nouveauCours',
        'ancienCours' => 'ancienCours',
        'refreshment' => '$refresh',
    ];

    public function setSalleParDefault($data)
    {
        if(!$this->cours){
            $this->cours = new Cours;
        }

        $this->salle = Salle::find($data['salle_id']) ;
        $this->cours->salle_id =   $this->salle->id ;
        $this->liste_matiere = $this->salle->matieres()->get();
        $this->annee_academique_id = $this->salle->annee()->first()->id;
        $this->cours->annee_academique_id =   $this->annee_academique_id ;
    }


    public function nouveauCours($record){
        debug($record);
        $this->info = [];
        $this->info['heure_debut'] =  $record['debut'];
        $this->info['heure_fin'] = $record['fin'];
        $this->info['jour'] = $record['jour'];

        if($record['salle']){
            $this->info['salle_id'] = $record['salle'] ;

            $this->salle = Salle::find($record['salle']) ;
            $this->salle_id = $record['salle'] ;


            $this->liste_matiere = $this->salle->matieres()->get();
            $this->annee_academique_id = $this->salle->annee->id;
            $this->info['annee_academique_id'] = $this->annee_academique_id ;
        }elseif($record['classe']){

            $this->salle = null ;
            $this->salle_id = null ;

            $this->classe = Classe::find($record['classe']);
            $this->classe_id = $this->classe->id ;

            $this->liste_matiere = $this->classe->matieres()->get();
            $this->annee_academique_id = $this->classe->annee->id;
            $this->info['annee_academique_id'] = $this->annee_academique_id ;


        }elseif($record['cycle']){

            $this->salle = null ;
            $this->salle_id = null ;

            $this->classe = null ;
            $this->classe_id = null ;

            $this->cycle = CycleAcademique::find($record['cycle']);
            $this->cycle_id = $this->cycle->id ;


            $this->liste_matiere = [];
            $this->annee_academique_id = $this->cycle->annee->id;
            $this->info['annee_academique_id'] = $this->annee_academique_id ;
        }
        else{
            $this->salle = null ;
            $this->classe = null ;
            $this->cycle = null ;
            $this->salle_id = null ;
            $this->classe_id = null ;
            $this->cycle_id = null ;
            $this->liste_matiere = [];
            $this->annee_academique_id = null;
        }

        $this->cours = new Cours($this->info);
        $this->pickerId = uniqid('picker-') ;
        $this->emitSelf('refreshment');

        $this->emit('ShowModal','#formulaire-ajout-cours');



        

    }



    public function ancienCours($record){

        $this->classe = null ;
        $this->cycle = null ;
        $this->classe_id = null ;
        $this->cycle_id = null ;
        debug($record);

        $this->cours = Cours::find($record['id']);


        if(isset($record['jour'])){
            $this->cours->jour = $record['jour'] ;
        }

        if(isset($record['debut']) ){

            $this->cours->heure_debut = ($record['debut'] != null ) ? $record['debut'] : null ;
        }

        if(isset($record['fin']) && ($record['fin'] != null ) ){
            $this->cours->heure_fin = ($record['fin'] != null ) ? $record['fin'] : null ;
        }


        debug($this->cours);

        $this->salle = $this->cours->salle ;
        $this->salle_id = $this->salle->id ;
        $this->liste_matiere = $this->salle->matieres()->get();
        $this->annee_academique_id = $this->salle->annee->id;
        $this->pickerId = uniqid('picker-') ;
        //clean error
        $this->emitSelf('refreshment');

        $this->emit('ShowModal','#formulaire-ajout-cours');

    }




    /*{{--
            $table->integer('jour');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->json('data')->nullable();
            $table->unsignedInteger('salle_id')->nullable();
            $table->unsignedInteger('matiere_id')->nullable();
            $table->unsignedInteger('enseignant_id')->nullable();
            $table->unsignedInteger('annee_academique_id')->nullable();
    --}}*/

    protected function rules()
    {
        return [
            'cours.jour' => 'required|integer|min:1|max:7',
            'cours.heure_debut' => 'required|date_format:H:i',
            'cours.salle_id' => 'required|integer|exists:salles,id',
            'cours.matiere_id' => 'required|integer|exists:matieres,id',
            'cours.enseignant_id' => 'required|integer|exists:personnels,id',
            'cours.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
            'cours.heure_debut' => ['required', function ($attribute, $value, $fail) {
                                        $result = Cours::isTimeAvailable($this->cours->jour, $value, $this->cours->heure_fin, $this->cours->salle_id, $this->cours->enseignant_id, null);
                                        if (!$result) {
                                            $fail("Cette Plage Horaire n'est pas Disponible");
                                        }
                                    }
                                    , 'date_format:H:i'
                                    ],
            'cours.heure_fin' => 'required|date_format:H:i|after:cours.heure_debut',

        ];
    }


    public function mount(){
        ///$this->cours = new Cours;
    }

    public function save(){

        $this->validate();
        debug($this->cours);

        if($this->cours->save()){

            $this->notification()->send([
                'title'       => 'Cours Enregistré!',
                'description' => "Le Cours a été Enregistré avec succès",
                'icon'        => 'success'
            ]);

            $this->cours = new Cours;
            $this->emit('CloseModal','#formulaire-ajout-cours');
            $this->emit('refreshTimetablesView');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Cours n'a pas été enregistré "
            );
        }
    }

    public function render()
    {
        return view('livewire.forms.cours.add-cours-form');
    }
}
