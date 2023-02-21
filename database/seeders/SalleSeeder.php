<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MesClasses = \App\Models\Classe::all();

        foreach ($MesClasses as $classe) {
            \App\Models\Salle::create([
                'nom_salle' => $classe->nom_court.' A',
                'info_salle' => "Batiment A ; Salle ".$classe->id,
                'capacite' => 40,
                'classe_id' => $classe->id,
                'enseignant_id' => \App\Models\Enseignant::inRandomOrder()->first()->id,
                'active' => 1,
            ]);
        }
            
    }
}

/*

$table->id();
            $table->string('nom_salle');
            $table->string('info_salle');
            $table->integer('capacite')->default(40);
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('enseignant_id');
            $table->enum('active', [0,1])->default(1);
            $table->json('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();

            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('enseignant_id')->references('id')->on('personnels');

*/