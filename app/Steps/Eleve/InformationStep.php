<?php

namespace App\Steps\Eleve;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class InformationStep extends Step
{
    protected string $view = 'steps.eleve.information-step';

    public function mount()
    {
        $this->mergeState([
            'nom' => $this->model->nom ,
            'prenoms' => $this->model->prenoms ,
            'genre' => $this->model->genre ,
            'date_de_naissance' => $this->model->date_de_naissance ,
            'lieu_de_naissance' => $this->model->lieu_de_naissance ,
            'nationalite' => $this->model->nationalite ,
            'adresse' => $this->model->adresse ,
            'data' => $this->model->data ,
        ]);
    }

    public function icon(): string
    {
        return 'check';
    }

    public function validate()
    {
        return [
            [
                'state.nom' => ['required'],
                'state.prenoms' => ['required'],
                'state.genre' => ['required'],
                'state.date_de_naissance' => ['required','date'],
                'state.lieu_de_naissance' => ['required'],
                'state.nationalite' => ['required'],
                'state.adresse' => ['nullable'],
            ],
            [
                'state.nom' => __('Nom'),
                'state.prenoms' => __('Prénoms'),
                'state.genre' => __('Genre'),
                'state.date_de_naissance' => __('Date de Naissance'),
                'state.lieu_de_naissance' => __('Lieu de Naissance'),
                'state.nationalite' => __('Nationalité'),
                'state.adresse' => __('Adresse'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Information');
    }
}