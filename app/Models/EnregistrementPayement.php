<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class EnregistrementPayement extends Model
{
    use HasFactory;
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $fillable = [
        'eleve_id',
        'payement_id',
        'ref_no',
        'montant_paye',
        'balance',
        'methode_de_payement',
        'annee_academique_id',
        'complete',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function payement()
    {
        return $this->belongsTo(Payement::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
    }

    public function getDateAttribute()
    {
        return date('d/m/Y', strtotime($this->created_at));  
    }

    public function getHeureAttribute()
    {
        return date('H:i:s', strtotime($this->created_at));  
    }





    

    /**
     * $table->unsignedInteger('payement_id');
            $table->unsignedInteger('eleve_id');
            $table->string('ref_no', 100)->unique()->nullable();
            $table->integer('montant_paye')->nullable();
            $table->integer('balance')->nullable();
            $table->boolean('epuise')->default(false);
            $table->string('methode_de_payement', 100)->default('cash');
            $table->string('annee_academique_id');
            
            $table->userstamps();
            $table->timestamps();


            ['payement_id' => $charge->id,
               'eleve_id' => $this->id ,
               'annee_academique_id' => $annee_id ,
               'ref_no' => 1 ,
               'montant_paye' => $montant ,
               'balance' => 30000 ,
               'epuise' => false,
             ] 
    */
}
