<?php

namespace App\Http\Livewire\Graphe\Payement;

use Livewire\Component;

class ProgressionInscription extends Component
{
    public $academique ;
    public $information ;

    public function mount($academique){
        $this->academique = $academique;
    }


    public function loadData(){
        if($this->academique){

            if(!$this->academique->has_academique_children){
                // classe
                $eleves = $this->academique->eleves ;
                $info = $eleves->map(function ($query) {
                    $data = array();
                    $data['needInscription'] = $query->inscription_courante->needPayementIncription()? 1 : 0 ;
                    $data['isPaid'] = $query->inscription_courante->isInscriptionPaye()? 1 : 0 ;
                    $data["valeur_inscription"] = $query->inscription_courante->fraisInscription();
                    return collect($data);
                });
                debug($info);
                $labels = ['Inscription Payé','inscription Non Payé'];
                $paye = $info->where('needInscription',1)->where('isPaid',1)->sum('valeur_inscription');
                $non_paye = $info->where('needInscription',1)->where('isPaid',0)->sum('valeur_inscription');
                $data= [$paye, $non_paye];
                $this->information = ['labels' => $labels , 'data' => $data ];
                $this->dispatchBrowserEvent('GrapheProgressionInscriptionLoadData', ['labels' => $labels , 'data' => $data ]);
            }else{

                $labels = ['Inscription Payé','inscription Non Payé'];

                $paye = 0;
                $non_paye = 0;

                $count_paye = 0;
                $count_non_paye = 0;

                foreach($this->academique->academique_children as $child) {
                    $eleves_child = $child->eleves ;
                    $info_child = $eleves_child->map(function ($query) {
                        $data = array();
                        $data['needInscription'] = $query->inscription_courante->needPayementIncription()? 1 : 0 ;
                        $data['isPaid'] = $query->inscription_courante->isInscriptionPaye()? 1 : 0 ;
                        $data["valeur_inscription"] = $query->inscription_courante->fraisInscription();
                        return collect($data);
                    });

                    $paye_child = $info_child->where('needInscription',1)->where('isPaid',1)->sum('valeur_inscription');
                    $non_paye_child = $info_child->where('needInscription',1)->where('isPaid',0)->sum('valeur_inscription');

                    $paye += $paye_child;
                    $non_paye += $non_paye_child;

                    $count_paye_child = $info_child->where('needInscription',1)->where('isPaid',1)->count();
                    $count_non_paye_child = $info_child->where('needInscription',1)->where('isPaid',0)->count();

                    $count_paye = $count_paye_child;
                    $count_non_paye = $count_non_paye_child;

                    $total_child = $paye_child + $non_paye_child ;
                    $percent_paye_child = ($total_child) ? round( (($paye_child*100.00) / $total_child ) , 2 ) : 100.00 ;
                    $percent_non_paye_child = ($total_child) ? round( (($non_paye_child*100.00) / $total_child ) , 2 ) : 0.0  ;

                    $table_clild = [  
                        array('label' => 'Inscription Payé', 'color' => 'primary' ,'value' => $paye_child , 'count' => $count_paye_child , 'percent' => $percent_paye_child ) , 
                        array('label' => 'Inscription Non Payé' , 'color' => 'danger' ,'value' => $non_paye_child , 'count' => $count_non_paye_child , 'percent' => $percent_non_paye_child ) ,
                    ];

                    $this->information['child'][] = ['data' => $table_clild , 'nom_academique' => $child->nom_academique ];
                }
                $total = $paye + $non_paye ;
                $percent_paye = ($total) ? round( (($paye*100.00) / $total ) , 2 ) : 100.00 ;
                $percent_non_paye = ($total) ? round( (($non_paye*100.00) / $total ) , 2 ) : 0.0  ;

                $table = [  
                        array( 'label' => 'Inscription Payé' ,'value' => $paye , 'color' => 'primary' , 'count' => $count_paye , 'percent' => $percent_paye ) , 
                        array( 'label' => 'Inscription Non Payé' ,'value' => $non_paye , 'color' => 'danger' , 'count' => $count_non_paye , 'percent' => $percent_non_paye ) ,
                ];

                $this->information['self'] = ['data' => $table , 'nom_academique' => $this->academique->nom_academique ];


                debug($this->information);

                $data = [$paye, $non_paye];
                $this->dispatchBrowserEvent('GrapheProgressionInscriptionLoadData', ['labels' => $labels , 'data' => $data ]);

            }
        }

    }


    public function render()
    {
        return view('livewire.graphe.payement.progression-inscription');
    }
}
