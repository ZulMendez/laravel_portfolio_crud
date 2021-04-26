<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "compet" => "html",
                "pourcent" => 100,
                "created_at" => now(),
            ],
            [
                "compet" => "css",
                "pourcent" => 90,
                "created_at" => now(),
            ],
            [
                "compet" => "javascript",
                "pourcent" => 75,
                "created_at" => now(),
            ],
            [
                "compet" => "php",
                "pourcent" => 80,
                "created_at" => now(),
            ],
            [
                "compet" => "cms",
                "pourcent" => 90,
                "created_at" => now(),
            ],
            [
                "compet" => "photoshop",
                "pourcent" => 55,
                "created_at" => now(),
            ],
        ]);
    }
}
