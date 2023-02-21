<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AnneeAcademique;
use App\Models\Eleve;
use App\Models\Cours;

use App\Models\Salle;
use App\Models\Classe;

use App\Models\Enseignant;
use App\Models\CycleAcademique;







use Illuminate\Support\Facades\DB;

class DatatablesController extends Controller
{
    
    public function ElevesTablesData(Request $request)
    {
        $annee = \Hp::annee();
        $eleves = $annee->eleves();

        if(isset($request['salle']) && $request['salle'] != null ){

           $eleves = $eleves->where('salles.id', $request['salle']);

        }elseif(isset($request['classe']) && $request['classe'] != null ){

           $eleves = $eleves->where('classes.id', $request['classe']);

        }elseif( isset($request['cycle']) && $request['cycle'] != null ){

           $eleves = $eleves->where('cycle_academiques.id', $request['cycle']);

        }else{
            $eleves = $eleves->where('cycle_academiques.id', 0);
        };
        $eleves = $eleves->orderBy('eleves.nom')->orderBy('eleves.prenoms');

        return datatables($eleves->get())->toJson();

    }

    public function CoursTablesData(Request $request)
    {
        $annee = \Hp::annee();
        $cours = $annee->cours();

        if(isset($request['salle']) && $request['salle'] != null ){
           $cours = $cours->where('cours.salle_id', $request['salle']);
        }elseif(isset($request['classe']) && $request['classe'] != null ){
           $cours = $cours->where('classes.id', $request['classe']);
        }elseif( isset($request['cycle']) && $request['cycle'] != null ){
           $cours = $cours->where('cycle_academiques.id', $request['cycle']);
        }

        return datatables(
          $cours
          ->get()
          ->map(function ($query) {
              $query->info = [
                'id' => $query->cours_id,
                'jour' => Cours::JourSemaine($query->jour) ,
                'heure_debut' => $query->heure_debut ,
                'heure_fin' => $query->heure_fin ,
                'nom_du_cours' => $query->nom_matiere_court." Avec ". $query->nom ." ".$query->prenoms ,
                'salle' => [
                            'id' =>  $query->salle_id , 
                            'nom_salle' => $query->nom_salle 
                          ],
                'enseignant' => [ 
                            'id' => $query->enseignant_id, 
                            'nom_complet' => $query->nom ." ".$query->prenoms ,
                            'phone' => $query->phone ,
                            'genre' => $query->genre,
                            'image' => route('avatar',[$query->nom ." ".$query->prenoms])
                          ],
                'matiere' => [ 
                            'id' => $query->matiere_id ,
                            'nom_matiere' => $query->nom_matiere ,
                            'nom_matiere_court' => $query->nom_matiere_court ,
                            'coeficient' => $query->coeficient ,
                               ],
                'classe'  => [ 
                            'id' => $query->classe_id ,
                            'nom_classe' => $query->nom_classe ,
                            'nom_court' => $query->nom_court ,
                            'serie' => $query->serie ,
                            ],
                'annee' => [ 
                            'id' => $query->annee_academique_id ,
                            'nom_annee' => $query->nom_annee ,
                            'id' => $query->annee_academique_id ,
                ],
                'cycle' => [ 
                          'id' => $query->cycle_academique_id ,
                          'nom_cycle' => $query->nom_cycle ,
                 ]
                 ];
              
                 
              return $query->info;
            })
        )->toJson();

    }
}
