<?php

namespace App\Http\Livewire\Graphe\Payement;

use Livewire\Component;
use Illuminate\Support\Str;

class ProgressionPayement extends Component
{
    public $academique ;
    public $information ;

    public $eventCustom = 'GrapheProgressionPayementLoadData' ;

    public function mount($academique){
        $this->academique = $academique;
        if($this->academique){
            $this->eventCustom = "GrapheProgressionPayementLoadData_".Str::slug($this->academique->nom_academique.'_'.uniqid(),'_');
            debug($this->eventCustom);

        }

    }


    public function loadData(){
        if($this->academique){

            if(!$this->academique->has_academique_children){
                // classe
                $eleves = $this->academique->eleves ;
                $info = $eleves->map(function ($query) {
                    $data = array();
                    $data['frais_restant'] = $query->inscription_courante->getBalance();
                    $data["frais_ecolage"] = $query->inscription_courante->fraisEcolage();
                    $data['frais_paye'] = $data["frais_ecolage"] - $data['frais_restant'] ;

                    return collect($data);
                });
                $labels = ['Ecolage Payé','Ecolage Restant'];

                $paye = $info->sum('frais_paye');
                $restant = $info->sum('frais_restant');
                $total = $info->sum('frais_ecolage');

                $percent_paye = ($total) ? round( (($paye*100.00) / $total ) , 2 ) : 100.00 ;
                $percent_restant = ($total) ? round( (($restant*100.00) / $total ) , 2 ) : 0.0  ;

                $data= [$paye, $restant];

                $table = [  
                    array('label' => 'Ecolage Payé',
                          'color' => 'primary' ,
                          'value' => $paye , 
                          'percent' => $percent_paye 
                      ) , 
                    array('label' => 'Ecolage Restant' ,
                          'color' => 'warning' ,
                          'value' => $restant , 
                          'percent' => $percent_restant 
                      ) ,
                ];

                $this->information['self'] = ['data' => $table , 'nom_academique' => $this->academique->nom_academique ];
                $this->dispatchBrowserEvent($this->eventCustom, ['labels' => $labels , 'data' => $data ]);

            }else{

                
                $labels = ['Ecolage Payé','Ecolage Restant'];

                $paye = 0;
                $restant = 0;
                $total = 0;

                foreach($this->academique->academique_children as $child) {
                    $eleves = $child->eleves ;
                    $info_child = $eleves->map(function ($query) {
                        $data = array();
                        $data['frais_restant'] = $query->inscription_courante->getBalance();
                        $data["frais_ecolage"] = $query->inscription_courante->fraisEcolage();
                        $data['frais_paye'] = $data["frais_ecolage"] - $data['frais_restant'] ;
                        return collect($data);
                    });

                    
                    $paye_child = $info_child->sum('frais_paye');
                    $restant_child = $info_child->sum('frais_restant');
                    $total_child = $info_child->sum('frais_ecolage');

                    $paye += $paye_child;
                    $restant += $restant_child;
                    $total += $total_child;


                    $percent_paye_child = ($total_child) ? round( (($paye_child*100.00) / $total_child ) , 2 ) : 100.00 ;
                    $percent_restant_child = ($total_child) ? round( (($restant_child*100.00) / $total_child ) , 2 ) : 0.0  ;
                    
                    $table_clild = [  
                        array('label' => 'Ecolage Payé',
                              'color' => 'primary' ,
                              'value' => $paye_child , 
                              'percent' => $percent_paye_child 
                          ) , 
                        array('label' => 'Ecolage Restant' ,
                              'color' => 'warning' ,
                              'value' => $restant_child , 
                              'percent' => $percent_restant_child 
                          ) ,
                    ];

                    $this->information['child'][] = ['data' => $table_clild , 'nom_academique' => $child->nom_academique ];
                }

                $percent_paye = ($total) ? round( (($paye*100.00) / $total ) , 2 ) : 100.00 ;
                $percent_restant = ($total) ? round( (($restant*100.00) / $total ) , 2 ) : 0.0  ;

                $data = [$paye, $restant];

                $table = [ 
                    array('label' => 'Ecolage Payé',
                          'color' => 'primary' ,
                          'value' => $paye , 
                          'percent' => $percent_paye 
                      ) , 
                    array('label' => 'Ecolage Restant' ,
                          'color' => 'warning' ,
                          'value' => $restant , 
                          'percent' => $percent_restant 
                      ) ,
                ];

                $this->information['self'] = ['data' => $table , 'nom_academique' => $this->academique->nom_academique ];
                $this->dispatchBrowserEvent($this->eventCustom, ['labels' => $labels , 'data' => $data ]);

            }
        }

    }


    public function render()
    {
        return view('livewire.graphe.payement.progression-payement');
    }
}
