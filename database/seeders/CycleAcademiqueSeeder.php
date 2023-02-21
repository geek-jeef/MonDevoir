<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleAcademiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MesCycles = array('Primaire' => true , 'Collège' => true , 'Lycée' => true , 'Lycée Technique' => false );
        $annee = \App\Models\AnneeAcademique::first()->id;
        
        foreach ($MesCycles as $nom => $ouvert) {
            \App\Models\CycleAcademique::create([
                'nom_cycle' => $nom,
                'ouvert_cette_annee' => $ouvert ,
                'annee_academique_id' => $annee,
                'directeur_id' => 1,
            ]);
        }

        
    }
}
