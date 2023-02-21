<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Dirape\Token\Token;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnel>
 */
class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nom = $this->faker->lastName();
        $prenoms = $this->faker->lastName();
        $mail = $this->faker->unique()->safeEmail();
        $designation = [ 'Directeur', 'Vice Directeur', 'Professeur', 'Proviseur', 'Censeur', 'Enseignant', 'Laboratin', 'Bibliothequaire', 'Informaticien', 'Comptable', 'Caissier', 'Gardien', 'Autres'];
        $qualification = [ 'BEPC', 'BAC', 'Licence', 'BT', 'BTS', 'Master', 'Doctorat', 'Professorat','Autres'];


        $genre = ["Masculin","Feminin"];



        $user = \App\Models\User::factory()->create([
            'name' => $nom.' '.$prenoms,
            'email' => $mail,
        ]);

        return [
            'user_id' => $user->id,
            'nom' => $nom,
            'prenoms' => $prenoms,
            'token_id' => \Dirape\Token\Facades\Facade::Unique('personnels', 'token_id', 7 ) ,
            'designation' => $designation[rand(0, 12)],
            'qualification' => $qualification[rand(0, 8)],
            'date_de_naissance' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years'),
            'genre' => $genre[rand(0,1)],
            'email' => $mail,
            'phone' => $this->faker->e164PhoneNumber(),
            'adresse' => $this->faker->address(),
            'date_embauche' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = '-1 years'),
            'date_depart' => null,
        ];
            
    }
}

/*
'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
*/

/*
$table->unsignedInteger('user_id')->nullable();
            $table->string('token_id',50)->default(Token::Unique('personnels', 'token_id', 7 ));
            $table->string('nom');
            $table->string('prenoms');
            $table->unsignedTinyInteger('designation')->nullable(20);
            $table->string('qualification')->nullable();
            $table->date('date_de_naissance',10);
            $table->enum('genre', [1,2])->default(1);
            $table->string('email',100)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('adresse',500)->nullable();
            $table->date('date_embauche');
            $table->date('date_depart')->nullable();
            //$table->string('photo')->nullable();
            //$table->string('signature')->nullable();
            $table->enum('status', [0,1])->default(1);
*/