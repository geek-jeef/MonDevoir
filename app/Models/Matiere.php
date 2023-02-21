<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $fillable = [
        'nom_matiere',
        'nom_matiere_court',
        'code',
        'coeficient',
        'type',
        'classe_id',
        'active',
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

    


    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }



    /*public function enseignant()
    {
        $prof = Enseignant::find($this->enseignant_id);
        return $prof->nom." ".$prof->prenoms;
    }*/
}


/*
$table->string('nom_matiere');
            $table->string('nom_matiere_court');
            $table->string('code')->nullable();
            $table->unsignedTinyInteger('coeficient')->default(2);
            $table->enum('type', [1,2,3])->default(1);
            $table->unsignedInteger('classe_id');
            $table->enum('status', [0,1])->default(1);
            $table->boolean('exclure_des_resultats')->default(0);
            $table->json('data')->nullable();
*/
            