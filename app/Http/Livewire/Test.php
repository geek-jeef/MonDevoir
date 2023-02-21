<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Settings\GeneralSettings ;

class Test extends Component
{
    protected $settings;


    public function mount(GeneralSettings $settings)
    {
        $this->settings = $settings;

    }



    public function render()
    {
        return view('livewire.test',['settings' => $this->settings]);
    }
}
