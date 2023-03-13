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

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function candidats()
    {
        return  $this->hasMany(Registre::class,'etablissement_id');
    }

    public function effectif(){
        return $this->candidats->count();
    }


    public function getEffectifAttribute(){
        return $this->effectif() ;
    }

    

    public function noteRempli(){
        $data = [
            'annee_academique_id' => $this->annee_academique_id,
        ] ;
        return Note::where($data)
            ->whereIn('eleve_id',$this->candidats->modelKeys())
            ->whereIn('matiere_id',$this->examen->matieres->modelKeys())
            ->where('note','!=',null)
            ->count() ;
    }


    public function progression(){
        $notes = (int) $this->noteRempli();
        $effectif = $this->examen->effectif()  * $this->examen->matieres->count();
        $percent = ($effectif != 0) ? ($notes *100) /( (float) $effectif ) : 0.0 ;
        return array(
            'notes' => $notes ,
            'effectif' => $effectif ,
            'percent' => round( $percent , 2) ,
        );
    }




}
