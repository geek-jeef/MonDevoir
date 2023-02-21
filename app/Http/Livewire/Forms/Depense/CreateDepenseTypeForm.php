<?php

namespace App\Http\Livewire\Forms\Depense;

use Livewire\Component;
use WireUi\Traits\Actions;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;
use App\Settings\FinanceSettings;

class CreateDepenseTypeForm extends Component
{
    use Actions;
    public $create_type_depense;

    protected function rules()
    {
        $forRule = new FinanceSettings;
        return [
            'create_type_depense' => [ 'required', 'string' ,Rule::notIn($forRule->types_depense)] ,
        ];
    }


    public function supprimerTypeDepense($type_depense){
        $delete = [$type_depense] ;
        $forSave = new FinanceSettings;
        $new = array_diff($forSave->types_depense, $delete) ;
        $forSave->types_depense = $new;
        if($forSave->save()){
            $this->notification()->send([
                'title'       => 'Type Dépense Supprimé!',
                'description' => "Le Type de  Dépense {$type_depense} a été Supprimé avec succès",
                'icon'        => 'success'
            ]);
            $this->create_type_depense = null;
            $this->emit('depenseRefreshment');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Type de Dépense n'a pas été Supprimé"
            );
        }
    }

    public function confirmSupprimerTypeDepense($type_depense){
        $this->emit('CloseModal','#formulaire-gestion-liste-depense');
        $this->dialog()->confirm([
            'title'       => 'Etes vous Sure?',
            'description' => "Supprimer le type {$type_depense} ?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Supprimer',
                'method' => 'supprimerTypeDepense',
                'params' => $type_depense,
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);
    }

    public function enregistrerTypeDepense(){
        $this->validate();
        $insert = [$this->create_type_depense] ;

        $forSave = new FinanceSettings;

        $new = array_merge($forSave->types_depense,$insert);

        $forSave->types_depense = $new;

        if($forSave->save()){
            $this->notification()->send([
                'title'       => 'Type Dépense Enregistré!',
                'description' => "Le Type de  Dépense {$this->create_type_depense} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->create_type_depense = null;

            $this->emit('CloseModal','#formulaire-gestion-liste-depense');
            $this->emit('depenseRefreshment');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Type de Dépense n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        $financeSettings = new FinanceSettings;
        return view('livewire.forms.depense.create-depense-type-form',['financeSettings' => $financeSettings]);
    }

}
