<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Resultat;

use Livewire\Component;
use App\Models\AnneeAcademique;

use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Registre ;
use App\Models\ExamenBlanc\Matiere ;
use App\Models\ExamenBlanc\Etablissement ;
use Illuminate\Support\Arr;
use WireUi\Traits\Actions;

use App\Exports\ExamenBlanc\MultipleCollection as ExamenExcelCollection ;
use App\Exports\Collection as ExportCollection ;


class Rapports extends Component
{
    use Actions;
    public $examen ;
    public $collection;
    public $data_rapport;
    
    public $filtre_etablissement;
    public $titre = "Statistiques Générales" ;
    public function mount(Examen $examen, $collection){
        $this->collection = $collection;
    }

    protected $listeners = [
        'Initialisation' => 'Initialisation',
        'formatRadar' => 'formatChartRadarData',
        'formatTaux' => 'formatChartTauxReussite',
    ];

    public function Initialisation(){
        $this->formatRapportData();
        $this->emit('formatRadar');
    }

    public function formatRapportData(){
        $selection = collect($this->collection->values()->all())->recursive();
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $selection = $selection->where('etablissement.id', $this->filtre_etablissement);
        }
        $matieres = $this->examen->matieres;
        $intervalles = [
            ["nom" => "[0;2[", "min" => ["value" => 0 , "include" => true], "max" => ["value" => 2 , "include" => false] ],
            ["nom" => "[2;4[", "min" => ["value" => 2 , "include" => true], "max" => ["value" => 4 , "include" => false] ],
            ["nom" => "[4;6[", "min" => ["value" => 4 , "include" => true], "max" => ["value" => 6 , "include" => false] ],
            ["nom" => "[6;8[", "min" => ["value" => 6 , "include" => true], "max" => ["value" => 8 , "include" => false] ],
            ["nom" => "[8;10[", "min" => ["value" => 8 , "include" => true], "max" => ["value" => 10 , "include" => false] ],
            ["nom" => "[10;12[", "min" => ["value" => 10 , "include" => true], "max" => ["value" => 12 , "include" => false] ],
            ["nom" => "[12;14[", "min" => ["value" => 12 , "include" => true], "max" => ["value" => 14 , "include" => false] ],
            ["nom" => "[14;16[", "min" => ["value" => 14 , "include" => true], "max" => ["value" => 16 , "include" => false] ],
            ["nom" => "[16;18[", "min" => ["value" => 16 , "include" => true], "max" => ["value" => 18 , "include" => false] ],
            ["nom" => "[18;20[", "min" => ["value" => 18 , "include" => true], "max" => ["value" => 20 , "include" => true] ],
        ];
        $intervalles = json_decode (json_encode ($intervalles), FALSE);
        $data = collect([]);
        $header1 = ["Matieres",
            "[0;2[", "[2;4[", "[4;6[", "[6;8[", "[8;10[", "[10;12[", "[12;14[", "[14;16[", "[16;18[", "[18;20[", 
            "Moyenne","Minimum","Maximum", "N>=10","Effectif" ,
        ];

        foreach($matieres as $matiere){
            $info = collect([]);
            $info->put('Matieres', $matiere->nom_matiere_court);

            $notes = collect([]);

            foreach ($intervalles as $intervalle) {
                $counted = $selection->countBy(function ($element) use ($intervalle,$matiere, $notes) {
                    
                    $notable_index = data_get($element,'matieres')->search(
                        function ($item) use ($matiere) {
                            return $item['id'] == $matiere->id;
                        }
                    );
                    $note = data_get($element,"matieres.{$notable_index}.note") ?? null;
                    $notes->put($element['id'],$note);

                    if(($intervalle->max->include == false)){
                        $present = ($note >= (float) $intervalle->min->value )  &&  ( $note < (float) $intervalle->max->value );
                        return $present ;
                    }else{
                        $present = ($note >= (float) $intervalle->min->value )  &&  ( $note <= (float) $intervalle->max->value );
                        return $present ;
                    }
                });

                $info->put($intervalle->nom, $counted["1"]?? 0);
            }

            $moyenne = round($notes->average(), 2);
            $min = round($notes->min(), 2);
            $max = round($notes->max(), 2);

            $sup = $notes->countBy(function ($note) {
                return ($note >= 10);
            });

            $effectif = $notes->countBy(function ($note) {
                return ($note != null);
            });

            $info->put('Moyenne', $moyenne);
            $info->put('Minimum', $min);
            $info->put('Maximum', $max);
            $info->put('N>=10', $sup["1"]??0);
            $info->put('Effectif', $effectif["1"]??0);


            $data->push($info);
        }

        $info = collect([]);
        $info->put('Matieres', 'Toutes');
        foreach ($intervalles as $intervalle) {
            $counted = $selection->countBy(function ($element) use ($intervalle) {
                $note = (float) data_get($element,"moyenne.valeur") ?? 0;
                if(($intervalle->max->include == false)){
                    $present = ($note >= (float) $intervalle->min->value )  &&  ( $note < (float) $intervalle->max->value );
                    return $present ;
                }else{
                    $present = ($note >= (float) $intervalle->min->value )  &&  ( $note <= (float) $intervalle->max->value );
                    return $present ;
                }
            });
            $info->put($intervalle->nom, $counted["1"]?? 0);
        }

        $moyenne = round($selection->average('moyenne.valeur'), 2);
        $min = round($selection->min('moyenne.valeur'), 2);
        $max = round($selection->max('moyenne.valeur'), 2);

        $sup = $selection->countBy(function ($element) {
            return (data_get($element, 'moyenne.valeur') >= 10);
        });

        $effectif = $selection->countBy(function ($element) {
            return (data_get($element, 'moyenne.valeur') != null);
        });

        $info->put('Moyenne', $moyenne);
        $info->put('Minimum', $min);
        $info->put('Maximum', $max);
        $info->put('N>=10', $sup["1"]??0);
        $info->put('Effectif', $effectif["1"]??0);

        $data->push($info);
        $this->data_rapport = array('header1' => $header1 , 'data' => $data);

    }

    public function formatChartRadarData(){
        
        $labels = collect([]);
        $datasets = collect([]);
        $min_data = collect([]);
        $moy_data = collect([]);
        $max_data = collect([]);

        $base = $this->data_rapport['data'] ?? [];

        foreach($base as $matiere){

            if($matiere['Matieres'] != 'Toutes'){
                $labels->push($matiere['Matieres']);
                $min_data->push($matiere['Minimum']);
                $moy_data->push($matiere['Moyenne']);
                $max_data->push($matiere['Maximum']);
            }
        }
        
        $set_minimum = [
            'label' => 'Minimum',
            'data' => $min_data,
            'borderColor' => "rgb(220 38 38 / 1)",  
            'backgroundColor' => "rgb(220 38 38 / 0.2)",
        ] ;

        $set_moyenne = [
            'label' => 'Moyenne',
            'data' => $moy_data,
            'borderColor' => "rgb(37 99 235 / 1)" ,
            'backgroundColor' => "rgb(37 99 235 / 0.2)"
        ] ;

        $set_maximum = [
            'label' => 'Maximum',
            'data' => $max_data,
            'borderColor' =>"rgb(22 163 74 / 1)",
            'backgroundColor' => "rgb(22 163 74 / 0.2)"
        ] ;

        $datasets->push($set_minimum);
        $datasets->push($set_moyenne);
        $datasets->push($set_maximum);

        $info = array('labels' => $labels->toArray(), 'datasets' => $datasets->toArray());
        $this->dispatchBrowserEvent('GrapheAggregatMatiereLoadData', $info);
        $this->emit('formatTaux');

    }

    public function formatChartTauxReussite(){

        $colorList = [
            "rgb(239 68 68 / 0.2)",
            "rgb(249 115 22 / 0.2)",
            "rgb(245 158 11 / 0.2)",
            "rgb(132 204 22 / 0.2)",
            "rgb(34 197 94 / 0.2)",
            "rgb(20 184 166 / 0.2)",
            "rgb(6 182 212 / 0.2)",
            "rgb(14 165 233 / 0.2)",
            "rgb(59 130 246 / 0.2)",
            "rgb(99 102 241 / 0.2)",
            "rgb(139 92 246 / 0.2)",
            "rgb(236 72 153 / 0.2)",
            "rgb(244 63 94 / 0.2)",
        ];
        $colorHoverList = [
            "rgb(239 68 68 / 0.5)",
            "rgb(249 115 22 / 0.5)",
            "rgb(245 158 11 / 0.5)",
            "rgb(132 204 22 / 0.5)",
            "rgb(34 197 94 / 0.5)",
            "rgb(20 184 166 / 0.5)",
            "rgb(6 182 212 / 0.5)",
            "rgb(14 165 233 / 0.5)",
            "rgb(59 130 246 / 0.5)",
            "rgb(99 102 241 / 0.5)",
            "rgb(139 92 246 / 0.5)",
            "rgb(236 72 153 / 0.5)",
            "rgb(244 63 94 / 0.5)",
        ];
        $colorBorderList = [
            "rgb(239 68 68 / 1)",
            "rgb(249 115 22 / 1)",
            "rgb(245 158 11 / 1)",
            "rgb(132 204 22 / 1)",
            "rgb(34 197 94 / 1)",
            "rgb(20 184 166 / 1)",
            "rgb(6 182 212 / 1)",
            "rgb(14 165 233 / 1)",
            "rgb(59 130 246 / 1)",
            "rgb(99 102 241 / 1)",
            "rgb(139 92 246 / 1)",
            "rgb(236 72 153 / 1)",
            "rgb(244 63 94 / 1)",
        ];
        $labels = [];
        $colors = [];
        $borders = [];
        $colorsHover = [];
        $data = [];
        $base = $this->data_rapport['data'] ?? [];

        foreach($base as $key => $item){
            $labels[] = $item['Matieres'];
            $index = $key%13;
            $colors[] = $colorList[$index];
            $borders[] = $colorBorderList[$index];
            $colorsHover[] = $colorHoverList[$index];
            $taux = ($item['Effectif']) ? ( $item['N>=10'] )/( (float) $item['Effectif'])  : 0 ;
            $data[] = round($taux*100, 2) ;
        }

        $info = [
            'labels' => $labels , 
            'data' => $data ,
            'color' => $colors ,
            'border' => $borders ,
            'hover' => $colorsHover ,
        ];

        $datasets = collect([]);
        $datasets->push( [
                'label' => "Taux De Reussite",
                'data' => $info['data'],
                'backgroundColor' => $info['color'],
                'borderColor'=> $info['border'],
                'hoverBorderColor' => $info['border'],
                'hoverBackgroundColor'=> $info['hover'],
                'borderWidth'=> 3,
            ]);

        $output = array('labels' => $info['labels'], 'datasets' => $datasets->toArray());
        $this->dispatchBrowserEvent('GrapheTauxReussiteLoadData', $output);
    }

    public function scopeEtablissement(){
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $ecole = Etablissement::find($this->filtre_etablissement);
            if($ecole){
                $this->titre = "Statistiques Générales - ". $ecole->nom_etablissement_court;
            }
        }else{
            $this->titre = "Statistiques Générales ";
        }
        $this->Initialisation();
    }


    public function importToExcel(){
        $dashbord = $this->exportSheetDashboard();
        $brut = $this->exportSheetBrut();
        $classeur = collect([$dashbord , $brut]);
        $fichier = new ExamenExcelCollection($classeur);
        return \Excel::download( $fichier ,  $this->examen->nom_examen.' - '.$this->titre.'.xlsx');
    }

    public function exportSheetDashboard(){
        $selection2 = collect($this->data_rapport)->recursive();

        $source2 = $selection2['data'] ?? [];

        foreach($source2 as $key => $item){
            $taux = ($item['Effectif']) ? ( $item['N>=10'] )/( (float) $item['Effectif'])  : 0 ;
            $item->put('Taux De Reussite', round($taux*100, 2));
        }

        $header2 = $selection2['header'] ?? [];
            $header2->push('Taux De Reussite');
        $source2->prepend($header2);

        $styles2 = [
            1 => ['font' => ['bold' => true]],
        ];
        $sheet2 = [
            'type' => ExamenExcelCollection::SHEET_DASHBOARD,
            'data' => $source2,
            'examen' => $this->examen ,
            'styles' => $styles2,
            'title' => 'Dashboard',
        ];

        return $sheet2;
    }

    public function exportSheetBrut(){
        //sheet Brut
        $selection = collect($this->collection->values()->all())->recursive();
        if($this->filtre_etablissement &&  $this->filtre_etablissement != "0"){
            $selection = $selection->where('etablissement.id', $this->filtre_etablissement);
        }
        $source1 = collect([]);
        foreach ($selection as $item) {
            $query =  json_decode( json_encode($item) ,false);
            $row = collect([]);

            $row->put('id',$query->id);
            $row->put('nom',$query->nom);
            $row->put('prenoms',$query->prenoms);
            $row->put('genre',$query->genre);
            $row->put('date_de_naissance',$query->date_de_naissance);
            $row->put('lieu_de_naissance',$query->lieu_de_naissance);
            $row->put('salle',$query->data->salle ?? '');

            $row->put('nom_etablissement',$query->etablissement->nom_etablissement);
            $row->put('nom_etablissement_court',$query->etablissement->nom_etablissement_court);

            foreach($this->examen->matieres as $matiere_){
                $eleve_note = $item['matieres']->firstWhere('id', $matiere_['id']);
                $row->put( "Note de {$eleve_note['nom_matiere']} ({$eleve_note['coeficient']})"   ,$eleve_note['note'] ?? '');
            }

            $row->put('moyenne',$query->moyenne->valeur);
            $row->put('rang',$query->moyenne->rang);
            $row->put('rang_etablissement',$query->moyenne->rang_etablissement);
            $source1->push($row);
        }
        $header1 = collect([]);
            $header1->push('id');
            $header1->push('nom');
            $header1->push('prenoms');
            $header1->push('genre');

            $header1->push('date_de_naissance');
            $header1->push('lieu_de_naissance');
            $header1->push('salle');
            $header1->push('nom_etablissement');
            $header1->push('nom_etablissement_court');
            foreach($this->examen->matieres as $matiere_){
                $header1->push( "Note de {$matiere_['nom_matiere_court']} ({$matiere_['coeficient']})" );
            }
            $header1->push('moyenne');
            $header1->push('rang');
            $header1->push('rang_etablissement');
        $source1->prepend($header1);
        $styles1 = [
            1 => ['font' => ['bold' => true]],
        ];
        $sheet1 = [
            'type' => ExamenExcelCollection::SHEET_COLLECTION,
            'data' => $source1,
            'styles' => $styles1,
            'title' => "Données Bruts - {$this->examen->nom_examen}",
        ];
        
        return $sheet1;
    }

    public function render()
    {
        return view('livewire.evaluation.examen-blanc.resultat.rapports');
    }
}
