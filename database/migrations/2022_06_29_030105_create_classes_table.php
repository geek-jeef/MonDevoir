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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_classe');
            $table->string('nom_court', 50);
            $table->string('serie',100)->nullable();
            $table->boolean('matiere_au_choix')->default(false);
            $table->unsignedTinyInteger('max_matiere_au_choix')->nullable();
            //$table->boolean('have_elective_subject')->default(false);
            //$table->text('note')->nullable();
            $table->boolean('ouvert_pour_inscription')->default(true);
            $table->boolean('active')->default(true);
            $table->unsignedInteger('cycle_academique_id')->nullable();
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
        Schema::dropIfExists('classes');
    }
};
