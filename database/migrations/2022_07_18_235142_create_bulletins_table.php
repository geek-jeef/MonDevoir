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
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no');
            $table->json('encoded_data')->nullable();
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('salle_id');
            $table->string('annee_academique_id');
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
        Schema::dropIfExists('bulletins');
    }
};
