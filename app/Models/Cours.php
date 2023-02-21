<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cours extends Model
{
    use HasFactory;
    use SoftDeletes ;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    protected $fillable = [
        'jour',
        'heure_debut',
        'heure_fin',
        'data',
        'salle_id',
        'matiere_id',
        'enseignant_id',
        'annee_academique_id',
    ];





    const WEEK_DAYS = [
        '0' => 'Dimanche',
        '1' => 'Lundi',
        '2' => 'Mardi',
        '3' => 'Mercredi',
        '4' => 'Jeudi',
        '5' => 'Vendredi',
        '6' => 'Samedi',
    ];

    public static function JourSemaine(int $day){
        $listeJour = ['Dimanche','Lundi','Mardi' , 'Mercredi' ,'Jeudi' , 'Vendredi' , 'Samedi'];

        if($day >= 0 && $day < 7){
            return $listeJour[$day];
        }
    }



    public function getDifferenceAttribute()
    {
        return Carbon::parse($this->heure_fin)->diffInMinutes($this->heure_debut);
    }


    public function getJourDeSemaineAttribute()
    {
        return self::JourSemaine($this->jour);
    }


    public function getHeureDebutAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setHeureDebutAttribute($value)
    {
        $this->attributes['heure_debut'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }

    public function getHeureFinAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setHeureFinAttribute($value)
    {
        $this->attributes['heure_fin'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }
    

    //protected $appends = array('event');

    /*public function getEventAttribute()
    {
        return $this->getEvent();
    }*/




    function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');
    }


    public function classe()
    {
        return $this->HasOneDeep(Classe::class ,[Salle::class],['id','id'] , ['salle_id','classe_id']);
    }

    public function cycle()
    {
        return $this->HasOneDeep(

            CycleAcademique::class ,
            [Salle::class, Classe::class] ,
            [
              'id', // Local key on the "countries" table.
              'id', // Local key on the "users" table.
              'id'  // Local key on the "posts" table.
            ],
            [
               'salle_id', // Foreign key on the "users" table.
               'classe_id',    // Foreign key on the "posts" table.
               'cycle_academique_id'     // Foreign key on the "comments" table.
            ],
        );
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'enseignant_id');
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'matiere_id');
    }

    public static function isTimeAvailable($weekday, $startTime, $endTime, $class, $teacher, $lesson)
    {
        $lessons = self::where('jour', $weekday)
            ->when($lesson, function ($query) use ($lesson) {
                $query->where('id', '!=', $lesson);
            })
            ->where(function ($query) use ($class, $teacher) {
                $query->where('salle_id', $class)
                    ->orWhere('enseignant_id', $teacher);
            })
            ->where([
                ['heure_debut', '<', Carbon::createFromTimeString($endTime)->toTimeString()],
                ['heure_fin', '>', Carbon::createFromTimeString($startTime)->toTimeString()],
            ]);


        //$lessons->dump();

        //dump($lessons->get());
        //dd(!$lessons->count());
        debug("endTime :  ".Carbon::createFromTimeString($endTime)->toTimeString());
        debug("startTime :  ".Carbon::createFromTimeString($startTime)->toTimeString());
            

        return !$lessons->count();
    }

    public function scopeCalendarByRoleOrClassId($query)
    {
        return $query->when(!request()->input('salle_id'), function ($query) {
            $query->when(auth()->user()->is_teacher, function ($query) {
                $query->where('enseignant_id', auth()->user()->id);
            })
                ->when(auth()->user()->is_student, function ($query) {
                    $query->where('salle_id', auth()->user()->salle_id ?? '0');
                });
        })
            ->when(request()->input('salle_id'), function ($query) {
                $query->where('salle_id', request()->input('salle_id'));
            });
    }

    public function scopeCalendarBySalleId($query)
    {
        return $query->when(!request()->input('salle_id'))
            ->when(request()->input('salle_id'), function ($query) {
                $query->where('salle_id', request()->input('salle_id'));
            });
    }

    public function getEvent(){

        $event = array(
                'id' => $this->id,
                'daysOfWeek' => [$this->jour] ,
                'startTime' => $this->heure_debut ,
                'endTime' => $this->heure_fin ,
                'title' =>  $this->salle->nom_salle." (" . $this->matiere->nom_matiere_court.") Avec ". $this->enseignant->nom_complet,
                );
        return $event;
    }


}
