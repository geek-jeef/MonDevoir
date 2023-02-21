<?php

namespace App\Steps\Eleve;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class DetailsStep extends Step
{
    protected string $view = 'steps.eleve.details-step';
    public $tuteurs ;


    public function mount()
    {
        $this->mergeState([
            'data' => $this->model->data ,
            'tuteurs' => $this->tuteurs ,
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
                'state.data.medical' => ['nullable'],
                'state.data.commentaire' => ['nullable'],
                'state.tuteurs' => ['nullable','array'],

            ],
            [
                'state.data.medical' => __('Information médical'),
                'state.data.commentaire' => __('commentaire'),
                'state.tuteurs' => __('Tuteurs'),

            ],
        ];
    }

    public function title(): string
    {
        return __('Autres Details');
    }
}