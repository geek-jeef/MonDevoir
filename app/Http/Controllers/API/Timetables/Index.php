<?php

namespace App\Http\Controllers\API\Timetables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Enseignant;

class Index extends Controller
{
    public function PlanningEnseignant(Request $request, Enseignant $enseignant )
    {
        $annee = \Hp::annee();
        $cours = $enseignant->cours;

        if($cours){
          $cours = $cours->where('annee_academique_id', $annee->id);
        }


        $data = 
          $cours->map(function ($query) {
              $query->event = $query->getEvent() ;
              return $query->event;
            })
        ;
        return $data ;
    }

    public function PlanningClasse(Request $request)
    {

        $annee = \Hp::annee();
        $cours = $annee->cours();

        if(isset($request['salle_id']) && $request['salle_id'] != "null" && $request['salle_id'] != null ){
           $cours = $cours->where('cours.salle_id', $request['salle_id']);
        }elseif(isset($request['classe_id']) && $request['classe_id'] != 'null' && $request['classe_id'] != null ){
           $cours = $cours->where('classes.id', $request['classe_id']);
        }elseif( isset($request['cycle_id']) && $request['cycle_id'] != 'null' && $request['cycle_id'] != null ){
          $cours = $cours->where('cycle_academiques.id', $request['cycle_id']);
        }else{
          $cours = $cours->where('classes.cycle_academique_id', 0);
        };

        $data = 
          $cours
          ->get()
          ->map(function (Cours $query) {

              $query->event = $query->getEvent();
            })
        ;

        return $data;


    }

}
