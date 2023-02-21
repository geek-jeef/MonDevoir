<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Classe ;
class ClasseSystemeEcolageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Classe::where('cycle_academique_id', 1)->get() as $classePrimaire) {

            DB::table('classe_systeme_ecolage')->insert(
                [
                    'classe_id' => $classePrimaire->id,
                    'systeme_ecolage_id' => 2,
                    'annee_academique_id' => 1,
                ]
            );

        }

        foreach (Classe::where('cycle_academique_id', 2)->get() as $classeCollege) {

            DB::table('classe_systeme_ecolage')->insert(
                [
                    'classe_id' => $classeCollege->id,
                    'systeme_ecolage_id' => 1,
                    'annee_academique_id' => 1,
                ]
            );

        }

        foreach (Classe::where('cycle_academique_id', 3)->get() as $classeLycee) {

            DB::table('classe_systeme_ecolage')->insert(
                [
                    'classe_id' => $classeLycee->id,
                    'systeme_ecolage_id' => 3,
                    'annee_academique_id' => 1,
                ]
            );

        }

    }
}
