<?php

namespace App\Http\Livewire\Forms\Personnel;

use Livewire\Component;
use App\Models\Personnel;

use WireUi\Traits\Actions;


class CreatePersonnelForm extends Component
{
    use Actions;

    public Personnel $personnel ;

    /*{{--

      $table->unsignedInteger('user_id')->nullable();
      $table->string('token_id',50)->nullable();
      $table->string('nom');
      $table->string('prenoms');
      $table->string('designation')->nullable();
      $table->string('qualification')->nullable();
      $table->date('date_de_naissance',10);
      $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
      $table->string('email',100)->nullable();
      $table->string('phone',15)->nullable();
      $table->string('adresse',500)->nullable();
      $table->date('date_embauche');
      $table->date('date_depart')->nullable();
    
    --}}*/

    protected function rules()
    {
        return [
            'personnel.nom' => 'required|string',
            'personnel.prenoms' => 'required|string',
            'personnel.genre' => 'required|string',
            'personnel.date_de_naissance' => 'required|date',

            'personnel.designation' => 'required|string',
            'personnel.qualification' => 'required|string',
            'personnel.date_embauche' => 'required|date',

            'personnel.email' => 'required|email',
            'personnel.phone' => 'required|string',
            'personnel.adresse' => 'required|string',
            'personnel.enseignant' => 'nullable|boolean',

        ];
    }

    public function mount(){
        $this->personnel = new Personnel;
    }

    public function save(){
        $this->validate();
        if($this->personnel->save()){
            $this->notification()->send([
                'title'       => 'Membre Du Personnel Enregistré!',
                'description' => "{$this->personnel->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->personnel = new Personnel;
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Membre Du Personnel n'a pas été enregistré"
            );
        }
    }


    public function render()
    {
        return view('livewire.forms.personnel.create-personnel-form');
    }
}
