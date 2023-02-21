<?php

namespace App\Http\Livewire\Administration\Tab;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use WireUi\Traits\Actions;

class ReinitialiserMotDePasse extends Component
{
    use Actions;

    public $utilisateurs ;
    public $utilisateur_id;
    public $password;
    public $confirmation_password;

    protected function rules()
    {
        return [
            'password' => 'required|string|min:6|max:32',
            'confirmation_password' => 'required|same:password',
            'utilisateur_id' => 'required|integer|exists:users,id',
        ];
    }


    public function mount(){
        $this->utilisateurs = User::where('is_super_admin','false')->get();
    }

    public function save(){

        $this->validate();

        $user = User::find($this->utilisateur_id);

        if($this->resetUserPassword($user , $this->password)){

            $this->notification()->send([
                'title'       => 'Mot de Passe Enregistré!',
                'description' => "Le Mot de Passe de {$user->name} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);

        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Mot de Passe n'a pas été enregistré "
            );
        }
    }







    public function resetUserPassword($user, $password)
    {
        return $user->forceFill([
            'password' => Hash::make($password),
        ])->save();
    }


    public function render()
    {
        return view('livewire.administration.tab.reinitialiser-mot-de-passe');
    }
}
