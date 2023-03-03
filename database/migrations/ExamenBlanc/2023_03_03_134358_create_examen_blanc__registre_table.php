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
        Schema::create('examen_blanc__registre', function (Blueprint $table) {
            $table->id();
            $table->integer('num_table')->unsigned()->nullable();

            $table->string('nom');
            $table->string('prenoms',50);
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->date('date_de_naissance')->nullable();
            $table->string('lieu_de_naissance')->nullable();

            $table->integer('examen_id')->unsigned();
            $table->integer('etablissement_id')->unsigned();
            $table->unsignedInteger('annee_academique_id');

            $table->json('data')->nullable();
            $table->boolean('active')->default(true);

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
        Schema::dropIfExists('examen_blanc__registre');
    }
};
