<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ListeMatiere = array(
            '1' => array(
                'Dictée/Questions' => array('court' => 'D/Q' , 'type' => 1 , 'coeficient' => 2) ,
                'Etude De Texte' => array('court' => 'Etude De Texte' , 'type' => 1 , 'coeficient' => 2) ,
                'Calcul Mental' => array('court' => 'Calcul Mental', 'type' => 1  , 'coeficient' => 1) ,
                'Calcul Ecrit' => array('court' => 'Calcul Ecrit' , 'type' => 1 , 'coeficient' => 1) ,
                'Probleme' => array('court' => 'Probleme' , 'type' => 1 , 'coeficient' => 1) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 1) ,
                'Lecture' => array('court' => 'Lecture' , 'type' => 1 , 'coeficient' => 1) ,
                'Dessin' => array('court' => 'Dessin' , 'type' => 1 , 'coeficient' => 1) ,
                'EDUSIVIP' => array('court' => 'EDUSIVIP' , 'type' => 1 , 'coeficient' => 1) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Recitation' => array('court' => 'Recitation' , 'type' => 1 , 'coeficient' => 1) ,
                'Construction De Phrase' => array('court' => 'Construction De Phrase' , 'type' => 2 , 'coeficient' => 1) ,
                'Langage' => array('court' => 'Langage' , 'type' => 1 , 'coeficient' => 1) ,
                'Ecriture' => array('court' => 'Ecriture' , 'type' => 1 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Informatique' , 'type' => 1 , 'coeficient' => 1) ,
            ),
            '2' => array(
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) , 
                'Dictée/Questions' => array('court' => 'D/Q' , 'type' => 1 , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 2) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 2) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Musique' => array('court' => 'Musique' , 'type' => 2 , 'coeficient' => 1) ,
                'Dessin' => array('court' => 'Dessin' , 'type' => 2 , 'coeficient' => 1) ,
            ),
            '3' => array(
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) , 
                'Dictée/Questions' => array('court' => 'D/Q' , 'type' => 1 , 'coeficient' => 2) ,
                'Philosophie' => array('court' => 'Philo', 'type' => 1  , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 2) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 2) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Musique' => array('court' => 'Musique' , 'type' => 2 , 'coeficient' => 1) ,
                'Agriculture' => array('court' => 'Agriculture' , 'type' => 2 , 'coeficient' => 1) ,
                'Ewe' => array('court' => 'Ewe' , 'type' => 2 , 'coeficient' => 1) ,
                'Kabye' => array('court' => 'Kabye' , 'type' => 2 , 'coeficient' => 1) ,
                'Couture' => array('court' => 'Couture' , 'type' => 2 , 'coeficient' => 1) ,
                'Dessin' => array('court' => 'Dessin' , 'type' => 2 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Informatique' , 'type' => 1 , 'coeficient' => 1) ,
            ),
            '4'=> array(
                'Français' => array('court' => 'Français' , 'type' => 1 , 'coeficient' => 2) , 
                'Dictée/Questions' => array('court' => 'D/Q' , 'type' => 1 , 'coeficient' => 2) ,
                'Philosophie' => array('court' => 'Philo', 'type' => 1  , 'coeficient' => 2) ,
                'Anglais' => array('court' => 'Anglais' , 'type' => 1 , 'coeficient' => 2) ,
                'Allemand' => array('court' => 'Allemand' , 'type' => 1 , 'coeficient' => 2) ,
                'Histoire-Géographie' => array('court' => 'Histo-Géo' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Civique et Moral' => array('court' => 'E.C.M.' , 'type' => 1 , 'coeficient' => 2) ,
                'Mathématiques' => array('court' => 'Maths' , 'type' => 1 , 'coeficient' => 2) ,
                'Physiques Chimie et Téchnologie' => array('court' => 'PCT' , 'type' => 1 , 'coeficient' => 2) ,
                'Science de la Vie et de la Terre' => array('court' => 'S.V.T.' , 'type' => 1 , 'coeficient' => 2) ,
                'Enseignement Physique et Sportive' => array('court' => 'E.P.S.' , 'type' => 1 , 'coeficient' => 1) ,
                'Musique' => array('court' => 'Musique' , 'type' => 2 , 'coeficient' => 1) ,
                'Agriculture' => array('court' => 'Agriculture' , 'type' => 2 , 'coeficient' => 1) ,
                'Ewe' => array('court' => 'Ewe' , 'type' => 2 , 'coeficient' => 1) ,
                'Kabye' => array('court' => 'Kabye' , 'type' => 2 , 'coeficient' => 1) ,
                'Couture' => array('court' => 'Couture' , 'type' => 2 , 'coeficient' => 1) ,
                'Dessin' => array('court' => 'Dessin' , 'type' => 2 , 'coeficient' => 1) ,
                'Informatique' => array('court' => 'Informatique' , 'type' => 1 , 'coeficient' => 1) ,
            ),
        );

        $MesClasses = \App\Models\Classe::all();

        foreach ($MesClasses as $classe) {

            foreach ($ListeMatiere[$classe->cycle_academique_id] as $matiere => $data) {
                \App\Models\Matiere::create([
                    'nom_matiere' => $matiere,
                    'nom_matiere_court' => $data['court'],
                    'code' => null,
                    'coeficient' => $data['coeficient'],
                    'type' => $data['type'],
                    'classe_id' => $classe->id,
                    //'enseignant_id' => \App\Models\Enseignant::inRandomOrder()->first()->id,

                    'active' => true,
                ]);
            }
        }
    }
}




