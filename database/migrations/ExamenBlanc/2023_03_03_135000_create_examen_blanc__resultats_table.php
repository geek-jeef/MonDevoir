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
        Schema::create('examen_blanc__resultats', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('etablissement_id');
            $table->unsignedInteger('examen_id');

            $table->unsignedFloat('moyenne');
            $table->unsignedInteger('somme_coeficient');

            $table->unsignedFloat('points');

            $table->unsignedFloat('max_moyenne')->nullable();
            $table->unsignedFloat('min_moyenne')->nullable();
            $table->unsignedFloat('avg_moyenne')->nullable();

            $table->unsignedFloat('max_moyenne_etablissement')->nullable();
            $table->unsignedFloat('min_moyenne_etablissement')->nullable();
            $table->unsignedFloat('avg_moyenne_etablissement')->nullable();

            $table->string('rang')->nullable();
            $table->string('rang_etablissement')->nullable();
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
        Schema::dropIfExists('examen_blanc__resultats');
    }
};
