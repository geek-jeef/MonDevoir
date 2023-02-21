<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo PHP_EOL, 'beging seeding.....';

        echo PHP_EOL, 'Seeding super admin.....';

        \App\Models\User::factory()->create([
            'name' => 'TUMBA Guy-Jeef',
            'email' => 'superadmin@dev.com',
            'email_verified_at' => now(),
            'password' => Hash::make('dev-mode'), // password
            'remember_token' => Str::random(10),
            'is_super_admin' => true ,
        ]);

        $this->call(JsonSeeder::class);


        /*echo PHP_EOL, 'Seeding PersonnelSeeder.....';
        $this->call(PersonnelSeeder::class); 
        echo PHP_EOL, 'Seeding EleveSeeder.....';
        $this->call(EleveSeeder::class);*/
        
        /*$this->call(AnneeAcademiqueSeeder::class);
        $this->call(CycleAcademiqueSeeder::class);

        $this->call(SemestreSeeder::class); 
        $this->call(ClasseSeeder::class);
        $this->call(SalleSeeder::class);*/
        /*$this->call(MatiereSeeder::class);
        echo PHP_EOL, 'Seeding TuteurSeeder.....';
        $this->call(TuteurSeeder::class);
        $this->call(EleveSalleSeeder::class);
        $eleves = \App\Models\Eleve::all();
        foreach($eleves as $eleve)
        {
            DB::table('eleve_tuteur')->insert(
                [
                    'eleve_id' => $eleve->id,
                    'tuteur_id' => \App\Models\Tuteur::inRandomOrder()->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }*/

        echo PHP_EOL, 'Seeding Tags.....';
        $tagBoursier = \Spatie\Tags\Tag::findOrCreate('Boursier','Eleves');
        $tagBoursier->setTranslation('name', 'court', 'BS');
        $tagBoursier->save();
        $tagEE = \Spatie\Tags\Tag::findOrCreate("Enfant d'Enseignant",'Eleves');
        $tagEE->setTranslation('name', 'court', 'EE');
        $tagEE->save();
        
        $tagAbd = \Spatie\Tags\Tag::findOrCreate('Abandon','Eleves');
        $tagAbd->setTranslation('name', 'court', 'ABD');
        $tagAbd->save();


    }
}

