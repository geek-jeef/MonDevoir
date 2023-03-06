<?php

namespace App\Models\ExamenBlanc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnneeAcademique;

class Registre extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_blanc__registre';

        /**
     *      
            $table->string('nom');
            $table->string('prenoms',50);
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->date('date_de_naissance')->nullable();
            $table->string('lieu_de_naissance')->nullable();
            $table->integer('examen_id')->unsigned();
            ** $table->integer('etablissement_id')->unsigned();
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->boolean('active')->default(true);
     */
     

    protected $fillable = [
        'nom',
        'prenoms',
        'genre',
        'date_de_naissance',
        'lieu_de_naissance',
        'examen_id',
        'etablissement_id',
        'annee_academique_id',
        'data',
        'active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'date_de_naissance' => 'date:Y-m-d',
        'data' => 'array',
    ];
    
    public function getNaissanceAttribute()
    {
        return date('d/m/Y', strtotime($this->date_de_naissance));  
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'etablissement_id' ,'id');
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id' ,'id');
    }
    
}
