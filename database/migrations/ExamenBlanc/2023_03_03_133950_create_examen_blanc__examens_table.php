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
        Schema::create('examen_blanc__examens', function (Blueprint $table) {
            $table->id();
            $table->string('nom_examen');
            $table->boolean('ouvert_pour_enregistrement')->default(true);
            $table->unsignedInteger('annee_academique_id');
            $table->json('date')->nullable();
            $table->json('responsable')->nullable();
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
        Schema::dropIfExists('examen_blanc__examens');
    }
};
