<?php

namespace WireUi\View\Components;

use Illuminate\Support\{Str, Stringable};

class Radio extends FormComponent
{
    public bool $sm;

    public bool $md;

    public bool $lg;

    public ?string $label;

    public ?string $leftLabel;

    public ?string $description;

    public function __construct(
        bool $md = false,
        bool $lg = false,
        ?string $label = null,
        ?string $leftLabel = null,
        ?string $description = null
    ) {
        $this->sm           = !$md && !$lg;
        $this->md           = $md;
        $this->lg           = $lg;
        $this->label        = $label;
        $this->leftLabel    = $leftLabel;
        $this->description  = $description;
    }

    protected function getView(): string
    {
        return 'wireui::components.radio';
    }

    public function getClasses(bool $hasError): string
    {
        return Str::of("form-radio rounded-full transition ease-in-out duration-100 {$this->size()}")->unless(
            $hasError,
            function (Stringable $stringable) {
                return $stringable->append('
                    border-wire_secondary-300 text-wire_primary-600 focus:ring-wire_primary-600 focus:border-wire_primary-400
                    dark:border-wire_secondary-500 dark:checked:border-wire_secondary-600 dark:focus:ring-wire_secondary-600
                    dark:focus:border-wire_secondary-500 dark:bg-wire_secondary-600 dark:text-wire_secondary-600
                    dark:focus:ring-offset-wire_secondary-800
                ');
            },
            function (Stringable $stringable) {
                return $stringable->append('
                    focus:ring-wire_negative-500 ring-wire_negative-500 border-wire_negative-400 text-wire_negative-600
                    focus:border-wire_negative-400 dark:focus:border-wire_negative-600 dark:ring-wire_negative-600
                    dark:border-wire_negative-600 dark:bg-wire_negative-700 dark:checked:bg-wire_negative-700
                    dark:focus:ring-offset-wire_secondary-800 dark:checked:border-wire_negative-700
                ');
            },
        );
    }

    private function size(): string
    {
        return $this->classes([
            'w-5 h-5' => $this->md,
            'w-6 h-6' => $this->lg,
        ]);
    }
}
