<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(public_path('dist/json/pays.json')), true);
        DB::table('pays')->insert($data);

        /*$data = json_decode(file_get_contents(public_path('dist/json/metier.json')), true);
        DB::table('professions')->insert($data);*/

    }
}
