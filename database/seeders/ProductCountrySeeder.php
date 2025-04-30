<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_countries')->insert([
            ["name" => "Spain"],
            ["name" => "Northern Cyprus"],
            ["name" => "Indonesia"],
            ["name" => "Vietnam"],
            ["name" => "Cambodia"]
        ]);
    }
}
