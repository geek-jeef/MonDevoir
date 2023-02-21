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
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('phone_primaire',15)->nullable();
            $table->string('phone_secondaire',15)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->string('email')->nullable();
            $table->string('adresse',500)->nullable();
            $table->string('profession')->nullable();
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
        Schema::dropIfExists('tuteurs');
    }
};