<?php

namespace App\Http\Livewire\Forms\Revenu;

use Livewire\Component;
use WireUi\Traits\Actions;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;
use App\Settings\FinanceSettings;

class CreateRevenuTypeForm extends Component
{
    use Actions;
    public $create_type_revenu;

    protected function rules()
    {
        $forRule = new FinanceSettings;
        return [
            'create_type_revenu' => [ 'required', 'string' ,Rule::notIn($forRule->types_revenu)] ,
        ];
    }


    public function supprimerTypeRevenu($type_revenu){
        $delete = [$type_revenu] ;
        $forSave = new FinanceSettings;
        $new = array_diff($forSave->types_revenu, $delete) ;
        $forSave->types_revenu = $new;
        if($forSave->save()){
            $this->notification()->send([
                'title'       => 'Type Revenu Supprimé!',
                'description' => "Le Type de  Revenu {$type_revenu} a été Supprimé avec succès",
                'icon'        => 'success'
            ]);
            $this->create_type_revenu = null;
            $this->emit('revenuRefreshment');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Type de Revenu n'a pas été Supprimé"
            );
        }
    }

    public function confirmSupprimerTypeRevenu($type_revenu){
        $this->emit('CloseModal','#formulaire-gestion-liste-revenu');
        $this->dialog()->confirm([
            'title'       => 'Etes vous Sure?',
            'description' => "Supprimer le type {$type_revenu} ?",
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Oui, Supprimer',
                'method' => 'supprimerTypeRevenu',
                'params' => $type_revenu,
            ],
            'reject' => [
                'label'  => 'Non, Annuler',
            ],
        ]);
    }

    public function enregistrerTypeRevenu(){
        $this->validate();
        $insert = [$this->create_type_revenu] ;

        $forSave = new FinanceSettings;

        $new = array_merge($forSave->types_revenu,$insert);

        $forSave->types_revenu = $new;

        if($forSave->save()){
            $this->notification()->send([
                'title'       => 'Type Revenu Enregistré!',
                'description' => "Le Type de  Revenu {$this->create_type_revenu} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->create_type_revenu = null;

            $this->emit('CloseModal','#formulaire-gestion-liste-revenu');
            $this->emit('revenuRefreshment');

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Type de Revenu n'a pas été enregistré"
            );
        }
    }

    public function render()
    {
        $financeSettings = new FinanceSettings;
        return view('livewire.forms.revenu.create-revenu-type-form',['financeSettings' => $financeSettings]);
    }

}
