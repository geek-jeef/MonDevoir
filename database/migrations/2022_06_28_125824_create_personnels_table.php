<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//use Dirape\Token\Token;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('token_id',50)->nullable();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('designation')->nullable();
            $table->string('qualification')->nullable();
            $table->date('date_de_naissance',10);
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->string('email',100)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('adresse',500)->nullable();
            $table->date('date_embauche');
            $table->date('date_depart')->nullable();
            $table->json('data')->nullable();
            //$table->string('signature')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('enseignant')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();


            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
