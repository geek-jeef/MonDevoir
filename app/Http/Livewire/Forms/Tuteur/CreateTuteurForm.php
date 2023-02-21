<?php

namespace App\Http\Livewire\Forms\Tuteur;

use Livewire\Component;
use App\Models\Tuteur;
use WireUi\Traits\Actions;

class CreateTuteurForm extends Component
{
    use Actions;
    public Tuteur $tuteur;
 
    protected $rules = [
        'tuteur.nom' => 'required|string|min:6',
        'tuteur.phone_primaire' => 'nullable|string|max:20',
        'tuteur.phone_secondaire' => 'nullable|string|max:20',
        'tuteur.genre' => 'required|string',
        'tuteur.email' => 'nullable|email',
        'tuteur.adresse' => 'nullable|string|max:500',
        'tuteur.profession' => 'nullable|string|max:250',
    ];

    public function mount(){
        $this->tuteur = new Tuteur;
    }
 
    public function save()
    {
        $this->validate();

        debug($this->tuteur);
 
        if($this->tuteur->save()){
            $this->notification()->send([
                'title'       => 'Tuteur Enregistré!',
                'description' => "Le tuteur {$this->tuteur->nom} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->emit('CloseModal','#formulaire-creation-tuteur');
            $this->tuteur = new Tuteur;
        }else{
            $this->notification()->send([
                'title'       => 'Alerte!',
                'description' => "Le tuteur n'a pas été enregistré ",
                'icon'        => 'warning'
            ]);
        }
        

        
    }
    public function render()
    {
        return view('livewire.forms.tuteur.create-tuteur-form');
    }
}
