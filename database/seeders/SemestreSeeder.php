<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MesCycles = \App\Models\CycleAcademique::all();

        foreach ($MesCycles as $cycle) {
            \App\Models\Semestre::create([
                'nom_semestre' => '1er Trimestre',
                'date_debut' => null,
                'date_fin' => null,
                'cycle_academique_id' => $cycle->id ,
                'active' => 1,

            ]);
        }

        

    }
}
