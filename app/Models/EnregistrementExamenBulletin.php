<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnregistrementExamenBulletin extends Model
{
    use HasFactory;
    /*
        $table->unsignedInteger('resultat_examen_id');
        $table->unsignedInteger('bulletin_id');
        $table->unsignedInteger('examen_id');
        $table->unsignedInteger('periode_id');
        $table->unsignedInteger('annee_academique_id');
        $table->json('data')->nullable();
    */


    protected $fillable = [
        'resultat_examen_id' ,
        'bulletin_id' ,
        'examen_id',
        'periode_id',
        'annee_academique_id',
    ];

    public function resultatExamen()
    {
        return $this->belongsTo(ResultatExamen::class);
    }

    public function bulletin()
    {
        return $this->belongsTo(Bulletin::class);
    }
    
    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class);
    }

}