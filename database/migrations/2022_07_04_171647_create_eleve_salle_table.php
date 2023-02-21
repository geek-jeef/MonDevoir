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
        Schema::create('eleve_salle', function (Blueprint $table) {
            $table->id();
            $table->integer('eleve_id')->unsigned();
            $table->integer('salle_id')->unsigned();
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->softDeletes();
            $table->userstamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleve_salle');
    }
};
