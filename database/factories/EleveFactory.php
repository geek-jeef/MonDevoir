<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $liste_pays = json_decode(file_get_contents(resource_path('json/pays.json')), true);
        $pays = $liste_pays[rand(0,194)];
        $genre = ["Masculin","Feminin"];

        return [
            'user_id' => null,
            'nom' => $this->faker->lastName(),
            'prenoms' => $this->faker->lastName(),
            'genre' => $genre[rand(0,1)],
            'date_de_naissance' => $this->faker->dateTimeBetween($startDate = '-18 years', $endDate = '-5 years'),
            'lieu_de_naissance' => "Lomé",
            'date_inscription' => $this->faker->dateTimeBetween($startDate = '-6 years', $endDate = '-1 years'),
            'nationalite' => $pays['nationalite'],
            'adresse' => $this->faker->address(),
        ];

    }
}