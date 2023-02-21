<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Models\Cours ;
use App\Models\Enseignant ;
use App\Services\CalendarService;

class Element extends Component
{
    public $weekDays ;
    public $calendarData ;

    public function mount(CalendarService $calendarService){

        $this->weekDays     = Cours::WEEK_DAYS;
        $this->calendarData = $calendarService->generatePlanningEnseignant($this->weekDays , Enseignant::find(4));

        debug('$this->calendarData');
        debug($this->calendarData);


    }



    public function render()
    {
        return view('livewire.test.element');
    }
}
