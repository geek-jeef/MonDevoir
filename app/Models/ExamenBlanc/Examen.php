<?php

namespace App\Models\ExamenBlanc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\AnneeAcademique;

class Examen extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_blanc__examens';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'responsable' => 'array',
        'date' => 'array',
        'data' => 'array',
    ];

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' ,'id');
    }


    public function matieres()
    {
        return  $this->hasMany(Matiere::class,'examen_id');

    }

}
