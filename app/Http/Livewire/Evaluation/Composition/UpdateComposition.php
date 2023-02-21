<?php

namespace App\Http\Livewire\Evaluation\Composition;

use Livewire\Component;
use WireUi\Traits\Actions;

use App\Models\Composition;

class UpdateComposition extends Component
{
    use Actions;

    public $composition;
    public $editable = false;

    public function mount(Composition $composition){
        $this->composition = $composition;
    }

    protected function rules()
    {
        return [
            'composition.nom_composition' => 'required|string',
            'composition.ponderation' => "required|integer|min:1",
        ];
    }


    public function save(){
        $this->validate();
        if($this->composition->save()){
            $this->notification()->send([
                'title'       => 'Composition Enregistré!',
                'description' => "La Composition {$this->composition->nom_composition} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "La Composition n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        return view('livewire.evaluation.composition.update-composition');
    }
}
