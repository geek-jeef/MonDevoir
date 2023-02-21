<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveSalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pour chaque salle ajouter 30 eleve
        $mesSalles = \App\Models\Salle::all();
        //$annee = \App\Models\AnneeAcademique::find(1)->id;
        foreach ($mesSalles as $salle) {
            for ($i=0; $i < 5 ; $i++) { 
               $eleve = \App\Models\Eleve::factory()->create();
               DB::table('eleve_salle')->insert(
                    [
                        'eleve_id' => $eleve->id,
                        'salle_id' => $salle->id,
                        'annee_academique_id' => 1,

                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
