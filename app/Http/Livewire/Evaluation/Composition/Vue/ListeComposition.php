<?php

namespace App\Http\Livewire\Evaluation\Composition\Vue;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Composition;
use App\Models\CycleAcademique;

use App\Models\Classe;
//use App\Models\Salle;
use App\Models\Matiere;

class ListeComposition extends Component
{
    use WithPagination;
    public $per_page = 20 ;

    public function updatedPerPage(){
        $this->resetPage();
    }

    /*
        $table->string('nom_composition',100);
        $table->unsignedInteger('ponderation');
        $table->unsignedInteger('matiere_id');

        $table->unsignedInteger('classe_id');
        $table->unsignedInteger('annee_academique_id');
        $table->json('data')->nullable();
        $table->timestamps();
    */

    public $annee ;

    public $cycles;
    public $selected_cycle = false ;

    public $classes;
    public $selected_classe = false ;

    /*public $salles;
    public $selected_salle = false ;*/

    public $matieres;
    public $selected_matiere = false ;

    public function mount(){
        $this->annee = \Hp::annee();
        $this->cycles = $this->annee->cycles()->where('cycle_academiques.ouvert_cette_annee',true)->get();
    }

    public function modifierSelectedCycle($value){
        $this->selected_cycle = $value ;
        $this->selected_classe = null ;
        //$this->selected_salle = null ;
        $this->selected_matiere = null ;
        $this->resetPage();
    }

    public function modifierSelectedClasse($value){
        $this->selected_classe = $value ;
        //$this->selected_salle = null ;
        $this->selected_matiere = null ;
        $this->resetPage();
    }

    public function render()
    {   
        $data = Composition::where('annee_academique_id',$this->annee->id)->orderByDesc('created_at') ;
        if( $this->selected_matiere /*|| $this->selected_salle*/ ){
            if($this->selected_matiere){
                $data = $data->where('matiere_id',$this->selected_matiere['id']);
            }
            /*if($this->selected_salle){
                $data = $data->where('salle_id',$this->selected_salle['id']);
            }*/
        }elseif($this->selected_classe){
            $data = $data->where('classe_id',$this->selected_classe['id']);
            //$this->salles = Salle::where('classe_id',$this->selected_classe['id'])->get();
            $this->matieres = Matiere::where('classe_id',$this->selected_classe['id'])->get();
        }elseif($this->selected_cycle){
            $this->classes = Classe::where('cycle_academique_id',$this->selected_cycle['id'])->get();
            $data = $data->whereIn('classe_id',$this->classes->modelKeys());
        }
        $data = $data->paginate($this->per_page) ;
        return view('livewire.evaluation.composition.vue.liste-composition', ['compositions' => $data]);
    }
}
