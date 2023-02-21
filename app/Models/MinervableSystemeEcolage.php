<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MinervableSystemeEcolage extends Pivot
{
    /**
     * $table->id();
            $table->integer('minervable_id');
            $table->integer('minervable_type');
            $table->integer('systeme_ecolage_id');
            $table->string('annee_academique_id');
            $table->timestamps();
            $table->userstamps();
            */
    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
    }

    public function minervable()
    {
        return $this->morphTo();
    }


    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActuel($query)
    {
        $annee = \Hp::annee();
        $query->where('annee_academique_id', $annee->id);
    }

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeAcademique($query)
    {
        $query->whereNot('minervable_type', EleveSalle::class);
    }

    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeEtudiant($query)
    {
        $query->where('minervable_type', EleveSalle::class);
    }


    public static function link($minervable , SystemeEcolage $systeme){
       
        return MinervableSystemeEcolage::updateOrCreate(
            ['minervable_id' => $minervable->id , 'minervable_type' => $minervable::class],
            ['systeme_ecolage_id' => $systeme->id,'annee_academique_id' => $systeme->annee_academique_id]
        );
    }

            
}
