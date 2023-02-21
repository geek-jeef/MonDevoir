<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $nom_ecole;
    public string $nom_court_ecole;
    public string $programme;
    public string $email;
    public string $telephone1;
    public string $telephone2;
    public string $poste;
    public string $quartier;
    public string $ville;
    public string $pays;
    
    public static function group(): string
    {
        return 'general';
    }
}