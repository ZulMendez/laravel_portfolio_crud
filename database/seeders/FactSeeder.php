<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "counter" => 232,
                "texte" => "Happy Clients",
                "icone" => "icofont-simple-smile",
                "created_at" => now(),
            ],
            [
                "counter" => 521,
                "texte" => "Projects",
                "icone" => "icofont-document-folder",
                "created_at" => now(),
            ],
            [
                "counter" => 1463,
                "texte" => "Hours Of Support",
                "icone" => "icofont-live-support",
                "created_at" => now(),
            ],
            [
                "counter" => 15,
                "texte" => "Hard Workers",
                "icone" => "icofont-users-alt-5",
                "created_at" => now(),
            ],
        ]);
    }
}
