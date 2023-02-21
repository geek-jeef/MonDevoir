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
        Schema::create('enregistrement_examen_bulletins', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('resultat_examen_id');
            $table->unsignedInteger('bulletin_id');

            $table->unsignedInteger('examen_id');
            $table->unsignedInteger('periode_id');
            
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
        Schema::dropIfExists('enregistrement_examen_bulletins');
    }
};
