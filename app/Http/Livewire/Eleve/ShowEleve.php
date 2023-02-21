<?php

namespace App\Http\Livewire\Eleve;

use Livewire\Component;

use App\Models\Eleve;
use App\Models\Tuteur;
use App\Models\Salle;
use App\Models\Inscription;
use App\Models\SystemeEcolage;

use WireUi\Traits\Actions;

class ShowEleve extends Component
{
    use Actions;
    public Eleve $eleve;
    public $inscriptions;
    public $actual_inscription;

    public $menus ;
    public $currentMenu;



    protected $listeners = [
        'refreshment' => '$refresh',
        'changeSalleDestination' => 'changeSalleDestination',
        'changeSalleNouvelleInscription' => 'changeSalleNouvelleInscription'
    ];


    public function changeMenu($menu_id){
        $this->currentMenu = $this->menus->firstWhere('id', $menu_id);
    }

    public function changeInscription($inscription_id){
        $this->actual_inscription = $this->inscriptions->firstWhere('id', $inscription_id);
    }

    protected function rules()
    {
        return [
                'eleve.nom' => ['required','string'],
                'eleve.prenoms' => ['required','string'],
                'eleve.genre' => ['required'],
                'eleve.date_de_naissance' => ['required','date'],
                'eleve.lieu_de_naissance' => ['required'],
                'eleve.nationalite' => ['required'],
                'eleve.adresse' => ['nullable'],
                'eleve.data.medical' => ['nullable'],
                'eleve.data.commentaire' => ['nullable'],
            ];
    }

    public $information_editable = false;

    public function update(){
        $this->validate();
        if($this->eleve->save()){
            $this->notification()->send([
                'title'       => 'Information Enregistré!',
                'description' => "les informations de {$this->eleve->nom_complet} ont été Modifié avec succès",
                'icon'        => 'success'
            ]);
        }else{
            $this->dialog()->error(
                $title = 'Erreur !!!',
                $description = "Les Informations n'a pas été Modifié"
            );
        }
    }

    public $systeme_ecolage_id;

    public function setSystemeEcolage(){

        $this->validate([
            'systeme_ecolage_id' => 'required|exists:systeme_ecolages,id',
        ]);

        if($this->actual_inscription){
            $systeme = SystemeEcolage::find($this->systeme_ecolage_id);
            if($systeme->linkToMinervable($this->actual_inscription)){
                $this->notification()->send([
                    'title'       => 'Systeme de Payement Enregistré!',
                    'description' => "Le Systeme {$systeme->titre} a été appliqué pour {$this->eleve->nom_complet} avec succès",
                    'icon'        => 'success'
                ]);
            }else{
                $this->dialog()->error(
                    $title = 'Erreur !!!',
                    $description = "Systeme de Payement n'a pas été Enregistré"
                );
            }
        }else{
            $this->dialog()->error(
                    $title = "Erreur! Le Systeme de Payement ne peut pas être Enregistré",
                    $description = "Aucune Inscription disponible pour {$this->eleve->nom_complet} "
                );
        }


    }

    public $inscription_tags;

    public function ajouterTags(){
        $this->validate([
            'inscription_tags' => 'nullable|array',
        ]);

        foreach($this->inscription_tags as $tag_id){
            $tag = \Tag::find($tag_id);
            if($tag){
                $this->actual_inscription->attachTag($tag);
            }
            $this->notification()->send([
                'title'       => 'Marquage Enregistré!',
                'description' => "Le Marquage {$tag->name} a été appliqué à {$this->eleve->nom_complet} avec succès",
                'icon'        => 'success'
            ]);

        }
        $this->emitSelf('refreshment');
    }

    public function retirerTags($tag_id){
        $tag = \Tag::find($tag_id);
        if($tag){
            $this->actual_inscription->detachTag($tag);
        }

        $this->notification()->send([
            'title'       => 'Marquage Rétiré!',
            'description' => "Le Marquage {$tag->name} a été rétiré à {$this->eleve->nom_complet} avec succès",
            'icon'        => 'success'
        ]);
        $this->emitSelf('refreshment');
    }


    public $nouveau_tuteurs;

    public function attribuerTuteur(){
        $this->validate([
            'nouveau_tuteurs' => 'array',
        ]);
        foreach($this->nouveau_tuteurs as $new_id){
            $result = $this->eleve->assignerTuteur($new_id);
            if($result){
                $tuteur =  Tuteur::find($new_id);
                $this->notification()->send([
                    'title'       => 'Tuteur Enregistré!',
                    'description' => "Le tuteur {$tuteur->nom} a été enregistré pour l'eleve {$this->eleve->nom_complet} avec succès",
                    'icon'        => 'success'
                ]);
            }else{
                $this->notification()->send([
                    'title'       => 'Tuteur Non-Enregistré!',
                    'description' => "Un tuteur n'as pas été enregistré",
                    'icon'        => 'warning'
                ]);
            }
        }
        $this->nouveau_tuteurs = null;
        $this->emitSelf('refreshment');
    }


    public function supprimerTuteur($tuteur_id){
        $tuteur =  Tuteur::find($tuteur_id);
        $result = $this->eleve->retirerTuteur($tuteur);
        $this->notification()->send([
            'title'       => 'Tuteur Supprimé!',
            'description' => "Le tuteur {$tuteur->nom} a été supprimé pour l'eleve {$this->eleve->nom_complet} avec succès",
            'icon'        => 'success'
        ]);
        $this->emitSelf('refreshment');
    }

    public $nouvelle_salle;
    public $nouvelle_salle_id;

    public function changeSalleDestination($data){

        if( isset($data['salle_id']) && $data['salle_id'] && ($data['salle_id'] != 'null' ) ){
            $this->nouvelle_salle = Salle::find($data['salle_id']);
            if($this->nouvelle_salle){
                $this->nouvelle_salle_id = $this->nouvelle_salle->id;
            }
        }else{
            $this->nouvelle_salle = null;
            $this->nouvelle_salle_id = null;
            $this->notification()->send([
                'title'       => 'Aucune Salle Choisi!',
                'description' => "Veuillez Choisir une salle où deplacer l'eleve",
                'icon'        => 'warning'
            ]);
        }

    }

    public function changerClasse(){
        $this->validate([
            'nouvelle_salle_id' => 'required|integer|exists:salles,id',
        ]);

        $this->actual_inscription->salle_id = $this->nouvelle_salle_id;


        if($this->actual_inscription->save()){

            $this->notification()->send([
                'title'       => 'Classe Changé!',
                'description' => "{$this->eleve->nom_complet} a été deplacé vers la salle {$this->nouvelle_salle->nom_academique} avec succès",
                'icon'        => 'success'
            ]);
            $this->nouvelle_salle = null;
            $this->nouvelle_salle_id = null;
            $this->emit('confetti');
        }else{
            $this->notification()->send([
                'title'       => 'Erreur!',
                'description' => "La classe de {$this->eleve->nom_complet} n'a pas été changé",
                'icon'        => 'error'
            ]);
        }

        $this->emitSelf('refreshment');

    }


    public $inscription_salle;
    public $inscription_salle_id;


    public function changeSalleNouvelleInscription($data){

        if( isset($data['salle_id']) && $data['salle_id'] && ($data['salle_id'] != 'null' ) ){
            $this->inscription_salle = Salle::find($data['salle_id']);
            if($this->inscription_salle){
                $this->inscription_salle_id = $this->inscription_salle->id;
            }
        }else{
            $this->inscription_salle = null;
            $this->inscription_salle_id = null;
            $this->notification()->send([
                'title'       => 'Aucune Salle Choisi!',
                'description' => "Veuillez Choisir une salle où inscrire l'eleve",
                'icon'        => 'warning'
            ]);
        }
    }

    public function nouvelleInscription(){
        $this->validate([
            'inscription_salle_id' => 'required|integer|exists:salles,id',
        ]);

        $annee = \Hp::annee();
        $inscription = Inscription::updateOrCreate(
            ['eleve_id' => $this->eleve->id, 'annee_academique_id' => $annee->id,],
            ['salle_id' => $this->inscription_salle_id]
        ) ;
        if($inscription){
            $this->actual_inscription = $inscription;
            $this->notification()->send([
                'title'       => 'Inscription Enregistré!',
                'description' => "{$this->eleve->nom_complet} a été inscrit dans la salle {$this->inscription_salle->nom_academique} avec succès",
                'icon'        => 'success'
            ]);
            $this->inscription_salle = null;
            $this->inscription_salle_id = null;
            $this->emit('confetti');
        }else{
            $this->notification()->send([
                'title'       => 'Erreur!',
                'description' => "L'eleve {$this->eleve->nom_complet} n'a pas été inscrit",
                'icon'        => 'error'
            ]);
        }

        $this->emitSelf('refreshment');
    }

    public function abandonEleve(){

        if($this->actual_inscription->marquerAbandon()){
            $this->notification()->send([
                'title'       => "Abandon de L'eleve enregistré !",
                'description' => "l'eleve {$this->eleve->nom_complet} a abandonné les cours pour cette année ",
                'icon'        => 'error'
            ]);
        }else{
            $this->notification()->send([
                'title'       => "Abandon de L'eleve non enregistré !",
                'description' => "Actualisez et Réessayez",
                'icon'        => 'error'
            ]);
        }

    }


    public function annulerAbandonEleve(){
        if($this->actual_inscription->annulerAbandon()){
            $this->notification()->send([
                'title'       => "Abandon de L'eleve annulé !",
                'description' => "l'eleve {$this->eleve->nom_complet} a repris les cours pour cette année ",
                'icon'        => 'success'
            ]);
        }else{
            $this->notification()->send([
                'title'       => "Abandon de L'eleve non annulé !",
                'description' => "Actualisez et Réessayez",
                'icon'        => 'error'
            ]);
        }
    }


    public function customRedirect($url){

        return $this->redirect($url);
    }


    public function supprimerEleve(){
        $nom_eleve = $this->eleve->nom_complet;

        if($this->eleve->delete()){
            $this->notification()->confirm([
                'title'       => "Eleve Supprimé !",
                'description' => "l'eleve {$nom_eleve} a été supprimé ",
                'timeout'     => 1600,
                'acceptLabel' => 'Quitter La Page',
                'method'      => 'customRedirect',
                'params'      => route('dashboard'),

                'onClose' => [
                    'method' => 'customRedirect',
                    'params' => route('dashboard'),
                    ],
                'onDismiss' => [
                    'method' => 'customRedirect',
                    'params' => route('dashboard'),
                ],
                'onTimeout' => [
                    'method' => 'customRedirect',
                    'params' => route('dashboard'),
                ],
            ]);
            
        }else{
            $this->notification()->send([
                'title'       => "Echec !",
                'description' => "l'eleve {$nom_eleve} n'a pas été supprimé",
                'icon'        => 'error'
            ]);
        }
    }



    public function restoreEleve(){
        $nom_eleve = $this->eleve->nom_complet;
        if($this->eleve->restore()){
            $this->notification()->send([
                'title'       => "Eleve Retabli !",
                'description' => "L'enregistrement de l'eleve {$nom_eleve} a été retabli ",
                'icon'        => 'success'
            ]);
            
        }else{
            $this->notification()->send([
                'title'       => "Echec !",
                'description' => "l'eleve {$nom_eleve} n'a pas été retabli, Actualisez et Réessayez",
                'icon'        => 'error'
            ]);
        }
    }


    


    




    public function mount(Eleve $eleve){

        $this->menus = collect( array(
            ['id' => 1, 'icon' => 'edit', 'titre' => 'Information'],
            ['id' => 2, 'icon' => 'briefcase', 'titre' => 'Details'],
            ['id' => 3, 'icon' => 'link', 'titre' => 'Tuteurs'],
            ['id' => 4, 'icon' => 'layers', 'titre' => 'Classes'],
            ['id' => 5, 'icon' => 'bar-chart', 'titre' => 'Resultats'],
            ['id' => 6, 'icon' => 'dollar-sign' ,'titre' => 'Finances'],
            ['id' => 7, 'icon' => 'command', 'titre' => 'actions'])
        );
        $this->currentMenu = $this->menus->first();
        $this->eleve = $eleve;
        $this->inscriptions = $this->eleve->inscriptions;
        $annee = \Hp::annee();
        $this->actual_inscription = $this->inscriptions->firstWhere('annee_academique_id', $annee->id);
    }


    public function render()
    {
        return view('livewire.eleve.show-eleve');
    }
}
