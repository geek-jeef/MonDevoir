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
        //charge

        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->integer('eleve_id');
            $table->integer('payable_id');
            $table->string('payable_type');
            $table->string('ref_no', 100)->unique();
            $table->string('annee_academique_id');
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
        Schema::dropIfExists('payements');
    }
};
