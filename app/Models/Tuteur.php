<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tuteur extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    protected $casts = [
        'data' => 'array',
    ];

    public function assignerEleve(Eleve $eleve)
    {
        DB::table('eleve_tuteur')->insert(
                [
                    'eleve_id' => $eleve->id,
                    'tuteur_id' => $this->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
        );
    }

    public function eleves()
    {
        return $this->hasManyDeep(Eleve::class, ['eleve_tuteur']);
    }

}
