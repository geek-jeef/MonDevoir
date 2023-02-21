<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemeEcolage extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    public function payement()
    {
        return $this->morphMany(Payement::class, 'payable');
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
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


    protected $appends = array('details','total_charge');

    public function getDetailsAttribute(){
        return $this->montant.'FCFA | '. $this->inscription.' FCFA | '.$this->description;
    }



    public function getTotalChargeAttribute(){
        return $this->montant+$this->inscription;
    }





    public function cycles_minervables()
    {
        return $this->hasManyDeep(
            CycleAcademique::class,
            [MinervableSystemeEcolage::class],
            [null, null],
            [null,['minervable_type','minervable_id']]
        ); // $this->morphMany(MinervableSystemeEcolage::class, 'minervable');
    }

    public function classes_minervables()
    {
        return $this->hasManyDeep(
            Classe::class,
            [MinervableSystemeEcolage::class],
            [null, null],
            [null,['minervable_type','minervable_id']]
        ); // $this->morphMany(MinervableSystemeEcolage::class, 'minervable');
    }


    public function salles_minervables()
    {
        return $this->hasManyDeep(
            Salle::class,
            [MinervableSystemeEcolage::class],
            [null, null],
            [null,['minervable_type','minervable_id']]
        ); // $this->morphMany(MinervableSystemeEcolage::class, 'minervable');
    }

    public function eleves_minervables()
    {
        return $this->hasManyDeep(
            Inscription::class,
            [MinervableSystemeEcolage::class],
            [null, null],
            [null,['minervable_type','minervable_id']]
        ); // $this->morphMany(MinervableSystemeEcolage::class, 'minervable');
    }

    public function minervables()
    {
        return $this->cycles_minervables->concat($this->classes_minervables)->concat($this->salles_minervables);
    }






    public function linkToMinervable($minervable){
        return MinervableSystemeEcolage::link($minervable , $this);
    }


    /**
     * $table->id();
            $table->string('titre', 100);
            $table->integer('montant');
            $table->string('description')->nullable();

            $table->string('annee_academique_id');
            $table->timestamps();
            $table->userstamps();
            */
}
