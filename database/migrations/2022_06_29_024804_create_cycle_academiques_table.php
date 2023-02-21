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
        Schema::create('cycle_academiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_cycle')->unique();
            $table->boolean('ouvert_cette_annee')->default(true);
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->unsignedInteger('directeur_id');

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
        Schema::dropIfExists('cycle_academiques');
    }
};
