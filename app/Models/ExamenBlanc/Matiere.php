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



}
