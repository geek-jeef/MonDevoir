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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('prenoms',50)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->date('date_inscription');
            $table->string('nationalite',50)->nullable();
            $table->string('adresse',500)->nullable();
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
        Schema::dropIfExists('eleves');
    }
};
