<?php

namespace App\Http\Livewire\Evaluation\Resultat\Vue;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;

use App\Models\Examen;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\ResultatMatiere ;
use App\Models\ResultatExamen ;

use App\Models\Notation;
use App\Models\Note;

use App\Models\Devoir;
use App\Models\Composition;

class ListeResultatAll extends Component
{
    use Actions;

    public $examen;
    public $classe;
    public $resultat_exist;
    public $selected_salle;


    protected $listeners = ['refreshment' => '$refresh'];

    /*  
       {{--
            **$table->unsignedInteger('eleve_id');
            **$table->unsignedInteger('classe_id');
            **$table->unsignedInteger('salle_id');
            **$table->unsignedInteger('examen_id');
 
            **$table->unsignedFloat('moyenne');
            **$table->unsignedInteger('somme_coeficient');

            **$table->unsignedFloat('points');


            $table->unsignedFloat('max_moyenne_classe');
            $table->unsignedFloat('min_moyenne_classe');
            $table->unsignedFloat('avg_moyenne_classe');

            $table->unsignedFloat('max_moyenne_salle');
            $table->unsignedFloat('min_moyenne_salle');
            $table->unsignedFloat('avg_moyenne_salle');


            $table->string('rang_classe');
            $table->string('rang_salle');

            **$table->string('observations');

            $table->unsignedInteger('annee_academique_id');


        --}}
    */


    /***protected $listeners = [
        'modifierListePeriode' => 'modifierListePeriode' ,
        'modifierListeExamen' => 'modifierListeExamen' ,
    ];**/          

    public function mount(Examen $examen, Classe $classe){
        $this->examen = $examen;
        $this->classe = $classe;

        $this->resultat_exist = ResultatExamen::resultatExist($this->examen->id, $this->classe->id) ;
    }

    public function calculResultatClasse(){

        debug('calculResultatClasse');

        $info = [
                'examen_id' => $this->examen->id,
                'classe_id' => $this->classe->id,
                'annee_academique_id' => $this->examen->annee->id,
            ];

        $matieres = Notation::select('matiere_id')
                    ->distinct()
                    ->where('examen_id',$this->examen->id)
                    ->where('classe_id',$this->classe->id)
                    ->get()
                    ->map(function ($notation) {
                        $matiere = Matiere::find($notation->matiere_id);
                        return $matiere;
                    });
        debug('list matieres');
        debug($matieres);


        foreach($matieres as $matiere){
            foreach($this->classe->salles as $salle){
                $notation = Notation::select('notable_id','notable_type')
                    ->where('examen_id',$this->examen->id)
                    ->where('matiere_id',$matiere->id)
                    ->where('classe_id',$this->classe->id)
                    ->where('salle_id',$salle->id)
                    ->distinct()
                    ->get();
                $nb_devoir = $notation->where('notable_type',Devoir::class)->count();

                if(!$nb_devoir){
                    $this->dialog()->error(
                        $title = 'Erreur !!!',
                        $description = "La salle {$salle->nom_academique} n'a Aucune Note de Devoir Pour la matiere : {$matiere->nom_matiere} "
                    );
                    return ;
                }
                $nb_compo = $notation->where('notable_type',Composition::class)->count();

                if(!$nb_compo){
                    $this->dialog()->error(
                        $title = 'Erreur !!!',
                        $description = "La salle {$salle->nom_academique} n'a Aucune Note De Composition Pour la Matiere : {$matiere->nom_matiere} "
                    );
                    return ;
                }
            }
        }
        

        debug('Verification OK');

        ResultatExamen::calculResultatClasse($this->examen, $this->classe);

        $this->notification()->success(
            $title = "{$this->examen->nom_examen} /{$this->classe->nom_classe}",
            $description = 'Les Données ont été mises à jour!'
        );

        $this->resultat_exist = ResultatExamen::resultatExist($this->examen->id, $this->classe->id) ;

        $this->emit('confetti');
        $this->emitSelf('refreshment');
        debug('fin calculResultatClasse');

    }

    public function render()
    {
        $info = [  'classe_id' => $this->classe->id, 'examen_id' => $this->examen->id, 'annee_academique_id' => $this->examen->annee->id,] ;

        $data = ResultatExamen::where($info)->orderByDesc('moyenne');

        $aggregate_data = $data->get() ;

        if($this->selected_salle){
            $data = $data->where('salle_id',$this->selected_salle['id']);
        }

        $data = $data->get();

        return view('livewire.evaluation.resultat.vue.liste-resultat-all', ['resultats' => $data, 'aggregate_data' => $aggregate_data]);
    }
}
