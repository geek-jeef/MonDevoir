<?php

namespace App\Http\Livewire\Evaluation\Devoir;

use Livewire\Component;
use WireUi\Traits\Actions;

use App\Models\Devoir;
use App\Models\Notation;

class UpdateDevoir extends Component
{
    use Actions;

    public $devoir;
    public $editable = false;

    public function mount(Devoir $devoir){
        $this->devoir = $devoir;
    }

    protected function rules()
    {
        return [
            'devoir.nom_devoir' => 'required|string',
            'devoir.ponderation' => "required|integer|min:1",
        ];
    }


    public function save(){
        $this->validate();
        if($this->devoir->save()){
            $this->notification()->send([
                'title'       => 'Devoir Enregistré!',
                'description' => "Le Devoir {$this->devoir->nom_devoir} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Devoir n'a pas été enregistré"
            );
        }
    }

    public function deleteDevoir(){
        $soumissions = Notation::where('notable_id', $this->devoir->id)
                    ->where('notable_type', $this->devoir::class)
                    ->delete();
        $notes = $this->devoir->notes;
        if(count($notes)){
            $notes->toQuery()->delete();
        }
        $this->devoir->delete();
        $this->redirectRoute('devoirs');
    }


    

    public function render()
    {
        return view('livewire.evaluation.devoir.update-devoir');
    }
}
