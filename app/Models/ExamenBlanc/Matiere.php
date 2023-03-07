<?php

namespace App\Models\ExamenBlanc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_blanc__matieres';

    protected $fillable = [
        'nom_matiere',
        'nom_matiere_court',
        'code',
        'coeficient',
        'type',
        'examen_id',
        'active',
        'data',
    ];

    public function getType()
    {
        $nominationType = collect( 
            array(
                ['nom' => 'Principal',  'id' => 1],
                ['nom' => 'Facultatif', 'id' => 2],
                ['nom' => 'Au choix',   'id' => 3],
            )
        );
        if($this->type){
            return $nominationType->firstWhere('id',$this->type)['nom'] ;
        }else{
            return $nominationType->firstWhere('id',1)['nom'] ;
        }
    }

    protected $appends = array('nom_type');

    public function getNomTypeAttribute()
    {
        return $this->getType();  
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function note($eleve_id)
    {
        return $this->morphOne(Note::class, 'notable')
                    ->where('eleve_id',$eleve_id)
                    ->get()
                    ->last();
    }

    public function noteRempli(){
        $data = [ 
            'notable_id' => $this->id,
            'notable_type' => $this::class,
            'matiere_id' => $this->id,
            'annee_academique_id' => $this->examen->annee_academique_id,
        ] ;
        return Note::where($data)->where('note','!=',null)->count() ;
    }


    public function progression(){
        $notes = (int) $this->noteRempli();
        $effectif = (int) $this->examen->effectif();
        $percent = ($effectif != 0) ? ($notes *100)  /( (float) $effectif ) : 0.0 ;
        return array(
            'notes' => $notes ,
            'effectif' => $effectif ,
            'percent' => round( $percent , 2) ,
        );
    }



}
