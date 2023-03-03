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
        Schema::create('examen_blanc__resultat_matieres', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('etablissement_id');
            $table->unsignedInteger('examen_id');
            $table->unsignedInteger('matiere_id');

            $table->unsignedFloat('moyenne');
            $table->unsignedFloat('points');

            $table->string('rang_matiere')->nullable();
            $table->string('rang_matiere_etablissement')->nullable();

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
        Schema::dropIfExists('examen_blanc__resultat_matieres');
    }
};
