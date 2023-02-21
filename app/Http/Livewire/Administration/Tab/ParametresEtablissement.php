<?php

namespace App\Http\Livewire\Administration\Tab;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Settings\GeneralSettings ;
use Livewire\WithFileUploads;


class ParametresEtablissement extends Component
{
    use Actions;
    use WithFileUploads;

    public $menus ;
    public $currentMenu;

    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }


    public $programme;
    public $email;
    public $telephone1;
    public $telephone2;
    public $poste;
    public $quartier;
    public $ville;
    public $pays;

    public function mount(GeneralSettings $settings)
    {
        $this->menus = collect( array(
            ['id' => 1 , 'titre' => 'Information' , 'icon' => 'info' , 'loaded' => false  ],
            //['id' => 2 , 'titre' => 'Images' , 'icon' => 'edit'  , 'loaded' => false ],
        ));
        $this->currentMenu = $this->menus->first();




        $this->programme = $settings->programme ;
        $this->email = $settings->email ;
        $this->telephone1 = $settings->telephone1 ;
        $this->telephone2 = $settings->telephone2 ;
        $this->poste = $settings->poste ;
        $this->quartier = $settings->quartier ;
        $this->ville = $settings->ville ;
        $this->pays = $settings->pays ;

    }

    protected function rules()
    {
        return [
            'programme' => 'required|string',
            'email' => "required|email",
            'telephone1' => "required|string",
            'telephone2' => "nullable|string",
            'poste' => "nullable|string",
            'quartier' => "required|string",
            'ville' => "required|string",
            'pays' => "required|string",
        ];
    }

    public function saveInformation(){
        $this->validate();

        $info = new GeneralSettings ;

        $info->programme = $this->programme ;
        $info->email = $this->email ;
        $info->telephone1 = $this->telephone1 ;
        $info->telephone2 = $this->telephone2 ;
        $info->poste = $this->poste ;
        $info->quartier = $this->quartier ;
        $info->ville = $this->ville ;
        $info->pays = $this->pays ;

        if($info->save()){
            $this->notification()->send([
                'title'       => 'Information Enregistré!',
                'description' => "Les informations ont été Enregistré avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Les Informations n'ont pas été enregistré"
            );
        }
    }


    public $logo;
    public function saveLogo(){
        $this->validate([
            'logo' => 'required|image|max:2048', // 1MB Max
        ]);


        $result = $this->logo->storeAs('assets', 'school-logo.png');

        debug($result);

    }

    public function saveLogoText2(){

    }

    public function saveLogoText3(){

    }
    public function saveLogoText4(){

    }









    public function render()
    {
        return view('livewire.administration.tab.parametres-etablissement');
    }
}
