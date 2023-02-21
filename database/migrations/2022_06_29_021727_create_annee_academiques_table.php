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
        Schema::create('annee_academiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_annee')->unique();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->boolean('ouvert_pour_inscription')->default(true);
            $table->boolean('active')->default(false);
            $table->unsignedInteger('directeur_id')->nullable();

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
        Schema::dropIfExists('annee_academiques');
    }
};
