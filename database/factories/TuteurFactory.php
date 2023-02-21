<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tuteur>
 */
class TuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        $metier = json_decode(file_get_contents(resource_path('json/metier.json')), true);
        $genre = ["Masculin","Feminin"];
        $rand_keys = array_rand($metier, 1);

        return [
            'user_id' => null,
            'nom' => $this->faker->name(),
            'phone_primaire' => $this->faker->e164PhoneNumber(),
            'phone_secondaire' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->address(),
            'profession' => $metier[$rand_keys]['nom'],
            'genre' => $genre[rand(0,1)]
        ];
    }
}