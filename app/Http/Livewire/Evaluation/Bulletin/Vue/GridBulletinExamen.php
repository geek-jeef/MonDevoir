<?php

namespace App\Http\Livewire\Evaluation\Bulletin\Vue;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;

use WireUi\Traits\Actions;

use App\Models\Examen;
use App\Models\Classe;
use App\Models\Salle;
use App\Models\Eleve;

use App\Models\ResultatExamen;
use App\Models\EnregistrementExamenBulletin;
use App\Models\Bulletin;

class GridBulletinExamen extends Component
{
    use Actions;
    use WithPagination;

    public $recherche = '';
    public $per_page = 20 ;

    public function updatedPerPage(){
        $this->resetPage();
    }

    public $examen;
    public $classe;
    public $selected_salle;
    public $listeClasses;
    public $selection = [] ;

    public $dataExistClasse ;
    public $isUpdateDataClasse ;

    public function mount(Examen $examen , Classe $classe){
        $this->examen = $examen;
        $this->classe = $classe;
        $this->listeClasses = $examen->classes();


        $countResultat = ResultatExamen::resultatExist($this->examen->id, $this->classe->id) ;
        $countBulletin = Bulletin::bulletinExist($this->examen->id, $this->classe->id) ;
        $this->dataExistClasse = ($countResultat * $countBulletin ) ? true : false ;
        $this->isUpdateDataClasse = ($countResultat == $countBulletin ) ? true : false;



    }

    public function toggleBulletinSelection($bulletin){
        if (($key = array_search($bulletin, $this->selection)) !== false){
                unset($this->selection[$key]);
        }else{
            $this->selection[] = $bulletin ;
        }
    }

    public function isSelected($bulletin){
        return (in_array($bulletin, $this->selection));
    }

    public  function printBulletinSelection(){
        redirect()->route('evaluation.bulletin.print',['printBulletinData' =>  [ 'bulletins' => $this->selection] ]);
    }

    public  function printBulletinOne($bulletin){
        redirect()->route('evaluation.bulletin.print',['printBulletinData' =>  [ 'bulletins' => [$bulletin]] ]);
    }



    public  function printBulletinAll(){
        $info = [ 
            'classe_id' => $this->classe->id,
            'examen_id' => $this->examen->id,
            'annee_academique_id' => $this->examen->annee->id,
        ] ;
        $data = ResultatExamen::where($info)->orderByDesc('moyenne');

        if($this->selected_salle){
            $data = $data->where('salle_id',$this->selected_salle['id']);
        }

        $data = $data->get()
                     ->map(function (ResultatExamen $result) {
                        return $result->bulletin;
                    });
        $data = $data->toQuery()->orderBy('encoded_data->moyenne', 'desc');
        $selected = $data->get()->pluck('id')->all();

        redirect()->route('evaluation.bulletin.print',['printBulletinData' =>  [ 'bulletins' => $selected] ]);

    }

    public function MAJ_Bulletin()
    {

        $info = [
            'examen_id' => $this->examen->id,
            'classe_id' => $this->classe->id,
            'annee_academique_id' => $this->examen->annee->id,
        ];

        $salles = $this->classe->salles ;

        foreach($salles as $salle){
            $info_salle = [ 'salle_id' => $salle->id ] ;
            $resultats = ResultatExamen::where(array_merge($info,$info_salle))->get();

            foreach($resultats as $resultat) {
                $info_enregistrement = [
                    'resultat_examen_id' => $resultat->id ,
                    'examen_id' => $this->examen->id ,
                    'periode_id' => $this->examen->periode->id ,
                    'annee_academique_id' => $this->examen->annee->id ,
                ];

                $enregistrement = EnregistrementExamenBulletin::firstOrNew($info_enregistrement);

                if($enregistrement->isDirty()){
                    $ref_no = Bulletin::createBulletinRefNo($resultat);
                    $encoded_data = [
                        'ref_no' => $ref_no ,
                        'Eleve' => $resultat->eleve->nom_complet ,
                        'Periode' => $this->examen->periode->nom_periode ." ".$resultat->annee->nom_annee,
                        'Classe' => $resultat->salle->nom_salle,
                        'moyenne' => $resultat->moyenne,
                    ];
                    $info_bulletin = [
                        'ref_no' => $ref_no,
                        'encoded_data' => $encoded_data ,
                        'eleve_id'  => $resultat->eleve_id ,
                        'classe_id' => $resultat->classe_id ,
                        'salle_id' => $resultat->salle_id,
                        'annee_academique_id' => $resultat->annee_academique_id ,
                    ];
                    $bulletin = Bulletin::create($info_bulletin);
                    $enregistrement->bulletin_id = $bulletin->id;
                    $enregistrement->save();
                }
                
            }
        }


        $countResultat = ResultatExamen::resultatExist($this->examen->id, $this->classe->id) ;
        $countBulletin = Bulletin::bulletinExist($this->examen->id, $this->classe->id) ;
        $this->dataExistClasse = ($countResultat * $countBulletin ) ? true : false ;
        $this->isUpdateDataClasse = ($countResultat == $countBulletin ) ? true : false;


        $this->notification()->success(
            $title = "{$this->examen->nom_examen} /{$this->classe->nom_classe}",
            $description = 'Les Bulletins ont été mises à jour!'
        );

        $this->emit('confetti');
    }


    public function dataSalleCorrect(){
        if($this->selected_salle){
            $countResultatSalle = ResultatExamen::resultatExistSalle($this->examen->id, $this->selected_salle['id']) ;
            $countBulletinSalle = Bulletin::bulletinExistSalle($this->examen->id, $this->selected_salle['id']) ;
            $existance = ($countResultatSalle * $countBulletinSalle ) ? true : false ;
            $is_update = ($countResultatSalle == $countBulletinSalle ) ? true : false ;
            return ( $existance && $is_update ) ;
        }
        return false ;
    }

    public function dataClasseCorrect(){
        //debug('$this->dataExistClasse');
        //debug($this->dataExistClasse);
        //debug('$this->isUpdateDataClasse');
        //debug($this->isUpdateDataClasse);
        return ( $this->dataExistClasse && $this->isUpdateDataClasse ) ;
    }

    public function render()
    {
        $info = [ 
            'classe_id' => $this->classe->id,
            'examen_id' => $this->examen->id,
            'annee_academique_id' => $this->examen->annee->id,
        ] ;
        $salle_data_correct = true;
        $data = ResultatExamen::where($info)->orderByDesc('moyenne');

        if($this->selected_salle){
            $data = $data->where('salle_id',$this->selected_salle['id']);
            $salle_data_correct = $this->dataSalleCorrect() ;
        }

        if($salle_data_correct && $this->dataClasseCorrect() ){
            $data = $data->get()
                     ->map(function (ResultatExamen $result) {
                        return $result->bulletin;
                    });

            //ORDER DATA
            
            $data = $data->toQuery()->orderBy('encoded_data->moyenne', 'desc');

            debug($data);           

            $data = $data->paginate($this->per_page);
        }else{
            $data = [];
        }
        
        return view('livewire.evaluation.bulletin.vue.grid-bulletin-examen', ['bulletins' => $data ]);
    }
}
