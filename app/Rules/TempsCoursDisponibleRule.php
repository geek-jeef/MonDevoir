<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Cours ;

class TempsCoursDisponibleRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($cours = null)
    {
        $this->cours = $cours;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Cours::isTimeAvailable( request()->input('jour'), $value, request()->input('heure_fin'), request()->input('salle_id'), request()->input('enseignant_id'), $this->cours);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Cette Plage Horaire n'est pas Disponible";
    }
}
