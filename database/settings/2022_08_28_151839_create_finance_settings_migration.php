<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFinanceSettingsMigration extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('finance.types_depense', config('ecole.finance.depenses.types'));
        $this->migrator->add('finance.types_revenu', config('ecole.finance.revenus.types'));
        $this->migrator->add('finance.id_employeur',config('ecole.finance.id_employeur'));


    }
}
