<?php

namespace App\Models\ExamenBlanc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_blanc__etablissements';

    protected $fillable = [
        'nom_etablissement',
        'nom_etablissement_court',
        'annee_academique_id',
        'examen_id',
        'responsable',
        'data',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'responsable' => 'array',
        'data' => 'array',
    ];

    public function effectif(){
        return count(Registre::where('etablissement_id',$this->id)->get());
    }


    public function getEffectifAttribute(){
        return $this->effectif() ;
    }





}
