<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\SoftDeletes;

class EleveSalle extends Pivot
{
    use HasTags;
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' , 'id') ;
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class) ;
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class) ;
    }

    public function systemeEcolage()
    {
        return $this->hasOneDeep(
            SystemeEcolage::class, 
            [MinervableSystemeEcolage::class],
            [['minervable_type','minervable_id']]
            );
    }


    
}
