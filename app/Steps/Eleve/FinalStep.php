<?php

namespace App\Steps\Eleve;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

use App\Models\Salle;
use App\Models\Tuteur;

class FinalStep extends Step
{

    protected string $view = 'steps.eleve.final-step';

    public function mount()
    {
        $this->mergeState([
        ]);
    }

    public function icon(): string
    {
        return 'check';
    }

    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $eleve = $this->model;

        $eleve->nom = $state['nom'];
        $eleve->prenoms = $state['prenoms'];
        $eleve->genre = $state['genre'];
        $eleve->date_de_naissance = $state['date_de_naissance'];
        $eleve->lieu_de_naissance = $state['lieu_de_naissance'];
        $eleve->date_inscription = now();

        $eleve->nationalite = $state['nationalite'];
        $eleve->adresse = $state['adresse'];
        $eleve->data = $state['data'];

        $eleve->save();
        foreach($state['tuteurs'] as $tuteur_id){
            $Un_tuteur = Tuteur::find($tuteur_id);
            $Un_tuteur->assignerEleve($eleve);
        }

        $info = json_decode($state['academique'], true);
        //$Cycle = App\Models\CycleAcademique::find($info['cycle_id']);
        //$Classe = App\Models\Classe::find($info['classe_id']);
        $Salle = Salle::find($info['salle_id']);
        $inscription = $Salle->ajouterEleve($eleve);

        foreach($state['tags'] as $tag_id){
            $tag = \Tag::find($tag_id);
            if($tag){
                $inscription->attachTag($tag);
            }
        }

        $this->getLivewire()->succcesNotification();
        $this->getLivewire()->resetForm();
    }

    public function validate()
    {
        return [
            /*[
                'state.email' => ['required', 'email', Rule::unique('users', 'email')],
            ],
            [
                'state.email' => __('Email'),
            ],*/
        ];
    }

    public function title(): string
    {
        return __('Finalisation');
    }
}