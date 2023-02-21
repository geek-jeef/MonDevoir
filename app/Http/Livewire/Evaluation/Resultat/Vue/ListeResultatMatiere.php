<?php

namespace App\Http\Livewire\Evaluation\Resultat\Vue;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;

use App\Models\Examen;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\ResultatMatiere ;
use App\Models\Notation;
use App\Models\Note;

use App\Models\Devoir;
use App\Models\Composition;

class ListeResultatMatiere extends Component
{
    use Actions;
    use WithPagination;
    public $per_page = 1000 ;

    public function updatedPerPage(){
        $this->resetPage();
    }

    public $examen;
    public $classe;
    public $matiere;
    public $resulat_exist;
    public $selected_salle;

    public $nb_devoir_classe;


    protected $listeners = [
        'modifierListePeriode' => 'modifierListePeriode' ,
        'modifierListeExamen' => 'modifierListeExamen' ,
    ];            

    public function mount(Examen $examen, Classe $classe, Matiere $matiere){
        $this->examen = $examen;
        $this->classe = $classe;
        $this->matiere = $matiere;
        $this->resulat_exist = ResultatMatiere::resultatExist($this->examen->id, $this->classe->id,$this->matiere->id) ;

    }

    public function calculResultat(){
        // verifier composition count

        $notation = Notation::select('notable_id','notable_type')
                            ->where('examen_id',$this->examen->id)
                            ->where('matiere_id',$this->matiere->id)
                            ->distinct()
                            ->get();
                            //->count() ;

        //dump($notation);
        
        $nb_devoir = $notation->where('notable_type',Devoir::class)->count();

        if(!$nb_devoir){
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Aucune Note de Devoir Pour la matiere : {$this->matiere->nom_matiere} "
            );
            return ;
        }

        $nb_compo = $notation->where('notable_type',Composition::class)->count();

        if(!$nb_compo){
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Aucune Note De Composition Pour la Matiere : {$this->matiere->nom_matiere} "
            );
            return ;
        }

        ResultatMatiere::calculResultatMatiere($this->examen, $this->classe,$this->matiere);
        $this->notification()->success(
            $title = "{$this->examen->nom_examen} /{$this->matiere->nom_matiere}",
            $description = 'Les Données ont été mises à jour!'
        );

        $this->resulat_exist = ResultatMatiere::resultatExist($this->examen->id, $this->classe->id,$this->matiere->id) ;

    }

    public function render()
    {
        $info = [  'matiere_id' => $this->matiere->id,
                        'classe_id' => $this->classe->id,
                        'examen_id' => $this->examen->id,
                        'annee_academique_id' => $this->examen->annee->id,
                     ] ;
        $data = ResultatMatiere::where($info)->orderByDesc('moyenne');

        if($this->selected_salle){
            $data = $data->where('salle_id',$this->selected_salle['id']);



            $dev = Notation::select('notable_id')
                            ->where('notable_type',Devoir::class)
                            ->where('examen_id',$this->examen->id)
                            ->where('matiere_id',$this->matiere->id)
                            ->where('salle_id',$this->selected_salle['id'])
                            ->distinct()
                            ->get() ;    
            $this->nb_devoir_classe = $dev->count();

        }

        $data = $data->paginate($this->per_page);
        return view('livewire.evaluation.resultat.vue.liste-resultat-matiere',['resultats' => $data]);
    }
}
