<?php

namespace App\Http\Livewire\Payement\Systeme;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;

use App\Models\SystemeEcolage;
use App\Models\Eleve;
use Illuminate\Contracts\Database\Eloquent\Builder;


class AttributionSysteme extends Component
{
    use Actions;
    use WithPagination;

    public $data = [] ;


    //public $column_classe = false;
    public $column_naissance = false;
    public $column_action = true;
    public $column_nationalite = false;
    //public $column_tuteurs = true;


    public $filter_sexe = true;
    //public $filter_action = true;
    //public $filter_action = true;

    public $recherche = '';
    public $perPage = 20 ;

    public $cycle;
    public $classe;
    public $salle;

    protected $queryString = ['recherche'];

    protected $listeners = [
        'update-liste-data' => 'updateListeData',
        'refreshment' => '$refresh'
    ];


    public function updateListeData($info){

        $this->cycle = $info['cycle_id'] ;
        $this->classe = $info['classe_id'] ;
        $this->salle = $info['salle_id'] ;
        $this->recherche = null;
        debug($info);
        $this->resetPage();
    }

    public function clearSelectionConfirm(){
        $this->dialog()->confirm([
            'title'       => 'Confirmer?',
            'description' => 'Supprimer la selection?',
            'icon'        => 'question',
            'accept'      => [
                'label'   => 'Oui, supprimer',
                'method'  => 'clearSelection',
            ],
            'reject'      => [
                'label'   => 'Non, Annuler',
            ],
        ]);
    }

    public function clearSelection(){
        $this->selection = [];
        $this->notification()->send([
            'title'       => 'Selection!',
            'description' => "La selection a été réinitialisée",
            'icon'        => 'info'
        ]);
    }
    
    public function updatedRecherche(){
        $this->resetPage();
    }
    public function updatedPerPage(){
        $this->resetPage();
    }


    public $selection = [];

    public function toggleEleveSelection($eleve_id){
        if (($key = array_search($eleve_id, $this->selection)) !== false){
                unset($this->selection[$key]);
        }else{
            $this->selection[] = $eleve_id ;
        }
    }

    public function isSelected($eleve_id){
        return (in_array($eleve_id, $this->selection));
    }

    public $selected_systeme_id;
    public $listeSysteme ;


    protected $rules = [
        'selected_systeme_id' => 'required|integer|exists:systeme_ecolages,id',
    ];

    public function confirmLierSelection(){

        $this->validate();


        $systeme = SystemeEcolage::find($this->selected_systeme_id);

        $nb = count($this->selection);

        $this->dialog()->confirm([
            'title'       => 'Confirmer?',
            'description' => "Appliquer le Systeme de Payement {$systeme->titre} aux {$nb} Eleves selectionés ? ",
            'icon'        => 'question',
            'accept'      => [
                'label'   => 'Oui, valider',
                'method'  => 'lierSelection',
            ],
            'reject'      => [
                'label'   => 'Non, Annuler',
            ],
        ]);
    }


    public function lierSelection(){


        $systeme = SystemeEcolage::find($this->selected_systeme_id);
        $selectionner = Eleve::whereIn('id',$this->selection)->get();
        foreach ($selectionner as $eleve) {
            if($eleve->inscription_courante){
                $systeme->linkToMinervable($eleve->inscription_courante);
            }
        }
        $this->notification()->send([
            'title'       => 'Systeme de Payement Enregistré!',
            'description' => "Le Systeme {$systeme->titre} a été appliqué pour les eleves selectionés avec succès",
            'icon'        => 'success'
        ]);

        $this->emit('confetti');
        //linkToMinervable
        $this->emitSelf('refreshment');
    }


    public function mount(){
        $this->listeSysteme = SystemeEcolage::actuel()->get();
    }


    public function render()
    {
        $annee = \Hp::annee();
        $eleves = $annee->eleves();

        if( $this->salle != null && $this->salle != "null"  ){
           $eleves = $eleves->where('salle_id', $this->salle);
        }elseif( $this->classe != null && $this->classe != "null" ){
           $eleves = $eleves->where('classe_id', $this->classe);
        }elseif( $this->cycle != null && $this->cycle != 'null' ){
           $eleves = $eleves->where('cycle_academique_id', $this->cycle);
        }

        $eleves = $eleves->getQuery();
        $eleves = $eleves->orderBy('cycle_academique_id')
                        ->orderBy('classe_id')
                        ->orderBy('salle_id')
                        ->orderBy('eleves.nom')
                        ->orderBy('eleves.prenoms');

        if($this->recherche){
            debug('recherche cycle');
            $eleves = $eleves
                ->where(fn (Builder $query) => $query
                    ->where('eleves.nom', 'like', "%{$this->recherche}%")
                    ->orWhere('eleves.prenoms', 'like', "%{$this->recherche}%")
                ) ;
        }


        debug($eleves->get());
        
        $eleves = $eleves->paginate($this->perPage) ;

        return view('livewire.payement.systeme.attribution-systeme',['eleves' => $eleves]);

    }
}
