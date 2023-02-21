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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->integer('jour');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->json('data')->nullable();
            $table->unsignedInteger('salle_id')->nullable();
            $table->unsignedInteger('matiere_id')->nullable();
            $table->unsignedInteger('enseignant_id')->nullable();
            $table->unsignedInteger('annee_academique_id')->nullable();

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
        Schema::dropIfExists('cours');
    }
};
