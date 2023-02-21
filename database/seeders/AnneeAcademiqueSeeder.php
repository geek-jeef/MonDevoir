<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnneeAcademiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AnneeAcademique::create([
            'nom_annee' => '2021-2022',
            'date_debut' => null,
            'date_fin' => null,
            'ouvert_pour_inscription' => true,
            'active' => true,
        ]);

    }
}
