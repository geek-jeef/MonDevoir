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
        Schema::create('fiche_salaires', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no');
            $table->json('encoded_data')->nullable();
            $table->unsignedInteger('beneficiaire_id');
            $table->unsignedInteger('transaction_id');
            
            $table->json('data')->nullable();
            $table->string('annee_academique_id');
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
        Schema::dropIfExists('fiche_salaires');
    }
};
