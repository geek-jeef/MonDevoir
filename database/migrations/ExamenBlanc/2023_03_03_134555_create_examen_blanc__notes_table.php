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
        Schema::create('examen_blanc__notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedFloat('note')->nullable();
            $table->unsignedInteger('notable_id');
            $table->string('notable_type');
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('matiere_id');
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
        Schema::dropIfExists('examen_blanc__notes');
    }
};
