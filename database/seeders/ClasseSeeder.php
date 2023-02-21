<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MesCycles = \App\Models\CycleAcademique::all();

        $Classes = array(
            "1" => [ 
                array("nom_classe" => "Jardin d'enfants" , "nom_court" => "CI" ), 
                array("nom_classe" => "Cours Preparatoire 1" , "nom_court" => "CP 1" ), 
                array("nom_classe" => "Cours Preparatoire 2" , "nom_court" => "CP 2" ), 
                array("nom_classe" => "Cours Elémentaire 1" , "nom_court" => "CE 1" ), 
                array("nom_classe" => "Cours Elémentaire 2" , "nom_court" => "CE 2" ), 
                array("nom_classe" => "Cours Moyen 1" , "nom_court" => "CM 1" ), 
                array("nom_classe" => "Cours Moyen 2" , "nom_court" => "CM 2" ), 
            ],

            "2" => [ 
                array("nom_classe" => "Sixième" , "nom_court" => "6ème" ), 
                array("nom_classe" => "Cinquième" , "nom_court" => "5ème" ), 
                array("nom_classe" => "Quatrième" , "nom_court" => "4ème" ), 
                array("nom_classe" => "Troisième" , "nom_court" => "3ème" ), 
            ],

            "3" => [ 
                array("nom_classe" => "Seconde" , "nom_court" => "2nde" ), 
                array("nom_classe" => "Prémière" , "nom_court" => "1ère" ), 
                array("nom_classe" => "Terminale" , "nom_court" => "Term" ), 
            ],

            "4" => [ 
                array("nom_classe" => "Seconde" , "nom_court" => "2nde" ), 
                array("nom_classe" => "Prémière" , "nom_court" => "1ère" ), 
                array("nom_classe" => "Terminale" , "nom_court" => "Term" ), 
            ],
        ) ;

        // array('Primaire' => true, 'Collège' => true , 'Lycée' => true , 'Lycée Technique' => false );

        $annee = \App\Models\AnneeAcademique::first()->id;
        foreach ($MesCycles as $cycles) {
            if($cycles->ouvert_cette_annee){

                foreach ($Classes[$cycles->id] as $classe) {
                
                    \App\Models\Classe::create([
                        'nom_classe' => $classe['nom_classe'],
                        'nom_court' => $classe['nom_court'],
                        'serie' => null,
                        'matiere_au_choix' => true,
                        'max_matiere_au_choix' => 2,
                        'ouvert_pour_inscription' => true,
                        'active' => true,
                        'cycle_academique_id' => $cycles->id,
                    ]);

                }


            }
        }
    }
}