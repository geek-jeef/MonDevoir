<?php

namespace App\Http\Livewire\Payement\Ecolage;

use Livewire\Component;

use App\Models\Eleve;
use App\Models\Salle;
use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;


class GridEcolage extends Component
{
    use WithPagination;

    public $recherche = '';
    public $perPage = 12 ;

    public $cycle;
    public $classe;
    public $salle;

    protected $queryString = ['recherche'];
    protected $listeners = [
        'TrierElevePourEcolage' => 'changeInfoClasse' ,
        'EcolageGridRefreshment' => '$refresh'
    ];

    public function changeInfoClasse($info)
    {
        $this->cycle = $info['cycle_id'] ;
        $this->classe = $info['classe_id'] ;
        $this->salle = $info['salle_id'] ;
        $this->recherche = null;
        debug($info);
    }

    public function updatedRecherche(){
        $this->resetPage();
    }
    public function updatedPerPage(){
        $this->resetPage();
    }

    public function render()
    {

        $annee = \Hp::annee();
        $eleves = $annee->eleves();

        if( $this->salle != null && $this->salle != "null"  ){
           $eleves = $eleves->where('salle_id', $this->salle);
           debug('filtre salle');
        }elseif( $this->classe != null && $this->classe != "null" ){
           $eleves = $eleves->where('classe_id', $this->classe);
           debug('filtre classe');
        }elseif( $this->cycle != null && $this->cycle != 'null' ){
           $eleves = $eleves->where('cycle_academique_id', $this->cycle);
           debug('filtre cycle');
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
        
        $eleves = $eleves->paginate($this->perPage) ;
        return view('livewire.payement.ecolage.grid-ecolage', [
            'eleves' => $eleves ,]);
    }
}
