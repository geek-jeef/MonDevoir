<?php

namespace App\Http\Livewire\Evaluation\Devoir;

use Livewire\Component;

class Devoirs extends Component
{
    /*
        $table->string('nom_devoir',100);
        $table->unsignedInteger('ponderation');
        $table->unsignedInteger('matiere_id');

        $table->unsignedInteger('salle_id');
        $table->unsignedInteger('classe_id');
        $table->unsignedInteger('annee_academique_id');
        $table->json('data')->nullable();
        $table->timestamps();
    */
    public function render()
    {
        return view('livewire.evaluation.devoir.devoirs');
    }
}
