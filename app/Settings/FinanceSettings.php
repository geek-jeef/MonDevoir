<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FinanceSettings extends Settings
{
    public array  $types_depense;
    public array  $types_revenu;
    public string $id_employeur;
    public static function group(): string
    {
        return 'finance';
    }
}
