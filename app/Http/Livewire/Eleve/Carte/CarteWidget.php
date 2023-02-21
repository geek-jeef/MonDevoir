<?php

namespace App\Http\Livewire\Eleve\Carte;

use Livewire\Component;
use App\Models\Eleve;
use App\Models\AnneeAcademique;
use Livewire\WithFileUploads;

use WireUi\Traits\Actions;

class CarteWidget extends Component
{

    use WithFileUploads;
    use Actions;


    public Eleve $eleve;
    public AnneeAcademique $annee;
    public bool $selected ;

    public $editable = false;
    public $tuteur_principal_id ;
    public $photo;

    public function savePhoto()
    {

        $this->validate([
            'photo' => 'required|image|max:2048', // 1MB Max
        ]);

        if($this->eleve->enregistrerPhoto($this->photo)){
            $this->notification()->send([
                'title'       => 'Photo Enregistré!',
                'description' => "La Photo de {$this->eleve->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->photo = null;
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Photo n'a pas été enregistré"
            );
        }
        //$this->photo->store('photos');
    }

    public  function printCarteOne($carte){
        redirect()->route('eleve.cartes.print',['cartePrintData' =>  [ 'cartes' => [$carte] , 'annee_id' => $this->annee->id ] ]);
    }

    protected function rules()
    {
        return [
            'eleve.nom' => 'required|string',
            'eleve.prenoms' => ['required'],
            'eleve.date_de_naissance' => ['required','date'],
            'eleve.lieu_de_naissance' => ['required','string'],
            'tuteur_principal_id' => 'required|integer',
        ];
    }

    public function render()
    {
        return view('livewire.eleve.carte.carte-widget');
    }
}
