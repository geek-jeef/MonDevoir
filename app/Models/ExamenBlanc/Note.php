<?php

namespace App\Models\ExamenBlanc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\AnneeAcademique;

class Note extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_blanc__notes';

    protected $fillable = [
        'note',
        'notable_id',
        'notable_type',
        'eleve_id',
        'matiere_id',
        'annee_academique_id',
        'data'
    ];

    public function notable()
    {
        return $this->morphTo();
    }

    public function eleve()
    {
        return $this->belongsTo(Registre::class,'eleve_id');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function annee()
    {
        return $this->belongsTo(AnneeAcademique::class);
    }


    public static function observation($note)
    {
        
        $observation = null;

        $arrondi = (int) $note;

        switch($arrondi) {

            case 0:
            case 1:
            case 2:
            case 3:
                $observation = "Très Faible";
                break;
            case 4:
            case 5:
                $observation = "Faible";

                break;
            case 6:
            case 7:
                $observation = "Très Insuffisant";

                break;
            case 8:
            case 9:
                $observation = "Insuffisant";

                break;
            case 10:
            case 11:
                $observation = "Passable";

                break;
            case 12:
            case 13:
                $observation = "Assez Bien";

                break;
            case 14:
            case 15:
                $observation = "Bien";

                break;
            case 16:
            case 17:
            case 18:
            case 19:
            case 20:
               $observation = "Très Bien";
                break;

              default:
                $observation = "";
                  break;
        }
      return $observation;
    }



}
