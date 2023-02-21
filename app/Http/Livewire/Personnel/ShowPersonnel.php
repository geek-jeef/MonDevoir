<?php

namespace App\Http\Livewire\Personnel;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Validation\Rule;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\Hash;


class ShowPersonnel extends Component
{
    use Actions;
    use WithFileUploads;

    public Personnel $personnel;
    public $menus ;
    public $currentMenu;

    protected $listeners = [
        'refreshment' => '$refresh',
    ];

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

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

            'personnel.enseignant' => 'required|boolean',
            //'personnel.cycle_academique_id' => 'required|integer|exists:cycle_academiques,id',
        ];
    }

    public function update(){
        $this->validate();
        if($this->personnel->save()){
            $this->notification()->send([
                'title'       => 'Profil Enregistré!',
                'description' => "Le Profil de  {$this->personnel->nom_complet} a été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le profil n'a pas été Modifié"
            );
        }
    }

   



    public $tampon;

    public function saveTampon()
    {

        $this->validate([
            'tampon' => 'required|image|max:2048', // 1MB Max
        ]);

        ///dd($this->tampon);
        if($this->personnel->enregistrerTampon($this->tampon)){
            $this->notification()->send([
                'title'       => 'Tampon Enregistré!',
                'description' => "Le Tampon de {$this->personnel->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success'
            ]);
            $this->tampon = null;
            $this->emitSelf('refreshment');
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Le Tampon n'a pas été enregistré"
            );
        }
    }

    public $user_email;
    public $user_password;
    public $confirmation_user_password;

    public function createUser(){

        $this->validate([
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'user_password' => ['required','string','min:8','max:32'],
            'confirmation_user_password' => ['required','same:user_password'],
        ]);

        $user =  User::create([
            'name' => $this->personnel->nom_complet,
            'email' => $this->user_email,
            'password' => Hash::make($this->user_password),
        ]);

        $user->save();
        $this->personnel->user_id = $user->id ;
        $this->personnel->save();
        $this->emit('refreshment');

        $this->notification()->send([
                'title'       => 'Utilisateur Enregistré!',
                'description' => "Utilisateur pour {$this->personnel->nom_complet} a été Enregistré avec succès",
                'icon'        => 'success'
        ]);

    }



    public function mount(Personnel $personnel){
        $this->menus = collect(array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            ['id' => 2 , 'titre' => 'Fichier' , 'icon' => 'image'  , 'loaded' => false ],
            //['id' => 3 , 'titre' => 'Planning' , 'icon' => 'calendar'  , 'loaded' => false ],
            ['id' => 4 , 'titre' => 'Utilisateur' , 'icon' => 'user'  , 'loaded' => false ],
        ));
        $this->currentMenu = $this->menus->first();
        $this->personnel = $personnel;
        $this->user_email = $this->personnel->email;
    }

    public function render()
    {
        return view('livewire.personnel.show-personnel');
    }
}
