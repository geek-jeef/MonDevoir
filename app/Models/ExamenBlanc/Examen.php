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

    public function etablissements()
    {
        return  $this->hasMany(Etablissement::class,'examen_id');
    }

    public function candidats()
    {
        return  $this->hasMany(Registre::class,'examen_id');
    }


    public function effectif(){
        return $this->candidats->count();
    }

    public function noteRempli(){
        $data = [
            'annee_academique_id' => $this->annee_academique_id,
        ] ;
        return Note::where($data)
            ->whereIn('matiere_id',$this->matieres->modelKeys())
            ->where('note','!=',null)
            ->count() ;
    }


    public function progression(){
        $notes = (int) $this->noteRempli();
        $effectif = $this->effectif()  * $this->matieres->count();
        $percent = ($effectif != 0) ? ($notes *100) /( (float) $effectif ) : 0.0 ;
        return array(
            'notes' => $notes ,
            'effectif' => $effectif ,
            'percent' => round( $percent , 2) ,
        );
    }

    

}
