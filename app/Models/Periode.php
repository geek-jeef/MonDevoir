<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

        /*  $table->string('nom_periode');
            $table->date('date_debut');
            $table->date('date_debut');

            $table->unsignedInteger('cycle_academique_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->timestamps();
            $table->userstamps();
            $table->softDeletes();*/

    public function cycle()
    {
        return $this->belongsTo(CycleAcademique::class, 'cycle_academique_id' , 'id');
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }
        protected $appends = array('debut','fin',);


    public function getDebutAttribute(){
        return date('d/m/Y', strtotime($this->date_debut)) ;
    }

    public function getFinAttribute(){
        return date('d/m/Y', strtotime($this->date_fin)) ;
    }
}
