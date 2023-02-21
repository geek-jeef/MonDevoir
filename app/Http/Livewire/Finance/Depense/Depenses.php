<?php

namespace App\Http\Livewire\Finance\Depense;

use Livewire\Component;
use WireUi\Traits\Actions;

use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;

use App\Models\Depense;
use App\Settings\FinanceSettings;
use Carbon\Carbon;

class Depenses extends Component
{
    use Actions;
    use WithPagination;

    public $recherche;
    public $per_page = 10 ;

    protected $queryString = ['recherche'];
    protected $listeners = ['depenseRefreshment' => '$refresh'] ;

    public function updatingRecherche(){
        $this->resetPage();
    }
    public function updatingPerPage(){
        $this->resetPage();
    }

    public function getDepensesProperty()
    {
        $annee = \Hp::annee();
        return Depense::withTrashed()->where('annee_academique_id',$annee->id)->orderByDesc('created_at');
    }

    public function annulerDepense(Depense $depense){
        if($depense && $depense->delete()){
            
            $this->notification()->send([
                'title'       => 'Enregistrement De Depense Supprimé!',
                'description' => "Depense de {$depense->montant} pour {$depense->type} a été Supprimé avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public function retablirDepense($depense_id){
        $depense = Depense::withTrashed()->where('id',$depense_id)->first();
        if($depense  && $depense->restore()){
            $this->notification()->send([
                'title'       => 'Depense Retabli!',
                'description' => "Depense de {$depense->montant} pour {$depense->type} a été retabli avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('confetti');
        }
    }

    public function toggleFacture($depense_id){
        $depense = Depense::withTrashed()->where('id',$depense_id)->first();
        if($depense){
            $depense->facture = !$depense->facture ;
            if($depense->save()){
                if($depense->facture){
                    $this->notification()->send([
                        'title'       => 'Changement Enregistré!',
                        'description' => "La Facture de Depense à été marqué comme DISPONIBLE avec succès",
                        'icon'        => 'success'
                    ]);
                }else{
                    $this->notification()->send([
                        'title'       => 'Changement Enregistré!',
                        'description' => "La Facture de Depense à été marqué comme MANQUANTE avec succès",
                        'icon'        => 'success'
                    ]);
                }
                $this->emit('confetti');
            }
        }
    }

    public function toggleRemboursement($depense_id){
        $depense = Depense::withTrashed()->where('id',$depense_id)->first();
        if($depense){
            $depense->remboursement = !$depense->remboursement ;
            if($depense->save()){
                if($depense->remboursement){
                    $this->notification()->send([
                        'title'       => 'Changement Enregistré!',
                        'description' => "La Depense à été marqué comme Remboursé avec succès",
                        'icon'        => 'success'
                    ]);
                }else{
                    $this->notification()->send([
                        'title'       => 'Changement Enregistré!',
                        'description' => "La Depense à été marqué comme Non-Remboursé avec succès",
                        'icon'        => 'success'
                    ]);
                }
                $this->emit('confetti');
            }
        }
    }


    public $filtre_date_from;
    public $filtre_date_to;
    public $filtre_type = [];
    public $filtre_annulation;
    public $filtre_facture;

    public function filtrer(){
        if($this->filtre_type == [null]){
            $this->filtre_type = [];
        }

        debug($this->filtre_date_from);
        debug($this->filtre_date_to);
        debug($this->filtre_type);
        debug($this->filtre_annulation);
        debug($this->filtre_facture);
    }

    public function render()
    {
        $data = $this->depenses ;

        if($this->filtre_type){
            $data = $data->whereIn('transactions.type' , $this->filtre_type);
        }


        if($this->filtre_facture){
            if($this->filtre_facture == "Avec Facture Uniquement" ){
                $data = $data->whereJsonContains('data->facture', true);
            }
            if($this->filtre_facture == "Sans Facture Uniquement"){
                $data = $data->where(fn (Builder $query) => $query
                                ->whereJsonDoesntContain('data->facture', true)
                                ->orWhereJsonDoesntContainKey('data->facture')
                            );
            }
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
        return view('livewire.finance.depense.depenses',['depenses' => $data, 'financeSettings' => $financeSettings]);
    }
}
