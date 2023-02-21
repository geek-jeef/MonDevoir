<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class GeneralSettingsMigration extends SettingsMigration
{

    public function up(): void
    {
        $this->migrator->add('general.nom_ecole', config('ecole.nom.long'));
        $this->migrator->add('general.nom_court_ecole', config('ecole.nom.court'));
        $this->migrator->add('general.programme', config('ecole.default.programme'));
        $this->migrator->add('general.email', config('ecole.default.email'));
        $this->migrator->add('general.telephone1', config('ecole.default.telephone1'));
        $this->migrator->add('general.telephone2', config('ecole.default.telephone2'));
        $this->migrator->add('general.poste', config('ecole.default.poste'));
        $this->migrator->add('general.quartier', config('ecole.default.quartier'));
        $this->migrator->add('general.ville', config('ecole.default.ville'));
        $this->migrator->add('general.pays', config('ecole.default.pays'));
    }
}
