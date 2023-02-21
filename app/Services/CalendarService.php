<?php

namespace App\Services;

use App\Models\Cours;
use App\Models\Enseignant;

class CalendarService
{
    public function generateCalendarData($weekDays)
    {
        $calendarData = [];
        $timeRange = (new TimeService)->generateTimeRange(config('panel.calendar.start_time'), config('panel.calendar.end_time'));
        $lessons = Cours::with('salle', 'enseignant')
            ->calendarBySalleId()
            ->get();
        debug('From Calendar Services') ;
        debug($lessons) ;
        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];

            foreach ($weekDays as $index => $day)
            {
                $lesson = $lessons->where('jour', $index)->where('heure_debut', $time['start'])->first();

                if ($lesson)
                {
                    array_push($calendarData[$timeText], [
                        'nom_salle'   => $lesson->salle->nom_salle,
                        'nom_enseignant' => $lesson->enseignant->nom,
                        'rowspan'      => $lesson->difference/30 ?? ''
                    ]);
                }
                else if (!$lessons->where('jour', $index)->where('heure_debut', '<', $time['start'])->where('heure_fin', '>=', $time['end'])->count())
                {
                    array_push($calendarData[$timeText], 1);
                }
                else
                {
                    array_push($calendarData[$timeText], 0);
                }
            }
        }

        return $calendarData;
    }

    public function generatePlanningEnseignant($weekDays, Enseignant $enseignant){

        $calendarData = [];
        $timeRange = (new TimeService)->generateTimeRange(config('panel.calendar.start_time'), '13:00', 15);
        $lessons = Cours::with('salle', 'enseignant')
            ->where('cours.enseignant_id', $enseignant->id)
            ->get();

        debug('From Calendar Services') ;
        debug($lessons) ;
        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];

            foreach ($weekDays as $index => $day)
            {
                $lesson = $lessons->where('jour', $index)->where('heure_debut', $time['start'])->first();

                if ($lesson)
                {
                    array_push($calendarData[$timeText], [
                        'nom_salle'   => $lesson->salle->nom_salle,
                        'nom_enseignant' => $lesson->enseignant->nom.' '.$lesson->enseignant->prenoms,
                        'rowspan'      => $lesson->difference/15 ?? ''
                    ]);
                }
                else if (!$lessons->where('jour', $index)->where('heure_debut', '<', $time['start'])->where('heure_fin', '>=', $time['end'])->count())
                {
                    array_push($calendarData[$timeText], 1);
                }
                else
                {
                    array_push($calendarData[$timeText], 0);
                }
            }
        }

        return $calendarData;
    }
}
