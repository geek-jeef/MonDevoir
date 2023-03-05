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
        Schema::create('examen_blanc__etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_etablissement');
            $table->string('nom_etablissement_court');
            $table->unsignedInteger('examen_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('responsable')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_blanc__etablissements');
    }
};
