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
        Schema::create('minervable_systeme_ecolage', function (Blueprint $table) {
            $table->id();
            $table->integer('minervable_id');
            $table->string('minervable_type');
            $table->integer('systeme_ecolage_id');
            $table->integer('annee_academique_id');
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
        Schema::dropIfExists('classe_systeme_ecolage');
    }
};
