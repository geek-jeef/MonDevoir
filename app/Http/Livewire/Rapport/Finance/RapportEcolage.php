<?php

namespace App\Http\Livewire\Rapport\Finance;

use Livewire\Component;
use App\Models\Salle;
use App\Models\Classe;
use App\Models\CycleAcademique;
use WireUi\Traits\Actions;
use App\Settings\GeneralSettings;

use App\Exports\Finance\RapportEcolage as RapportEcolageToExcel ;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class RapportEcolage extends Component
{
    use Actions;

    public $entete = true;
    //public $titre = 'Progression des payements';
    
    public $information;
    public $nom_file = 'Rapport Ecolage';

    protected $listeners = [
        'update-liste-data' => 'updateListeData',
    ];

    public function updateListeData($data){
        if(isset($data['salle_id']) && ($data['salle_id'] != 'null') && ($data['salle_id'] != null) ){
            $salle = Salle::find($data['salle_id']);
            $this->nom_file = "Rapport Ecolage({$this->annee->nom_annee}) - ".$salle->nom_academique." - ".now();
            $this->populateData($salle);

        }elseif(isset($data['classe_id']) && ($data['classe_id'] != 'null') && ($data['classe_id'] != null) ){
            $classe = Classe::find($data['classe_id']);
            $this->nom_file = "Rapport Ecolage({$this->annee->nom_annee}) - ".$classe->nom_academique." - ".now();

            $this->populateData($classe);
        }elseif(isset($data['cycle_id']) && ($data['cycle_id'] != 'null') && ($data['cycle_id'] != null) ){
            $cycle = CycleAcademique::find($data['cycle_id']);
            $this->nom_file = "Rapport Ecolage({$this->annee->nom_annee}) - ".$cycle->nom_academique." - ".now();
            $this->populateData($cycle);
        }
        else{
            $this->nom_file = "Rapport Ecolage({$this->annee->nom_annee}) - ".now();
            $this->populateData();
        }
    }


    public function mount(){
        $this->annee = \Hp::annee() ;
        //$this->populateData();
    }

    public function populateData($scope = null){

        $this->information = collect([]);
        $academique = $scope?? $this->annee;
        $this->makeSheet($academique);
        $this->makeAggregate($academique);

        $this->information = collect($this->information->values()->all())->recursive() ;

    }

    public function makeAggregate($academique){

        $type = 'aggregate' ;
        $sheetName = "Resume - ". $academique->nom_academique;

        $titre = [
            array('value' => "Revenu pour l'année scolaire {$this->annee->nom_annee} ({$academique->nom_academique}) ",
                  'formule' => "Revenu pour l'année scolaire {$this->annee->nom_annee} ({$academique->nom_academique}) ",
                  'colspan' => 13),
        ];

        $header = [
            array('value' => 'Classe'           , 'formule' => 'Classe'           , 'colspan' => 1),
            array('value' => 'Écolage attendu'  , 'formule' => 'Écolage attendu'  , 'colspan' => 1),
            array('value' => 'Revenu écolage'   , 'formule' => 'Revenu écolage'   , 'colspan' => 1),
            array('value' => '%'                , 'formule' => '%'                , 'colspan' => 1),
            array('value' => 'inscript. attendu', 'formule' => 'inscript. attendu', 'colspan' => 1),
            array('value' => 'Revenu inscript.' , 'formule' => 'Revenu inscript.' , 'colspan' => 1),
            array('value' => '%'                , 'formule' => '%'                , 'colspan' => 1),
            array('value' => 'Revenu total.'    , 'formule' => 'Revenu total.'    , 'colspan' => 1),
            array('value' => 'Écolage restante' , 'formule' => 'Écolage restante' , 'colspan' => 1),
            array('value' => 'Inscr. restante'  , 'formule' => 'Inscr. restante'  , 'colspan' => 1),
            array('value' => 'Élèves'           , 'formule' => 'Élèves'           , 'colspan' => 1),
            array('value' => 'Dettes'           , 'formule' => 'Dettes'           , 'colspan' => 1),
            array('value' => 'Bourse'           , 'formule' => 'Bourse'           , 'colspan' => 1),
        ];

        $this->information = collect($this->information->values()->all())->recursive() ;


        $table = collect([]) ;



        $_sheet_n_column = Coordinate::stringFromColumnIndex(1);
        $_sheet_frais_ecolage_column = Coordinate::stringFromColumnIndex(4);

        $_sheet_inscription_column = Coordinate::stringFromColumnIndex(5);
        $_sheet_revenu_insc_column = Coordinate::stringFromColumnIndex(6);
        $_sheet_1_revenu_column = Coordinate::stringFromColumnIndex(7);
        $_sheet_2_revenu_column = Coordinate::stringFromColumnIndex(8);
        $_sheet_3_revenu_column = Coordinate::stringFromColumnIndex(9);
        $_sheet_4_revenu_column = Coordinate::stringFromColumnIndex(10);
        $_sheet_balance_column = Coordinate::stringFromColumnIndex(11);
        $_sheet_marquage_column = Coordinate::stringFromColumnIndex(12);

        $_sheet_total_row = 3 ;
        $_sheet_description_row = 2 ;


        $_aggregate_ecolage_attendu_column = Coordinate::stringFromColumnIndex(2);
        $_aggregate_ecolage_revenu_column = Coordinate::stringFromColumnIndex(3);

        $_aggregate_inscription_column = Coordinate::stringFromColumnIndex(5);
        $_aggregate_revenu_insc_column = Coordinate::stringFromColumnIndex(6);


        $header_offset = 3;
        $_aggregate_first_row = 4;
        $_aggregate_total_row = 2 ;

        $ite = 1;

        foreach($this->information as $sheet){
            if($sheet->get('type') == 'sheet' ){
                $num_row = $header_offset + $ite ;
                $sheet_total =  $sheet->get('total_row');

                $nom_classe = $sheet->get('sheet_name');

                $ecolage_attendu = (float)$sheet_total->firstWhere('name', 'Total Ecolage')->get('value');
                $ecolage_revenu =  (float)$sheet_total->firstWhere('name', 'Total Revenu Ecolage 1')->get('value')
                                 + (float)$sheet_total->firstWhere('name', 'Total Revenu Ecolage 2')->get('value')
                                 + (float)$sheet_total->firstWhere('name', 'Total Revenu Ecolage 3')->get('value')
                                 + (float)$sheet_total->firstWhere('name', 'Total Revenu Ecolage 4')->get('value');
                $ecolage_percent = ($ecolage_attendu) ? round( (($ecolage_revenu* 100.00) / $ecolage_attendu ) ,  2 ) : 100 ;
                $inscription_attendu = (float)$sheet_total->firstWhere('name', 'Total Inscription')->get('value');
                $inscription_revenu =  (float)$sheet_total->firstWhere('name', 'Total Revenu Inscription')->get('value');
                $inscription_percent = ($inscription_attendu) ? round( (($inscription_revenu* 100.00) / $inscription_attendu ) ,  2 ) : 100 ;
                $revenu_total = $ecolage_revenu + $inscription_revenu ;

                $ecolage_balance = (float)$sheet_total->firstWhere('name', 'Total Ecolage Balance')->get('value');
                $inscription_balance = $inscription_attendu - $inscription_revenu ;

                $sheet_description =  $sheet->get('description_row');

                $nbre_eleve = (int)$sheet_description->firstWhere('name', 'Nombre Eleve')->get('value');
                $nbre_dette = (int)$sheet_description->firstWhere('name', 'Nombre Dette')->get('value');
                $nbre_boursier = (int)$sheet_total->firstWhere('name', 'Nombre Boursier')->get('value');

                $nom_classe_f          = (string) "='{$nom_classe}'!{$_sheet_n_column}{$_sheet_total_row}" ;
                $ecolage_attendu_f     = (string) "='{$nom_classe}'!{$_sheet_frais_ecolage_column}{$_sheet_total_row}" ;
                $ecolage_revenu_f      = (string) "=SUM('{$nom_classe}'!{$_sheet_1_revenu_column}{$_sheet_total_row}:{$_sheet_4_revenu_column}{$_sheet_total_row})";

                $ecolage_percent_f     = (string) "={$_aggregate_ecolage_revenu_column}{$num_row}/{$_aggregate_ecolage_attendu_column}{$num_row}" ;

                $inscription_attendu_f   = (string) "='{$nom_classe}'!{$_sheet_inscription_column}{$_sheet_total_row}";
                $inscription_revenu_f  = (string) "='{$nom_classe}'!{$_sheet_revenu_insc_column}{$_sheet_total_row}" ;
                $inscription_percent_f = (string) "={$_aggregate_revenu_insc_column}{$num_row}/{$_aggregate_inscription_column}{$num_row}" ;

                $revenu_total_f = (string) "={$_aggregate_ecolage_revenu_column}{$num_row}+{$_aggregate_revenu_insc_column}{$num_row}" ; 
                $ecolage_balance_f     = (string) "='{$nom_classe}'!{$_sheet_balance_column}{$_sheet_total_row}" ;
                $inscription_balance_f = (string) "={$_aggregate_revenu_insc_column}{$num_row}-{$_aggregate_inscription_column}{$num_row}" ;

                $nbre_eleve_f         = (string) "='{$nom_classe}'!{$_sheet_n_column}{$_sheet_description_row}" ;
                $nbre_dette_f         = (string) "='{$nom_classe}'!{$_sheet_balance_column}{$_sheet_description_row}";
                $nbre_boursier_f      = (string) "='{$nom_classe}'!{$_sheet_marquage_column}{$_sheet_total_row}";


                $row = [
                    array( 'value'   => $nom_classe   ,
                           'formule' => $nom_classe_f               , 'name' => 'Classe' , 'colspan' => 1),

                    array( 'value'   => $ecolage_attendu            , 
                           'formule' => $ecolage_attendu_f          , 'name' => 'Écolage attendu' , 'colspan' => 1),
                    array( 'value'   => $ecolage_revenu             , 
                           'formule' => $ecolage_revenu_f           , 'name' => 'Revenu écolage' , 'colspan' => 1),
                    array( 'value'   => $ecolage_percent            , 
                           'formule' => $ecolage_percent_f          , 'name' => '% Revenu écolage' , 'colspan' => 1),

                    array( 'value'   => $inscription_attendu        , 
                           'formule' => $inscription_attendu_f      , 'name' => 'inscript. attendu' , 'colspan' => 1),
                    array( 'value'   => $inscription_revenu         , 
                           'formule' => $inscription_revenu_f       , 'name' => 'Revenu inscript.' , 'colspan' => 1),
                    array( 'value'   => $inscription_percent        , 
                           'formule' => $inscription_percent_f      , 'name' => '% Revenu inscript.' , 'colspan' => 1),

                    array( 'value'   => $revenu_total               , 
                           'formule' => $revenu_total_f             , 'name' => 'Revenu total.' , 'colspan' => 1),

                    array( 'value'   => $ecolage_balance            ,  
                           'formule' => $ecolage_balance_f          , 'name' => 'Écolage restante' , 'colspan' => 1),
                    array( 'value'   => $inscription_balance        ,  
                           'formule' => $inscription_balance_f      , 'name' => 'Inscr. restante' , 'colspan' => 1),

                    array( 'value'   => $nbre_eleve                 ,  
                           'formule' => $nbre_eleve_f               , 'name' => 'Nombre Eleve' , 'colspan' => 1),
                    array( 'value'   => $nbre_dette                 ,  
                           'formule' => $nbre_dette_f               , 'name' => 'Nombre Dette' , 'colspan' => 1),
                    array( 'value'   => $nbre_boursier              , 
                           'formule' => $nbre_boursier_f            , 'name' => 'Nombre Boursier' , 'colspan' => 1),
                ];

                $table->push(collect($row)) ;

                $ite++;

            }
        }

        $table = collect($table->values()->all())->recursive() ;


        $settings_ecole =  new GeneralSettings;
        $nom_ecole = $settings_ecole->nom_ecole ;


        $total__ecolage_attendu = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Écolage attendu')->get('value');
            }) ;

        $total__ecolage_revenu =  $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu écolage')->get('value');
            }) ;

        $total__ecolage_percent = ($total__ecolage_attendu) ? round( (($total__ecolage_revenu* 100.00) / $total__ecolage_attendu ) ,  2 ) : 100;
  
        $total__inscription_attendu = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'inscript. attendu')->get('value');
            })  ;

        $total__inscription_revenu =  $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu inscript.')->get('value');
            });

        $total__inscription_percent = ($total__inscription_attendu) ? round( (($total__inscription_revenu* 100.00) / $total__inscription_attendu ) ,  2 ) : 100;

        $total__revenu_total = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu total.')->get('value');
            }) ;

        $total__ecolage_balance = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Écolage restante')->get('value');
            }) ;
        $total__inscription_balance = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Inscr. restante')->get('value');
            }) ;


        $total__nbre_eleve = $table->sum(function ($row) {
                return (int)$row->firstWhere('name', 'Nombre Eleve')->get('value');
            }) ;
        $total__nbre_dette = $table->sum(function ($row) {
                return (int)$row->firstWhere('name', 'Nombre Dette')->get('value');
            });

        $total__nbre_boursier = $table->sum(function ($row) {
                return (int)$row->firstWhere('name', 'Nombre Boursier')->get('value');
            });


        $total__ecolage_attendu_f     = (string) "=SUM({$_aggregate_ecolage_attendu_column}{$_aggregate_first_row}:{$_aggregate_ecolage_attendu_column}256)" ;
        $total__ecolage_revenu_f      = (string) "=SUM({$_aggregate_ecolage_revenu_column}{$_aggregate_first_row}:{$_aggregate_ecolage_revenu_column}256)" ;
        $total__ecolage_percent_f     = (string) "={$_aggregate_ecolage_revenu_column}{$_aggregate_total_row}/{$_aggregate_ecolage_attendu_column}{$_aggregate_total_row}" ;


        $total__inscription_attendu_f = (string) "=SUM({$_aggregate_inscription_column}{$_aggregate_first_row}:{$_aggregate_inscription_column}256)" ;
        $total__inscription_revenu_f  = (string) "=SUM({$_aggregate_revenu_insc_column}{$_aggregate_first_row}:{$_aggregate_revenu_insc_column}256)" ;
        $total__inscription_percent_f = (string) "={$_aggregate_revenu_insc_column}{$_aggregate_total_row}/{$_aggregate_inscription_column}{$_aggregate_total_row}" ;


        $_aggregate_revenu_total_column = Coordinate::stringFromColumnIndex(8);
        $_aggregate_ecolage_balance_column = Coordinate::stringFromColumnIndex(9);
        $_aggregate_inscription_balance_column = Coordinate::stringFromColumnIndex(10);

        $total__revenu_total_f        = (string) "=SUM({$_aggregate_revenu_total_column}{$_aggregate_first_row}:{$_aggregate_revenu_total_column}256)" ;
        $total__ecolage_balance_f     = (string) "=SUM({$_aggregate_ecolage_balance_column}{$_aggregate_first_row}:{$_aggregate_ecolage_balance_column}256)" ;
        $total__inscription_balance_f = (string) "=SUM({$_aggregate_inscription_balance_column}{$_aggregate_first_row}:{$_aggregate_inscription_balance_column}256)" ;



        $_aggregate_nbre_eleve_column = Coordinate::stringFromColumnIndex(11);
        $_aggregate_nbre_dette_column = Coordinate::stringFromColumnIndex(12);
        $_aggregate_nbre_boursier_column = Coordinate::stringFromColumnIndex(13);

        $total__nbre_eleve_f          = (string) "=SUM({$_aggregate_nbre_eleve_column}{$_aggregate_first_row}:{$_aggregate_nbre_eleve_column}256)" ;
        $total__nbre_dette_f          = (string) "=SUM({$_aggregate_nbre_dette_column}{$_aggregate_first_row}:{$_aggregate_nbre_dette_column}256)" ;
        $total__nbre_boursier_f       = (string) "=SUM({$_aggregate_nbre_boursier_column}{$_aggregate_first_row}:{$_aggregate_nbre_boursier_column}256)" ;


        $total = [
            array('value' => $nom_ecole                  , 'formule' => $nom_ecole                  , 'colspan' => 1),
            array('value' => $total__ecolage_attendu     , 'formule' => $total__ecolage_attendu_f     , 'colspan' => 1),
            array('value' => $total__ecolage_revenu      , 'formule' => $total__ecolage_revenu_f      , 'colspan' => 1),
            array('value' => $total__ecolage_percent     , 'formule' => $total__ecolage_percent_f     , 'colspan' => 1),

            array('value' => $total__inscription_attendu , 'formule' => $total__inscription_attendu_f , 'colspan' => 1),
            array('value' => $total__inscription_revenu  , 'formule' => $total__inscription_revenu_f  , 'colspan' => 1),
            array('value' => $total__inscription_percent , 'formule' => $total__inscription_percent_f , 'colspan' => 1),

            array('value' => $total__revenu_total        , 'formule' => $total__revenu_total_f        , 'colspan' => 1),
            array('value' => $total__ecolage_balance     , 'formule' => $total__ecolage_balance_f     , 'colspan' => 1),
            array('value' => $total__inscription_balance , 'formule' => $total__inscription_balance_f , 'colspan' => 1),

            array('value' => $total__nbre_eleve          , 'formule' => $total__nbre_eleve_f          , 'colspan' => 1),
            array('value' => $total__nbre_dette          , 'formule' => $total__nbre_dette_f          , 'colspan' => 1),
            array('value' => $total__nbre_boursier       , 'formule' => $total__nbre_boursier_f       , 'colspan' => 1), 
        ];


        $info = array(
                'type' => $type,
                'sheet_name' => $sheetName,
                'titre_row' => $titre ,
                'total_row' => $total,
                'header_row' => $header,
                'table' => $table ,
            );

        $this->information->prepend(collect($info));

    }

    function makeSheet($academique){
        if ($academique->has_academique_children ) {
            $children = $academique->academique_children;
            foreach($children as $child){
                $this->makeSheet($child);
            }
        } else {

            $__n_column = Coordinate::stringFromColumnIndex(1);
            $__frais_ecolage_column = Coordinate::stringFromColumnIndex(4);
            $__inscription_column = Coordinate::stringFromColumnIndex(5);
            $__revenu_insc_column = Coordinate::stringFromColumnIndex(6);
            $__1_revenu_column = Coordinate::stringFromColumnIndex(7);
            $__2_revenu_column = Coordinate::stringFromColumnIndex(8);
            $__3_revenu_column = Coordinate::stringFromColumnIndex(9);
            $__4_revenu_column = Coordinate::stringFromColumnIndex(10);
            $__balance_column = Coordinate::stringFromColumnIndex(11);
            $__marquage_column = Coordinate::stringFromColumnIndex(12);


            $type = 'sheet' ;
            $sheetName = $academique->nom_academique;

            $header_offset = 4;
            $first_row = 5;

            $titre = [
                array('value' => "Fiche d'élèves et revenu pour l'année scolaire {$this->annee->nom_annee}",
                      'formule' => "Fiche d'élèves et revenu pour l'année scolaire {$this->annee->nom_annee}",
                      'colspan' => 12),
            ];
            
            $header = [
                array('value' => 'N°'           , 'formule' => 'N°'           , 'colspan' => 1),
                array('value' => 'Nom'          , 'formule' => 'Nom'          , 'colspan' => 1),
                array('value' => 'Prénoms'      , 'formule' => 'Prénoms'      , 'colspan' => 1),
                array('value' => 'Ecolage'      , 'formule' => 'Ecolage'      , 'colspan' => 1),
                array('value' => 'Inscription'  , 'formule' => 'Inscription'  , 'colspan' => 1),
                array('value' => 'Revenu Insc.' , 'formule' => 'Revenu Insc.' , 'colspan' => 1),
                array('value' => 'Revenu 1'     , 'formule' => 'Revenu 1'     , 'colspan' => 1),
                array('value' => 'Revenu 2'     , 'formule' => 'Revenu 2'     , 'colspan' => 1),
                array('value' => 'Revenu 3'     , 'formule' => 'Revenu 3'     , 'colspan' => 1),
                array('value' => 'Revenu 4'     , 'formule' => 'Revenu 4'     , 'colspan' => 1),
                array('value' => 'Reste'        , 'formule' => 'Reste'        , 'colspan' => 1),
                array('value' => 'Marquage'     , 'formule' => 'Marquage'     , 'colspan' => 1),
            ];

            $table = [] ;

            $eleves = $academique->eleves ;
            $eleves = $eleves->sortBy('nom_complet');

            $ite = 1;

            $table = collect([]);
            foreach( $eleves as $query) {
                $fraisInscription = $query->inscription_courante->fraisInscription();
                $need_insc = $query->inscription_courante->needPayementIncription();
                $inscr = ($need_insc)? $fraisInscription : '';
                $rev_inscr = '';
                if($need_insc){
                    $rev_inscr = ($query->inscription_courante->isInscriptionPaye())? $fraisInscription : 0;
                }
                $tranche = $query->inscription_courante->trancheEcolage();
                $tags = '' ;
                foreach($query->inscription_courante->tags as $tag){
                    $tags .= $tag->getTranslation('name', 'court'). ' | ' ;
                }

                $frais_ecolage = $query->inscription_courante->fraisEcolage();
                $balance = $query->inscription_courante->getBalance() ;

                $row = $header_offset + $ite;

                $balance_f = (string) "=-({$__frais_ecolage_column}{$row}-SUM({$__1_revenu_column}{$row}:{$__4_revenu_column}{$row}))";

                $result = [
                    collect(['value' => $ite            , 'formule' => $ite            , 'name' => 'N°'           , 'colspan' => 1 ] ) ,
                    collect(['value' => $query->nom     , 'formule' => $query->nom     , 'name' => 'Nom'          , 'colspan' => 1 ] ) ,
                    collect(['value' => $query->prenoms , 'formule' => $query->prenoms , 'name' => 'Prénoms'      , 'colspan' => 1 ] ) ,
                    collect(['value' => $frais_ecolage  , 'formule' => $frais_ecolage  , 'name' => 'Ecolage'      , 'colspan' => 1 ] ) ,
                    collect(['value' => $inscr          , 'formule' => $inscr          , 'name' => 'Inscription'  , 'colspan' => 1 ] ) ,
                    collect(['value' => $rev_inscr      , 'formule' => $rev_inscr      , 'name' => 'Revenu Insc.' , 'colspan' => 1 ] ) ,
                    collect(['value' => $tranche[0]     , 'formule' => $tranche[0]     , 'name' => 'Revenu 1'     , 'colspan' => 1 ] ) ,
                    collect(['value' => $tranche[1]     , 'formule' => $tranche[1]     , 'name' => 'Revenu 2'     , 'colspan' => 1 ] ) ,
                    collect(['value' => $tranche[2]     , 'formule' => $tranche[2]     , 'name' => 'Revenu 3'     , 'colspan' => 1 ] ) ,
                    collect(['value' => $tranche[3]     , 'formule' => $tranche[3]     , 'name' => 'Revenu 4'     , 'colspan' => 1 ] ) ,
                    collect(['value' => $balance        , 'formule' => $balance_f        , 'name' => 'Reste'        , 'colspan' => 1 ] ) ,
                    collect(['value' => $tags           , 'formule' => $tags           , 'name' => 'Marquage'     , 'colspan' => 1 ] ) ,
                ];
                $table->push(collect($result));
                $ite++;
            }

            //$table = collect($table);

            $total_sum_ecolage = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Ecolage')->get('value');
            });


            $total_sum_ecolage_f = (string) "=SUM({$__frais_ecolage_column}{$first_row}:{$__frais_ecolage_column}256)" ;


            $total_inscription = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Inscription')->get('value')?? 0 ;
            });
            $total_inscription_f = (string) "=SUM({$__inscription_column}{$first_row}:{$__inscription_column}256)" ;


            $total_revenu_inscription = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu Insc.')->get('value');
            });

            $total_revenu_inscription_f = (string) "=SUM({$__revenu_insc_column}{$first_row}:{$__revenu_insc_column}256)" ;


            $total_revenu_1 = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu 1')->get('value');
            });
            $total_revenu_1_f = (string) "=SUM({$__1_revenu_column}{$first_row}:{$__1_revenu_column}256)" ;

            $total_revenu_2 = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu 2')->get('value');
            });
            $total_revenu_2_f = (string) "=SUM({$__2_revenu_column}{$first_row}:{$__2_revenu_column}256)" ;

            $total_revenu_3 = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu 3')->get('value');
            });
            $total_revenu_3_f = (string) "=SUM({$__3_revenu_column}{$first_row}:{$__3_revenu_column}256)" ;


            $total_revenu_4 = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Revenu 4')->get('value');
            });
            $total_revenu_4_f = (string) "=SUM({$__4_revenu_column}{$first_row}:{$__4_revenu_column}256)" ;


            $total_balance = $table->sum(function ($row) {
                return (float)$row->firstWhere('name', 'Reste')->get('value');
            });
            $total_balance_f = (string) "=SUM({$__balance_column}{$first_row}:{$__balance_column}256)" ;



            $total_marquage_bs = $table->sum(function ($row) {
                $b = $row->firstWhere('name', 'Marquage')->get('value');
                $c = preg_match('/(BS)/',$b);
                return $c? 1 : 0 ;
            });
            
            $total_marquage_bs_f = (string) "=COUNTIF({$__marquage_column}{$first_row}:{$__marquage_column}256,\"*BS*\")" ;


            $total = [
                array('value'   => $academique->nom_academique , 
                      'formule' => $academique->nom_academique , 'name' => 'Salle' , 'colspan' => 2),
                array('value'   => 'Total'                     ,
                      'formule' => 'Total'                     , 'name' => 'Texte Total' , 'colspan' => 1),
                array('value'   => $total_sum_ecolage          , 
                      'formule' => $total_sum_ecolage_f        , 'name' => 'Total Ecolage',  'colspan' => 1),
                array('value'   => $total_inscription          , 
                      'formule' => $total_inscription_f       , 'name' => 'Total Inscription', 'colspan' => 1),
                array('value'   => $total_revenu_inscription   , 
                      'formule' => $total_revenu_inscription_f , 'name' => 'Total Revenu Inscription' ,  'colspan' => 1),
                array('value'   => $total_revenu_1             , 
                      'formule' => $total_revenu_1_f           , 'name' => 'Total Revenu Ecolage 1' , 'colspan' => 1),
                array('value'   => $total_revenu_2             , 
                      'formule' => $total_revenu_2_f           , 'name' => 'Total Revenu Ecolage 2' , 'colspan' => 1),
                array('value'   => $total_revenu_3             , 
                      'formule' => $total_revenu_3_f           , 'name' => 'Total Revenu Ecolage 3' , 'colspan' => 1),
                array('value'   => $total_revenu_4             , 
                      'formule' => $total_revenu_4_f           , 'name' => 'Total Revenu Ecolage 4' , 'colspan' => 1),
                array('value'   => $total_balance              , 
                      'formule' => $total_balance_f            , 'name' => 'Total Ecolage Balance', 'colspan' => 1),
                array('value'   => $total_marquage_bs          , 
                      'formule' => $total_marquage_bs_f        , 'name' => 'Nombre Boursier', 'colspan' => 1),
            ];



            $description_eleve_count = $table->count();
            $description_eleve_count_f = (string) "=COUNTIF({$__n_column}{$first_row}:{$__n_column}256,\">0\")" ;

            $description_non_solde_count = $table->sum(function ($row) {
                $b = $row->firstWhere('name', 'Reste')->get('value');
                return ($b > 0.0)? 1 : 0 ;
            });
            $description_non_solde_count_f = (string) "=COUNTIF({$__balance_column}{$first_row}:{$__balance_column}256,\"<0\")" ;


            $description_marquage_ee = $table->sum(function ($row) {
                $b = $row->firstWhere('name', 'Marquage')->get('value');
                $c = preg_match('/(EE)/',$b);
                return $c? 1 : 0 ;
            });

            $description_marquage_ee_f = (string) "=COUNTIF({$__marquage_column}{$first_row}:{$__marquage_column}256,\"*EE*\")" ;


            $description = [
                array('value'   => $description_eleve_count       ,
                      'formule' => $description_eleve_count_f     ,'name' => 'Nombre Eleve', 'colspan' => 1),
                array('value'   => 'Eleves'                       ,
                      'formule' => 'Eleves'                       ,'name' => 'Texte Eleve', 'colspan' => 1),
                array('value'   => ''                             ,
                      'formule' => ''                             ,'name' => 'blank', 'colspan' => 8),
                array('value'   => $description_non_solde_count   ,
                      'formule' => $description_non_solde_count_f ,'name' => 'Nombre Dette', 'colspan' => 1),
                array('value'   => $description_marquage_ee       ,
                      'formule' => $description_marquage_ee_f     ,'name' => 'Nombre Enfant Enseignant', 'colspan' => 1),
            ];

            $info = array(
                'type' => $type,
                'sheet_name' => $sheetName,
                'titre_row' => $titre ,
                'description_row' => $description ,
                'total_row' => $total,
                'header_row' => $header,
                'table' => $table ,
            );

            $this->information->push(collect($info));
        }
    }

    public function downloadExcel()
    {
        $data_information = collect($this->information->values()->all())->recursive();
        $rapport = new RapportEcolageToExcel($data_information);
        return \Excel::download($rapport, \Hp::avatar($this->nom_file).'.xlsx');
    }

    public function render()
    {
        $data_information = null ;
        if($this->information){
           $data_information = collect($this->information->values()->all())->recursive();
        }
        return view('livewire.rapport.finance.rapport-ecolage',['data_information' => $data_information])->layout('layouts.printable');
    }
}
