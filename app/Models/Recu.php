<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Hrshadhin\Userstamps\UserstampsTrait;

class Recu extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    //use UserstampsTrait;

    protected $fillable = [
        'enregistrement_payement_id',
        'montant_paye',
        'balance',
        'annee_academique_id',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];




    public function enregistrement()
    {
        return $this->belongsTo(EnregistrementPayement::class,'enregistrement_payement_id','id');
    }


    /**
     $table->id();
            $table->unsignedInteger('enregistrement_payement_id');
            $table->Integer('montant_paye');
            $table->Integer('balance');
            $table->string('annee_academique_id');
            $table->timestamps();
            $table->userstamps();
    **/

}
