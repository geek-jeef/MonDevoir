<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_examens', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('examen_id');

            $table->unsignedFloat('moyenne');
            $table->unsignedInteger('somme_coeficient');

            $table->unsignedFloat('points');


            $table->unsignedFloat('max_moyenne_classe')->nullable();
            $table->unsignedFloat('min_moyenne_classe')->nullable();
            $table->unsignedFloat('avg_moyenne_classe')->nullable();

            $table->unsignedFloat('max_moyenne_salle')->nullable();
            $table->unsignedFloat('min_moyenne_salle')->nullable();
            $table->unsignedFloat('avg_moyenne_salle')->nullable();

            $table->string('rang_classe')->nullable();
            $table->string('rang_salle')->nullable();

            $table->string('observations')->nullable();

            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->timestamps();
            $table->userstamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultat_examens');
    }
};
