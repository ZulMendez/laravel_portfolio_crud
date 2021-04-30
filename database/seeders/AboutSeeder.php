<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "info" => "Birthday",
                "value" => "1 May 1995",
                "created_at" => now(),
            ],
            [
                "info" => "Website",
                "value" => "www.example.com",
                "created_at" => now(),
            ],
            [
                "info" => "Phone",
                "value" => "+1234567890,",
                "created_at" => now(),
            ],
            [
                "info" => "City",
                "value" => "New York, USA",
                "created_at" => now(),
            ],
            [
                "info" => "Age",
                "value" => "30",
                "created_at" => now(),
            ],
            [
                "info" => "Degree",
                "value" => "Master",
                "created_at" => now(),
            ],
            [
                "info" => "Email",
                "value" => "email@example.com",
                "created_at" => now(),
            ],
            [
                "info" => "Freelance",
                "value" => "Available",
                "created_at" => now(),
            ],
        ]);
    }
}
