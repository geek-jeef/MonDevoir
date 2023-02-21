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
        Schema::create('resultat_matieres', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('matiere_id');
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('examen_id');

            $table->unsignedFloat('moyenne_devoir');
            $table->unsignedFloat('note_composition');
            $table->unsignedFloat('moyenne');

            $table->unsignedFloat('points');

            $table->string('rang_matiere_classe')->nullable();
            $table->string('rang_matiere_salle')->nullable();

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
        Schema::dropIfExists('resultat_matieres');
    }
};
