<?php

namespace App\Services;

use Carbon\Carbon;

class TimeService
{
    public function generateTimeRange($from, $to , $step = 30)
    {
        $time = Carbon::parse($from);
        $timeRange = [];

        do 
        {
            array_push($timeRange, [
                'start' => $time->format("H:i"),
                'end' => $time->addMinutes($step)->format("H:i")
            ]);    
        } while ($time->format("H:i") !== $to);

        return $timeRange;
    }
}