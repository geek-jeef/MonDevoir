<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Avatar\Generator\DefaultGenerator as InitialGenerator;

class FicheSalaire extends Model
{
    use HasFactory;


    protected $fillable = [
        'ref_no',
        'encoded_data',
        'beneficiaire_id',
        'transaction_id',
        'data',
        'annee_academique_id',
    ];


    /*$table->id();
            $table->string('ref_no');
            $table->json('encoded_data')->nullable();
            $table->unsignedInteger('beneficiaire_id');
            $table->unsignedInteger('transaction_id');
            
            $table->json('data')->nullable();
            $table->string('annee_academique_id');

    */

    protected $casts = [
        'encoded_data' => 'array',
        'data' => 'array',
    ];
    
    public static function generateRefNo($beneficiaire){
      $generator = new InitialGenerator ;
      $initial = $generator->make($beneficiaire) ;
      $presence = FicheSalaire::where('ref_no','like', "%{$initial}%" )->count();
      return  ($presence) ? "FSAL-".$initial.'-'.++$presence : "FSAL-".$initial   ;
    }


    protected $appends = array('encoded_string','url');

    public function getEncodedStringAttribute()
    {
        $my_string = "";
        foreach ($this->encoded_data as $key => $value) {
            $my_string .= "{$key}:{$value}\n";
        }
        return $my_string;  
    }

    public function getUrlAttribute()
    {
        return route('finance.fiche_salaire.show',[$this->id]);
    }


    public function beneficiaire()
    {
        return $this->belongsTo(Personnel::class, 'beneficiaire_id' , 'id') ;
    }


    public function payement()
    {
        return $this->belongsTo(Salaire::class, 'transaction_id' , 'id') ;
    }
    

}
