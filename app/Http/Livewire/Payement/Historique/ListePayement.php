<?php

namespace App\Http\Livewire\Payement\Historique;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EnregistrementPayement;
use App\Models\SystemeEcolage;
use Carbon\Carbon;
use App\Exports\Collection as ExcelCollection ;

class ListePayement extends Component
{
    use WithPagination;

    public $recherche = '';
    public $perPage = 20 ;

    public $cycle;
    public $classe;
    public $salle;



    public $filtre_date_from;
    public $filtre_date_to;
    public $filtre_type;

    public function filtrer(){
        
    }

    protected $queryString = ['recherche'];
    protected $listeners = [
        'TrierElevePourListePayement' => 'changeInfoClasse' ,
        'EcolageGridRefreshment' => '$refresh'
    ];
    public function changeInfoClasse($info)
    {
        $this->cycle = $info['cycle_id'] ;
        $this->classe = $info['classe_id'] ;
        $this->salle = $info['salle_id'] ;
        $this->recherche = null;
        debug($info);
        $this->resetPage();
    }

    public function updatedRecherche(){
        $this->resetPage();
    }
    public function updatedPerPage(){
        $this->resetPage();
    }


    public function exportExcel(){

        $annee = \Hp::annee();
        $enregistrements = EnregistrementPayement::withTrashed()->withWhereHas('payement', function ($query) {
                $query->where('payements.payable_type', SystemeEcolage::class);
            }
        )->where('annee_academique_id',$annee->id)->orderByDesc('created_at');

        $enregistrements = $enregistrements->get();

        $source = $enregistrements->map(function($query){
            $collection = collect([]);
            $collection->put('id', $query->id);
            $collection->put('ref_no', $query->ref_no);
            $collection->put('eleve', $query->eleve->nom_complet );
            $collection->put('genre', $query->eleve->genre );
            $collection->put('cycle', $query->eleve->inscription_courante->salle->classe->cycle->nom_cycle);
            $collection->put('classe', $query->eleve->inscription_courante->salle->classe->nom_academique);
            $collection->put('salle', $query->eleve->inscription_courante->salle->nom_salle);
            $collection->put('montant_paye', $query->montant_paye);
            $collection->put('balance', $query->balance);
            $collection->put('complete', $query->complete);
            $collection->put('methode_de_payement', $query->methode_de_payement);
            $collection->put('date_creation', (string) $query->created_at);
            $collection->put('date_suppression', (string) $query->deleted_at);
            $collection->put('annee_academique', $query->annee->nom_annee);
            return $collection;
        });

        $header = collect([]);
            $header->push('id');
            $header->push('ref_no');
            $header->push('eleve');
            $header->push('genre');
            $header->push('cycle');
            $header->push('classe');
            $header->push('salle');
            $header->push('montant_paye');
            $header->push('balance');
            $header->push('complete');
            $header->push('methode_de_payement');
            $header->push('date_creation');
            $header->push('date_suppression');
            $header->push('annee_academique');

        $source->prepend($header);


        $export = ['data' => $source];

        return \Excel::download( new ExcelCollection($export), 'ListePayement.xlsx');

    }


    public function deleteEnregistrement($id){
        $enregistrement = EnregistrementPayement::find($id);
        if($enregistrement){
            $enregistrement->delete();
        }
        $this->emitSelf('EcolageGridRefreshment');
    }

    public function restoreEnregistrement($id){
        $enregistrement = EnregistrementPayement::withTrashed()->where('id',$id)->first();
        if($enregistrement){
            $enregistrement->restore();
        }
        $this->emitSelf('EcolageGridRefreshment');
    }

    public function source(){

        $annee = \Hp::annee();
        $enregistrements = EnregistrementPayement::withWhereHas('payement', function ($query) {
                $query->where('payements.payable_type', SystemeEcolage::class);
            }
        )->where('annee_academique_id',$annee->id)->orderByDesc('created_at');

        if($this->filtre_type){
            if($this->filtre_type == "inscription" ){
                $enregistrements = $enregistrements->whereJsonContains('data->pour_inscription', true);
            }
            if($this->filtre_type == "ecolage"){
                $enregistrements = $enregistrements->whereJsonDoesntContainKey('data->pour_inscription');
            }
            if($this->filtre_type == "annuler"){
                $enregistrements = EnregistrementPayement::onlyTrashed()->withWhereHas('payement', function ($query) {
                    $query->where('payements.payable_type', SystemeEcolage::class);
                    })->where('annee_academique_id',$annee->id)->orderByDesc('created_at');
            }
        }

        if($this->filtre_date_from){
            $enregistrements = $enregistrements->where('created_at','>=' ,Carbon::parse($this->filtre_date_from)->startOfDay());
        }

        if($this->filtre_date_to){
            $enregistrements = $enregistrements->where('created_at','<=' ,Carbon::parse($this->filtre_date_to)->endOfDay());
        }

        if( $this->salle != null && $this->salle != "null" && $this->salle != "" ){

           $result = $enregistrements->withWhereHas('eleve.salle_actuelle', function ($query) {
                $query->where('salles.id', $this->salle);
            });

        }elseif( $this->classe != null && $this->classe != "null" && $this->classe != "" ){

           $result = $enregistrements->withWhereHas('eleve.classe_actuelle', function ($query) {
                $query->where('classes.id', $this->classe);
            });

        }elseif( $this->cycle != null && $this->cycle != 'null' && $this->cycle != "" ){

           $result = $enregistrements->withWhereHas('eleve.cycle_actuelle', function ($query) {
                $query->where('cycle_academiques.id', $this->cycle);
            });
        
        }

        if($this->recherche){
            debug('recherche cycle');
            $result = $enregistrements->withWhereHas('eleve', function ($query) {
                $query
                    ->where('eleves.nom', 'like', "%{$this->recherche}%")
                    ->orWhere('eleves.prenoms', 'like', "%{$this->recherche}%") ;
            });
        }


        return $enregistrements;

    }

    public function render()
    {

        $enregistrements = $this->source()->paginate($this->perPage) ;
        return view('livewire.payement.historique.liste-payement', [
            'enregistrements' => $enregistrements]);
    }
}
