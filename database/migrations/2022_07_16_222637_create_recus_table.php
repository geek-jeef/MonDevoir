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
        Schema::create('recus', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('enregistrement_payement_id');
            $table->integer('montant_paye');
            $table->integer('balance');
            $table->string('annee_academique_id');
            $table->json('data')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('recus');
    }
};
