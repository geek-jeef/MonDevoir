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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_matiere');
            $table->string('nom_matiere_court');
            $table->string('code')->nullable();
            $table->unsignedTinyInteger('coeficient')->default(2);
            $table->enum('type', [1,2,3])->default(1);
            $table->unsignedInteger('classe_id');
            //$table->unsignedInteger('enseignant_id')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('exclure_des_resultats')->default(0);
            $table->json('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();

            //$table->foreign('classe_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matieres');
    }
};
