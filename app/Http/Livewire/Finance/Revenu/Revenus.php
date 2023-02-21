<?php

namespace App\Http\Livewire\Finance\Revenu;

use Livewire\Component;
use WireUi\Traits\Actions;

use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;

use App\Models\Revenu;
use App\Settings\FinanceSettings;
use Carbon\Carbon;

class Revenus extends Component
{
    use Actions;
    use WithPagination;

    public $recherche;
    public $per_page = 10 ;


    protected $queryString = ['recherche'];
    protected $listeners = ['revenuRefreshment' => '$refresh'] ;
    public function updatingRecherche(){
        $this->resetPage();
    }
    public function updatingPerPage(){
        $this->resetPage();
    }

    public function getRevenusProperty()
    {
        $annee = \Hp::annee();
        return Revenu::withTrashed()->where('annee_academique_id',$annee->id)->orderByDesc('created_at');
    }

    public function annulerRevenu(Revenu $revenu){
        if($revenu && $revenu->delete()){
            
            $this->notification()->send([
                'title'       => 'Enregistrement De Revenu Supprimé!',
                'description' => "Revenu de {$revenu->montant} pour {$revenu->type} a été Supprimé avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public function retablirRevenu($revenu_id){
        $revenu = Revenu::withTrashed()->where('id',$revenu_id)->first();
        if($revenu  && $revenu->restore()){
            $this->notification()->send([
                'title'       => 'Revenu Retabli!',
                'description' => "Revenu de {$revenu->montant} pour {$revenu->type} a été retabli avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public $filtre_date_from;
    public $filtre_date_to;
    public $filtre_type = [];
    public $filtre_annulation;

    public function filtrer(){
        if($this->filtre_type == [null]){
            $this->filtre_type = [];
        }

        debug($this->filtre_date_from);
        debug($this->filtre_date_to);
        debug($this->filtre_type);
        debug($this->filtre_annulation);
    }


    public function render()
    {
        $data = $this->revenus ;

        if($this->filtre_type){
            $data = $data->whereIn('transactions.type' , $this->filtre_type);
        }

        if($this->recherche){
            $data = $data
                ->where(fn (Builder $query) => $query
                    ->where('transactions.type', 'like', "%{$this->recherche}%")
                    ->orWhere('transactions.description', 'like', "%{$this->recherche}%")
                    ->orWhere('transactions.data', 'like', "%{$this->recherche}%")
                    ->orWhere('transactions.montant', 'like', "%{$this->recherche}%")
                ) ;
        }

        if($this->filtre_date_from){
            $data = $data->where('created_at','>=' ,Carbon::parse($this->filtre_date_from)->startOfDay());
        }

        if($this->filtre_date_to){
            $data = $data->where('created_at','<=' ,Carbon::parse($this->filtre_date_to)->endOfDay());
        }

        if($this->filtre_annulation){
            if($this->filtre_annulation == "Valide Uniquement" ){
                $data = $data->where('deleted_at' ,null);
            }
            if($this->filtre_annulation == "Annulé Seulement"){
                $data = $data->where('deleted_at', '!=' ,null);
            }
        }
        
        $data = $data->paginate($this->per_page) ;

        $financeSettings = new FinanceSettings;
        return view('livewire.finance.revenu.revenus',['revenus' => $data, 'financeSettings' => $financeSettings]);
    }
}
