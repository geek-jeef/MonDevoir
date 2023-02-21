<?php

namespace App\Http\Livewire\Evaluation\Bulletin;

use Livewire\Component;
use App\Models\Bulletin;

class ShowBulletin extends Component
{
    public $bulletin;
    public $template;
    public $alone ;

    public $image ;

    public function mount(Bulletin $bulletin, $template = null , $alone = true){
        $this->bulletin = $bulletin;
        if($template == 'paysage'){
            $this->template = "paysage" ;
        }else{
            $this->template = "portrait" ;
        }
        $this->alone = $alone;
        $annee = $this->bulletin->annee ;
        $this->image = $this->bulletin->eleve->photoAnnee($annee);
        debug('$this->image');
        debug($this->image);
        debug($bulletin);
    }

    public function render()
    {
        return view('livewire.evaluation.bulletin.show-bulletin')->layout('layouts.printable');
    }
}
