<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Laravolt\Avatar\Generator\DefaultGenerator as InitialGenerator;

class Bulletin extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    
    protected $fillable = [
        'ref_no',
        'encoded_data',
        'eleve_id',
        'classe_id',
        'salle_id',
        'annee_academique_id',
        'data',
    ];

    protected $casts = [
        'encoded_data' => 'array',
        'data' => 'array',
    ];
    /*
        $table->id();
        $table->string('ref_no');
        $table->json('encoded_data')->nullable();
        $table->unsignedInteger('eleve_id');
        $table->unsignedInteger('classe_id');
        $table->unsignedInteger('salle_id');
        $table->string('annee_academique_id');
        $table->json('data')->nullable();
    */

    /*

        /*******Resutat Examen
            'examen_id',
            'classe_id',

            'salle_id',
            'eleve_id',

            'moyenne',
            'somme_coeficient',
            'points',
            'observations',

            'max_moyenne_classe',
            'min_moyenne_classe',
            'avg_moyenne_classe',

            'max_moyenne_salle',
            'min_moyenne_salle',
            'avg_moyenne_salle',

            'rang_classe',
            'rang_salle',

        /*********** enregistrement_examen_bulletins
            'resultat_examen_id',
            'bulletin_id',
            'examen_id',
            'periode_id',
            'annee_academique_id',

        /*********** Bulletins
            'ref_no',
            'data_to_encoded',
            'eleve_id',
            'classe_id',
            'salle_id',
            'annee_academique_id',
            'data.layout',
    
    */

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    protected $appends = array('encoded_string');

    public function getEncodedStringAttribute()
    {
        $my_string = "";
        foreach ($this->encoded_data as $key => $value) {
            $my_string .= "{$key}:{$value}\n";
        }
        return $my_string;  
    }

    /*public function getMatieresAttribute()
    {
        
        return $this->examen->matieres($this->classe_id);  
    }*/

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class, 'annee_academique_id', 'id');
    }

    public function periode()
    {
        return $this->HasOneDeep(Periode::class ,['enregistrement_examen_bulletins']);

    }

    public function resultat_examen()
    {
        return $this->HasOneDeep(ResultatExamen::class ,['enregistrement_examen_bulletins']);
    }

    public function examen()
    {
        return $this->HasOneDeep(Examen::class ,['enregistrement_examen_bulletins']);
    }



    public function resultat_matieres()
    {
        return $this->HasManyDeep(ResultatMatiere::class ,['enregistrement_examen_bulletins', Examen::class])->where('resultat_matieres.eleve_id',$this->eleve_id)->orderBy('resultat_matieres.matiere_id');
    }


    public static function createBulletinRefNo(ResultatExamen $resultat){
      $generator = new InitialGenerator ;
      $initial = $generator->make($resultat->eleve->nom_complet) ;
      $initial = $initial.$resultat->eleve_id;

      $presence = Bulletin::where('ref_no','like', "%{$initial}%" )->count();
      return  ($presence) ? "bul{$resultat->examen_id}-".$initial.'-'.++$presence : "bul{$resultat->examen_id}-".$initial   ;
    }


    public static function bulletinExist($examen_id, $classe_id)
    {


        return DB::table('bulletins')
                ->select('*')
                ->join('enregistrement_examen_bulletins', 'enregistrement_examen_bulletins.bulletin_id', '=', 'bulletins.id')
                ->where('bulletins.classe_id',$classe_id)
                ->where('enregistrement_examen_bulletins.examen_id',$examen_id)
                ->get()
                ->count();

    }


    public static function bulletinExistSalle($examen_id, $salle_id)
    {
        return DB::table('bulletins')
                ->select('*')
                ->join('enregistrement_examen_bulletins', 'enregistrement_examen_bulletins.bulletin_id', '=', 'bulletins.id')
                ->where('bulletins.salle_id',$salle_id)
                ->where('enregistrement_examen_bulletins.examen_id',$examen_id)
                ->get()
                ->count();
    }
    
}
