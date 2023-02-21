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
        Schema::create('systeme_ecolages', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->integer('montant');
            $table->integer('inscription');
            $table->string('description')->nullable();
            $table->json('data')->nullable();
            $table->string('annee_academique_id');
            $table->timestamps();
            $table->userstamps();
            $table->unique(['titre', 'annee_academique_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systeme_ecolages');
    }
};
