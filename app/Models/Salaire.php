<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salaire extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transactions';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'transactable' => self::class,
        'type' => 'Versement De Salaire',
    ];

    protected $casts = [
        'data' => AsArrayObject::class,
    ];
    

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('transaction_salaire', function (Builder $builder) {
            $builder->where('transactions.transactable', self::class);
        });
    }

    public function beneficiaire()
    {
        return $this->belongsTo(Personnel::class, 'beneficiaire_id', 'id');
    }

    public function genererFicheSalaire(){
        
        $ref_no = FicheSalaire::generateRefNo($this->beneficiaire->nom_complet);
        $encoded_data = [
            'ref_no' => $ref_no,
            'beneficiaire' => $this->beneficiaire->nom_complet,
            'annee_academique_id' => $this->annee_academique_id,
            'employeur' => config('ecole.nom.long') ,
        ];

        $info_search = [
            'beneficiaire_id' => $this->beneficiaire_id,
            'transaction_id' => $this->id,
            'annee_academique_id' => $this->annee_academique_id,
        ];

        $info_create = [ 
            'ref_no' => $ref_no,
            'encoded_data' => $encoded_data,
            'data->periode' => $this->data['periode'],
        ];

        return FicheSalaire::firstOrCreate($info_search , $info_create );

    }


    public function ficheSalaireUrl()
    {
        /*
            $table->id();
            $table->string('ref_no');
            $table->json('encoded_data')->nullable();
            $table->unsignedInteger('beneficiaire_id');
            $table->unsignedInteger('transaction_id');
            
            $table->json('data')->nullable();
            $table->string('annee_academique_id');
        */

        $fiche = FicheSalaire::firstWhere('transaction_id',$this->id);

        if($fiche){
            return $fiche->url ;
        }else{
            return $this->genererFicheSalaire()->url ;
        }

    }


    public function getDateAttribute()
    {
        return date('d/m/Y', strtotime($this->created_at));  
    }


}
