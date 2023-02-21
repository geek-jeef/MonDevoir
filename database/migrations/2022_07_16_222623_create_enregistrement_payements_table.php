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
        Schema::create('enregistrement_payements', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('payement_id');
            $table->unsignedInteger('eleve_id');
            $table->string('ref_no', 100)->unique()->nullable();
            $table->integer('montant_paye')->nullable();
            $table->integer('balance')->nullable();
            $table->boolean('complete')->default(false);
            $table->string('methode_de_payement', 100)->default('cash');
            $table->string('annee_academique_id');
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
        Schema::dropIfExists('enregistrement_payements');
    }
};
