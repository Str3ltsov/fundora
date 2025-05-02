<?php

namespace Database\Seeders;

use App\Models\ProductCountry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCountrySeeder extends Seeder
{
    private array $countryNames = [
        "en" => [
            "Spain",
            "Northern Cyprus",
            "Indonesia",
            "Vietnam",
            "Cambodia"
        ],
        "lt" => [
            "Ispanija",
            "Šiaurės Kipras",
            "Indonezija",
            "Vietnamas",
            "Kambodža"
        ],
        "ru" => [
            "Испания",
            "Северный Кипр",
            "Индонезия",
            "Вьетнам",
            "Камбоджа"
        ],
        "pl" => [
            "Hiszpania",
            "Cypr Północny",
            "Indonezja",
            "Wietnam",
            "Kambodża"
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (config('app.available_locales') as $locale) {
            foreach ($this->countryNames[$locale] as $countryName) {
                $country = ProductCountry::create();

                DB::table('product_country_translations')->insert([
                    "name" => $countryName,
                    "locale" => $locale,
                    "country_id" => $country->id
                ]);
            }
        }
    }
}
