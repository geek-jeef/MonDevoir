<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Enseignant extends Personnel
{

    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $table = 'personnels';

    public function cours_actuel()
    {
        $annee = \Hp::annee();
        return $this->cours->where('annee_academique_id', $annee->id);
    }

    public function cours(){
        return $this->hasMany(Cours::class);
    }



    protected $appends = array('nom_complet','description','url');

    public function getNomCompletAttribute()
    {
        return $this->nom." ".$this->prenoms;  
    }

    public function getDescriptionAttribute(){
        return $this->designation ;
    }

    public function getUrlAttribute(){
        return url("/personnel/".$this->id) ;
    }

    

}
