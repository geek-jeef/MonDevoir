<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    protected $fillable = [
        'note',
        'notable_id',
        'notable_type',
        'eleve_id',
        'classe_id',
        'salle_id',
        'matiere_id',
        'annee_academique_id',
        'data'
    ];

    /*
            $table->unsignedFloat('note')->nullable();
            $table->unsignedInteger('notable_id');
            $table->string('notable_type');
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('matiere_id');
            $table->unsignedInteger('annee_academique_id');
            $table->json('data')->nullable();
            $table->timestamps();
            $table->userstamps();
            $table->softDeletes();
    */
    public function notable()
    {
        return $this->morphTo();
    }

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
                $observation = "Nul";
                break;
            case 4:
            case 5:
                $observation = "Mediocre";

                break;
            case 6:
            case 7:
                $observation = "Faible";

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
                $observation = "Très Bien";

                break;
            case 18:
            case 19:
                $observation = "Excellent Travail";
                break;
            case 20:
               $observation = "Parfait !";
                break;

              default:
                $observation = "";
                  break;
        }
      return $observation;
    }




}
