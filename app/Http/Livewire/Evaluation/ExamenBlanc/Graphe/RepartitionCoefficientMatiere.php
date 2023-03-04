<?php

namespace App\Http\Livewire\Evaluation\ExamenBlanc\Graphe;

use Livewire\Component;
use App\Models\ExamenBlanc\Examen ;
use App\Models\ExamenBlanc\Matiere ;


class RepartitionCoefficientMatiere extends Component
{
    public $examen ;
    public function mount(Examen $examen){

    }

    protected $listeners = [
        'listeMatiereExamenBlancChange' => 'loadData',
    ];

    public function loadData(){
        if($this->examen){
            $listeMatiere = $this->examen->matieres()->where('active',true)->get();
            if(!$listeMatiere ){
                $labels = [];
                $colors = [];
                $colorsHover = [];
                $data = [];
                $info = [
                    'labels' => $labels , 
                    'data' => $data ,
                    'color' => $colors ,
                    'hover' => $colorsHover ,
                ];
                $this->dispatchBrowserEvent('GrapheRepartitionCoefficientMatiereLoadData', $info);
            }else{

                $colorList = [
                    "rgb(239 68 68 / 0.8)",
                    "rgb(249 115 22 / 0.8)",
                    "rgb(245 158 11 / 0.8)",
                    "rgb(132 204 22 / 0.8)",
                    "rgb(34 197 94 / 0.8)",
                    "rgb(20 184 166 / 0.8)",
                    "rgb(6 182 212 / 0.8)",
                    "rgb(14 165 233 / 0.8)",
                    "rgb(59 130 246 / 0.8)",
                    "rgb(99 102 241 / 0.8)",
                    "rgb(139 92 246 / 0.8)",
                    "rgb(236 72 153 / 0.8)",
                    "rgb(244 63 94 / 0.8)",
                ];
                $colorHoverList = [
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
                $colorsHover = [];
                $data = [];
                foreach($listeMatiere as $key => $matiere){
                    $labels[] = $matiere->nom_matiere_court;
                    $index = $key%13;
                    $colors[] = $colorList[$index];
                    $colorsHover[] = $colorHoverList[$index];
                    $data[] = $matiere->coeficient;
                }
                $info = [
                    'labels' => $labels , 
                    'data' => $data ,
                    'color' => $colors ,
                    'hover' => $colorsHover ,
                ];

                $this->dispatchBrowserEvent('GrapheRepartitionCoefficientMatiereLoadData', $info);
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.examen-blanc.graphe.repartition-coefficient-matiere');
    }
}
