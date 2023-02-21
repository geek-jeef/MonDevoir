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
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_salle');
            $table->string('info_salle');
            $table->integer('capacite')->default(40);
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('enseignant_id');
            $table->boolean('active')->default(true);
            $table->json('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();

            //$table->foreign('classe_id')->references('id')->on('classes');
            //$table->foreign('enseignant_id')->references('id')->on('personnels');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salles');
    }
};
