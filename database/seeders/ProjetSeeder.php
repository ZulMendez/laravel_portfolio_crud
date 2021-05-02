<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            [
                "img" => "portfolio-1.jpg",
                "filter" => "filter-app",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-2.jpg",
                "filter" => "filter-card",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-3.jpg",
                "filter" => "filter-app",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-4.jpg",
                "filter" => "filter-web",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-5.jpg",
                "filter" => "filter-app",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-6.jpg",
                "filter" => "filter-card",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-7.jpg",
                "filter" => "filter-web",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-8.jpg",
                "filter" => "filter-web",
                "created_at" => now(),
            ],
            [
                "img" => "portfolio-9.jpg",
                "filter" => "filter-card",
                "created_at" => now(),
            ],
        ]);
    }
}
