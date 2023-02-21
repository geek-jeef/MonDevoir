<?php

namespace App\Steps\Eleve;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class AcademiqueStep extends Step
{
    protected string $view = 'steps.eleve.academique-step';

    public $academique;
    public $tags;

    public function mount()
    {
        $this->mergeState([
            'academique' => $this->academique ,
            'tags' => $this->tags ,
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
                'state.academique' => ['required','string'],
                'state.tags' => ['nullable','array'],
            ],
            [
                'state.academique' => __('Information Academique'),
                'state.tags' => __('Marquage'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Information Academique');
    }
}