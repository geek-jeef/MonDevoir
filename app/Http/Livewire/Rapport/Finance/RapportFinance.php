<?php

namespace App\Http\Livewire\Rapport\Finance;

use Livewire\Component;
use App\Settings\FinanceSettings;

use WireUi\Traits\Actions;
use Carbon\Carbon;

use App\Models\Transaction;
use App\Models\Depense;
use App\Models\Revenu;
use App\Models\Salaire;
use App\Models\Personnel;



use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use App\Exports\Finance\RapportFinancier as RapportFinancierToExcel ;


class RapportFinance extends Component
{
    use Actions;

    public $entete = true;
    //public $titre = 'Progression des payements';
    
    public $information;
    public $nom_file = 'Rapport Financier';

    protected $listeners = [
        'rapportRefeshment' => '$refresh',
    ];

    public function mount(){
        $this->annee = \Hp::annee() ;
    }

    public function getTransactionsProperty()
    {
        $annee = \Hp::annee();
        return Transaction::where('annee_academique_id',$annee->id)->orderBy('created_at');
    }

    public function populateData(){
        $transactions = $this->transactions;
        $transactions = $this->appliquerFiltre($transactions);

        $table = collect([]);
        $ite = 1 ;
        $is_first = true ;
        $header_offset = 2 ;
        $solde_since_now = 0.0;

        $total_entree = 0.0;
        $total_sortie = 0.0;
        $total_remboursement = 0.0;
        $total_par_categorie = [];

        $trans_aggregate = $this->transactions->get();

        $type_liste = $trans_aggregate->map(function ($item) {
                                return $item->type;
                            });
        $type_liste = $type_liste->unique();
        $type_liste = collect($type_liste->values()->all());

        foreach($type_liste as $categorie_name){
            $total_par_categorie[$categorie_name] = 0.0;
        }

        $transactions = $this->transactions->get();
        foreach($transactions as $transaction){
            
            $date = $transaction->date ;
            $n = $ite ;
            $n_data = $n+2;

            $cate = $transaction->type ;
            $facture = '';
            $facture_f = '';
            if($transaction->transactable == Depense::class){
                $json = $transaction->data;
                if( ($json['facture']?? false) ){
                    $facture   = 'Oui';
                    $facture_f = 'X';
                }else{
                    $facture   = 'Non';
                    $facture_f = '' ;
                }
            }

            $entree = '' ;
            $sortie = '' ;

            if( ($transaction->transactable == Depense::class) || ($transaction->transactable == Salaire::class) ){
                $sortie = $transaction->montant ;
                $total_sortie += (float) $transaction->montant;
                $solde_since_now -= (float) $transaction->montant ;
            }
            if( ($transaction->transactable == Revenu::class) ){
                $entree = $transaction->montant ;
                $total_entree += (float) $transaction->montant;

                $solde_since_now += (float) $transaction->montant ;
            }

            $solde = $solde_since_now ;
            $solde_f = $solde ;
            if($is_first){
                $e = Coordinate::stringFromColumnIndex(5) ;
                $s = Coordinate::stringFromColumnIndex(6) ;
                $r = $header_offset + $n ;
                $solde_f = (string) "={$e}{$r}-{$s}{$r}" ;
            }else{
                $e = Coordinate::stringFromColumnIndex(5) ;
                $s = Coordinate::stringFromColumnIndex(6) ;
                $so = Coordinate::stringFromColumnIndex(7) ;
                $r = $header_offset + $n ;
                $p = $r - 1 ;

                $solde_f = (string) "=IF( ({$e}{$r}) , ({$e}{$r}+{$so}{$p}) , ({$so}{$p}-{$s}{$r})) " ;

            }

            $comment = $transaction->description ;

            if( ($transaction->transactable == Salaire::class) ){
                $beneficiaire = Personnel::find($transaction->beneficiaire_id) ;
                if($beneficiaire){
                    $details_salaire = "Salaire - {$beneficiaire->nom_complet}" ;
                    $comment = " {$details_salaire} | {$transaction->description} ";
                }

            }

            $row = collect([
                array( 'value' => $date   , 'formule' => $date      , 'name' => 'Date'        , 'colspan' => 1),
                array( 'value' => $n      , 'formule' => $n         , 'name' => 'N°'          , 'colspan' => 1),
                array( 'value' => $cate   , 'formule' => $cate      , 'name' => 'Catégorie'   , 'colspan' => 1),
                array( 'value' => $facture, 'formule' => $facture_f , 'name' => 'Facture'     , 'colspan' => 1),
                array( 'value' => $entree , 'formule' => $entree    , 'name' => 'Entrée'      , 'colspan' => 1),
                array( 'value' => $sortie , 'formule' => $sortie    , 'name' => 'Sortie'      , 'colspan' => 1),
                array( 'value' => $solde  , 'formule' => $solde_f   , 'name' => 'Solde'       , 'colspan' => 1),
                array( 'value' => $comment, 'formule' => $comment   , 'name' => 'Commentaire' , 'colspan' => 1),
            ]);


            //Begin push 2 remboursement column
            $s = Coordinate::stringFromColumnIndex(6) ;
            $if_remb_col = Coordinate::stringFromColumnIndex(9);
            $remb_f = (string) "=IF({$if_remb_col}{$n_data}=1,{$s}{$n_data},0)" ;

            if( ($transaction->transactable == Depense::class) ){
                $json = $transaction->data;
                if( ($json['remboursement']?? false) ){
                    $row->push(array( 'value' => 1 , 'formule' => 1    , 'name' => 'Remboursement' , 'colspan' => 1));
                    $total_remboursement += $sortie ;
                    $row->push(array( 'value' => $sortie , 'formule' => $remb_f    , 'name' => 'Valeur Remboursement' , 'colspan' => 1));

                }else{
                    $row->push(array( 'value' => '' , 'formule' => ''    , 'name' => 'Remboursement' , 'colspan' => 1));
                    $row->push(array( 'value' => '' , 'formule' => $remb_f    , 'name' => 'Valeur Remboursement' , 'colspan' => 1));
                }
            }else{
                $row->push(array( 'value' => '' , 'formule' => ''    , 'name' => '' , 'colspan' => 1));
                $row->push(array( 'value' => '' , 'formule' => $remb_f    , 'name' => 'Valeur Remboursement' , 'colspan' => 1));

            }
            
            //End push 2 remboursement column


            //fill type part
            $currentColumn = 11 ;
            $cate_col = Coordinate::stringFromColumnIndex(3);

            foreach($type_liste as $type_categorie){
                $curr_cate_col = Coordinate::stringFromColumnIndex($currentColumn);
                $curr_cate_f = (string) "=IF({$cate_col}{$n_data}=\"{$type_categorie}\",{$s}{$n_data},0)";

                if( $sortie ){
                    if($type_categorie == $cate){ // check categorie match
                        //true
                        $row->push(array( 'value' => $sortie , 'formule' => $curr_cate_f    , 'name' => $type_categorie , 'colspan' => 1));

                        $total_par_categorie[$type_categorie] += $sortie;
                    }else{
                        $row->push(array( 'value' => '' , 'formule' => $curr_cate_f    , 'name' => $type_categorie , 'colspan' => 1));
                    }
                }else{
                    $row->push(array( 'value' => '' , 'formule' => $curr_cate_f    , 'name' => $type_categorie , 'colspan' => 1));
                }
                $currentColumn++;
            }
            //END fill type part




            $is_first = false ;
            $ite++;
            $table->push($row) ;
        }
        $table = collect($table->values()->all())->recursive() ;

        $final_solde = $total_entree - $total_sortie;


        $e = Coordinate::stringFromColumnIndex(5) ;
        $s = Coordinate::stringFromColumnIndex(6) ;
        $remb_val_col = Coordinate::stringFromColumnIndex(10);

        $total_entree_f = (string) "=SUM({$e}3:{$e}4096)" ;
        $total_sortie_f = (string) "=SUM({$s}3:{$s}4096)" ;
        $final_solde_f = (string) "={$e}1-{$s}1" ;

        $total_remboursement_f = (string) "=SUM({$remb_val_col}3:{$remb_val_col}4096)" ;

        $total_row = collect([
            array('name' => 'TOTAL', 'value' => 'TOTAL' , 'formule' => 'TOTAL' , 'colspan' => 1  ),
            array('name' => 'N°', 'value' => '' , 'formule' => '' , 'colspan' => 1  ),
            array('name' => 'Catégorie', 'value' => '' , 'formule' => '' , 'colspan' => 1  ),
            array('name' => 'Facture', 'value' => '' , '' => '' , 'colspan' => 1  ),
            array('name' => 'Entrée', 'value' => $total_entree , 'formule' => $total_entree_f , 'colspan' => 1  ),
            array('name' => 'Sortie', 'value' => $total_sortie , 'formule' => $total_sortie_f , 'colspan' => 1  ),
            array('name' => 'Solde', 'value' => $final_solde , 'formule' => $final_solde_f , 'colspan' => 1  ),
            array('name' => 'Commentaire', 'value' => '' , 'formule' => '' , 'colspan' => 1  ),
            array('name' => 'Presence Remboursement', 'value' => '' , 'formule' => '' , 'colspan' => 1  ),
            array('name' => 'Valeur Remboursement', 'value' => $total_remboursement , 'formule' => $total_remboursement_f , 'colspan' => 1  ),
        ]);

        $currentColumn = 11 ;
        foreach($type_liste as $type_categorie){
            $curr_cate_col = Coordinate::stringFromColumnIndex($currentColumn);
            $curr_cate_f = (string) (string) "=SUM({$curr_cate_col}3:{$curr_cate_col}4096)";
            $total_row->push(
                array('name' => $type_categorie, 'value' => $total_par_categorie[$type_categorie] , 'formule' => $curr_cate_f , 'colspan' => 1  )
            );
            $currentColumn++;
        }


        
        $type = 'rapport-finance';
        $sheetName =  "Transactions - " .$this->annee->nom_annee;
        $header = collect([
            array('name' => 'Date', 'value' => 'Date' , 'formule' => 'Date' , 'colspan' => 1  ),
            array('name' => 'N°', 'value' => 'N°' , 'formule' => 'N°' , 'colspan' => 1  ),
            array('name' => 'Catégorie', 'value' => 'Catégorie' , 'formule' => 'Catégorie' , 'colspan' => 1  ),
            array('name' => 'Facture', 'value' => 'Facture' , 'formule' => 'Facture' , 'colspan' => 1  ),
            array('name' => 'Entrée', 'value' => 'Entrée' , 'formule' => 'Entrée' , 'colspan' => 1  ),
            array('name' => 'Sortie', 'value' => 'Sortie' , 'formule' => 'Sortie' , 'colspan' => 1  ),
            array('name' => 'Solde', 'value' => 'Solde' , 'formule' => 'Solde' , 'colspan' => 1  ),
            array('name' => 'Commentaire', 'value' => 'Commentaire' , 'formule' => 'Commentaire' , 'colspan' => 1  ),
            array('name' => 'Remboursement', 'value' => 'Remboursement' , 'formule' => 'Remboursement' , 'colspan' => 2  ),

        ]);

        foreach($type_liste as $type_categorie){
            $header->push(
                array('name' => $type_categorie, 'value' => $type_categorie , 'formule' => $type_categorie , 'colspan' => 1  )
            );
        }

        $info = collect( [ 
            'type' => $type,
            'sheet_name' => $sheetName,
            //'titre_row' => $titre ,
            //'description_row' => $description ,
            'total_row' => $total_row,
            'header_row' => $header,
            'table' => $table ,
        ]);
        //$this->information->push(collect($info));
        $return_data = collect()->push($info);

        $this->information = collect($return_data->values()->all())->recursive()  ;

        return $this->information ;

        //$academique = $scope?? $this->annee;
        //$this->makeSheet($academique);
        //$this->makeAggregate($academique);
        //$this->information = collect($this->information->values()->all())->recursive() ;
    }

    public function downloadExcel()
    {
        $data_information = collect($this->information->values()->all())->recursive();
        $rapport = new RapportFinancierToExcel($data_information);
        return \Excel::download($rapport, \Hp::avatar($this->nom_file).'.xlsx');
    }

    public $filtre_date_from;
    public $filtre_date_to;
    public $filtre_type = [];
    public $filtre_transactable = [];
    public $filtre_annulation;
    public $filtre_facture;

    public function filtrer(){
        if($this->filtre_type == [null]){
            $this->filtre_type = [];
        }
        if($this->filtre_transactable == [null]){
            $this->filtre_transactable = [];
        }
        /*debug($this->filtre_date_from);
        debug($this->filtre_date_to);
        debug($this->filtre_type);
        debug($this->filtre_transactable);
        debug($this->filtre_annulation);
        debug($this->filtre_facture);*/
    }

    public function appliquerFiltre($data){

        /*

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
        */



        return $data;
    }


    public function resetFiltre(){
        $this->filtre_date_from = null ;
        $this->filtre_date_to = null ;
        $this->filtre_type = [] ;
        $this->filtre_transactable = [] ;
        $this->filtre_annulation = null ;
        $this->filtre_facture = null ;

         $this->notification()->send([
                'title'       => 'Filtres Réinitialisés!',
                'description' => "",
                'icon'        => 'success'
        ]);
        //$this->emit('confetti');
    }


    public function render()
    {
        $data_information = $this->populateData();
        $financeSettings = new FinanceSettings;

        return view('livewire.rapport.finance.rapport-finance',['data_information' => $data_information , 'financeSettings' => $financeSettings])->layout('layouts.printable');
    }
}
