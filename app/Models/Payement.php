<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'eleve_id',
        'payable_id',
        'payable_type',
        'annee_academique_id',
        'ref_no',
    ];



    public function payable()
    {
        return $this->morphTo();
    }

    /*
    'eleve_id' =>  $this->id,
                 'payable_id' =>  $systemeEcolage->id,
                 'payable_type' =>  $systemeEcolage::class,
                 'annee_academique_id' =>  $annee_id,
                 'ref_no' */


    /**
     * 
     * 
     * $table->id();
            $table->integer('payable_id');
            $table->string('payable_type');
            $table->string('ref_no', 100)->unique();

            $table->string('annee_academique_id');
            $table->timestamps();
            $table->userstamps();
            */

            
}
