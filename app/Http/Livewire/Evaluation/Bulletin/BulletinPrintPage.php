<?php

namespace App\Http\Livewire\Evaluation\Bulletin;

use Livewire\Component;

class BulletinPrintPage extends Component
{
    public $bulletins;



    public function mount(){
        debug('data');
        debug(request()->query('printBulletinData'));
        $bulletins = request()->query('printBulletinData')["bulletins"]?? false;

        if($bulletins){
            $this->bulletins = $bulletins;
            debug('bulletins from data');
        }else{
            $this->bulletins = [];
            debug('bulletins from cumputation');
        }

    }
    public function render()
    {
        return view('livewire.evaluation.bulletin.bulletin-print-page')->layout('layouts.printable');
    }
}
