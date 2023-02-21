<?php

namespace App\Http\Livewire\Finance\Salaire;

use Livewire\Component;
use WireUi\Traits\Actions;

use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;

use App\Models\Salaire;
use App\Settings\FinanceSettings;
use Carbon\Carbon;

class Salaires extends Component
{
    use Actions;
    use WithPagination;

    public $recherche;
    public $per_page = 15 ;


    //public $selected_type_salaire ;


    protected $queryString = ['recherche'];

    protected $listeners = ['salaireRefreshment' => '$refresh'] ;

    public function updatingRecherche(){
        $this->resetPage();
    }
    public function updatingPerPage(){
        $this->resetPage();
    }

    public function getSalairesProperty()
    {
        $annee = \Hp::annee();
        return Salaire::withTrashed()->where('annee_academique_id',$annee->id)->orderByDesc('created_at');
    }

    public function annulerSalaire(Salaire $salaire){
        if($salaire && $salaire->delete()){
            
            $this->notification()->send([
                'title'       => 'Payement de Salaire Supprimé!',
                'description' => "Payement de {$salaire->montant} pour {$salaire->beneficiaire->nom_complet} a été Supprimé avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public function retablirSalaire($salaire_id){
        $salaire = Salaire::withTrashed()->where('id',$salaire_id)->first();
        if($salaire  && $salaire->restore()){
            $this->notification()->send([
                'title'       => 'Payement de Salaire Retabli!',
                'description' => "Payement de {$salaire->montant} pour {$salaire->beneficiaire->nom_complet} a été retabli avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public $filtre_date_from;
    public $filtre_date_to;
    public $filtre_beneficiaire;
    public $filtre_annulation;

    public function filtrer(){
        if($this->filtre_beneficiaire == [null]){
            $this->filtre_beneficiaire = null;
        }
    }

    public function render()
    {
        $data = $this->salaires ;

        if($this->filtre_beneficiaire){
            $data = $data->whereIn('beneficiaire_id' , $this->filtre_beneficiaire);
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
            debug(1);
            if($this->filtre_annulation == "Valide Uniquement" ){
                $data = $data->where('deleted_at' ,null);
                debug(2);

            }
            if($this->filtre_annulation == "Annulé Seulement"){
                $data = $data->where('deleted_at', '!=' ,null);
                debug(3);
            }
            debug(4);

        }

        
        $data = $data->paginate($this->per_page) ;

        $financeSettings = new FinanceSettings;
        return view('livewire.finance.salaire.salaires',['salaires' => $data, 'financeSettings' => $financeSettings]);
    }
}
