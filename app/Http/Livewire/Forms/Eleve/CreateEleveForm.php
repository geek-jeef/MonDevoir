<?php

namespace App\Http\Livewire\Forms\Eleve;

use Vildanbina\LivewireWizard\WizardComponent;
use App\Models\Eleve;
use App\Steps\Eleve\InformationStep;
use App\Steps\Eleve\DetailsStep;
use App\Steps\Eleve\AcademiqueStep;
use App\Steps\Eleve\FinalStep;

use Illuminate\Contracts\View\View;
use WireUi\Traits\Actions;

class CreateEleveForm extends WizardComponent
{
    use Actions;
    //My custom class property
    public $eleveId;


    public array $steps = [
        InformationStep::class,
        DetailsStep::class,
        AcademiqueStep::class,
        FinalStep::class,
    ];
    
    public function model()
    {
        return Eleve::findOrNew($this->eleveId);
    }

    public function succcesNotification()
    {
        $this->notification()->success(
            $title = 'Nouvel Eleve',
            $description = "L'Eleve ".$this->model()->nom." a été enregistré"
        );
    }

    public function render(): View
    {
        return view('livewire.forms.eleve.create-eleve-form', [
            'stepInstances' => $this->stepClasses(),
        ]);
    }

    /*public function render()
    {
        return view('livewire.forms.eleve.create-eleve-form');
    }*/
}
