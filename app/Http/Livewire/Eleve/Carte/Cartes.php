<?php

namespace App\Http\Livewire\Eleve\Carte;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;

use WireUi\Traits\Actions;


use App\Models\CycleAcademique;
use App\Models\Classe;
use App\Models\Salle;

class Cartes extends Component
{
    use Actions;
    use WithPagination;

    public $recherche = '';
    public $per_page = 10 ;

    public function updatedPerPage(){
        $this->resetPage();
    }

    public $annee;
    public $cycles;
    public $classes;
    public $salles;
    public $cycle_id;
    public $classe_id;
    public $salle_id;
    public $selected_cartes = [] ;

    protected $listeners = [
        'modifierListeClasseForCarte' => 'listeClasse',
        'modifierListeSalleForCarte' => 'listeSalle',
        'toggleCarteSelection' => 'toggleCarteSelection',
    ];

    public function listeClasse($cycle_id){
        $this->cycle_id = $cycle_id;
        $this->classe_id = null;
        $this->salle_id = null;
        $this->salles = null;
        $this->classes = CycleAcademique::find($cycle_id)->classes;
    }

    public function listeSalle($classe_id){
        $this->classe_id = $classe_id;
        $this->salle_id = null;
        $this->salles = Classe::find($classe_id)->salles;
    }

    public function toggleCarteSelection($carte){
        if (($key = array_search($carte, $this->selected_cartes)) !== false){
                unset($this->selected_cartes[$key]);
        }else{
            $this->selected_cartes[] = $carte ;
        }
    }

    public function isSelected($carte){
        return (in_array($carte, $this->selected_cartes));
    }

    public  function printCarteSelection(){
        if(count($this->selected_cartes)){
            redirect()->route('eleve.cartes.print',['cartePrintData' =>  [ 'cartes' => $this->selected_cartes , 'annee_id' => $this->annee->id ] ]);
        }else{
            $this->notification()->send([
                'title'       => 'Aucune Carte selectionnée!',
                'description' => "Veuillez selectionner les cartes à imprimer",
                'icon'        => 'info'
            ]);
        }
        
    }

    public  function printCarteAll(){
        $data = [] ;
        $selected_salle = [];

        if($this->salle_id){
            //get data
            $selected_salle = Salle::find($this->salle_id);
            $data = $selected_salle->eleves();
        
            if($this->recherche){
                $data = $data
                    ->where(fn (Builder $query) => $query
                        ->where('eleves.nom', 'like', "%{$this->recherche}%")
                        ->orWhere('eleves.prenoms', 'like', "%{$this->recherche}%")
                    ) ;
            }
        }
        $data = $data->orderBy('eleves.nom')->orderBy('eleves.prenoms');

        $cartes = $data->get()->pluck('id')->all();

        redirect()->route('eleve.cartes.print',['cartePrintData' =>  [ 'cartes' => $cartes , 'annee_id' => $this->annee->id ] ]);

    }

    

    public function mount(){
        $this->annee = \Hp::annee();
        $this->cycles =  CycleAcademique::ouvert()->pourAnnee($this->annee->id)->get();
    }

    public function render()
    {
        $data = [] ;
        $selected_salle = [];

        if($this->salle_id){
            //get data
            $selected_salle = Salle::find($this->salle_id);
            $data = $selected_salle->eleves();

            if($this->recherche){
                $data = $data
                    ->where(fn (Builder $query) => $query
                        ->where('eleves.nom', 'like', "%{$this->recherche}%")
                        ->orWhere('eleves.prenoms', 'like', "%{$this->recherche}%")
                    ) ;
            }
            $data = $data->orderBy('eleves.nom')->orderBy('eleves.prenoms');

            $data = $data->paginate($this->per_page);
        }

        return view('livewire.eleve.carte.cartes',['eleves' => $data, 'selected_salle' => $selected_salle]);
    }
}
