<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icone" => "icofont-computer",
                "created_at" => now(),
            ],
            [
                "icone" => "icofont-chart-bar-graph",
                "created_at" => now(),
            ],
            [
                "icone" => "icofont-earth",
                "created_at" => now(),
            ],
            [
                "icone" => "icofont-image",
                "created_at" => now(),
            ],
            [
                "icone" => "icofont-settings",
                "created_at" => now(),
            ],
            [
                "icone" => "icofont-tasks-alt",
                "created_at" => now(),
            ],
        ]);
    }
}
