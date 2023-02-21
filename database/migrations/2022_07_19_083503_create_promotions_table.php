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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('de_classe');
            $table->unsignedInteger('de_salle');
            $table->unsignedInteger('a_classe');
            $table->unsignedInteger('a_salle');
            $table->tinyInteger('grad');
            //$table->string('salle_depart');
            //$table->string('salle_arrive');
            $table->string('statut');



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
        Schema::dropIfExists('promotions');
    }
};
