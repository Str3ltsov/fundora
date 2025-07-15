<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    private array $pages = [
        [
            'uri' => 'about-us',
            'alias' => 'aboutUs'
        ],
        [
            'uri' => 'services',
            'alias' => 'services'
        ],
        [
            'uri' => 'faq',
            'alias' => 'faq'
        ],
        [
            'uri' => 'privacy-policy',
            'alias' => 'privacyPolicy'
        ]
    ];

    private array $pageData = [
        'en' => [
            'names' => [
                'About us',
                'Services',
                'FAQ',
                'Privacy policy'
            ],
            'titles' => [
                'Fundora – Global Real Estate Opportunities',
                'Our Services',
                'FAQ',
                'Privacy policy'
            ]
        ],
        'lt' => [
            'names' => [
                'Apie mus',
                'Paslaugos',
                'DUK',
                'Privatumo politika'
            ],
            'titles' => [
                'Fundora – Global Real Estate Opportunities',
                'Paslaugos',
                'Dažnai užduodami klausimai',
                'Privatumo politika'
            ]
        ],
        'ru' => [
            'names' => [
                'О нас',
                'Услуги',
                'FAQ',
                'Политика конфиденциальности'
            ],
            'titles' => [
                'Fundora – Global Real Estate Opportunities',
                'Наши услуги',
                'Часто задаваемые вопросы',
                'Политика конфиденциальности'
            ]
        ],
        'pl' => [
            'names' => [
                'O nas',
                'Usługi',
                'FAQ',
                'Polityka prywatności'

            ],
            'titles' => [
                'Fundora – Global Real Estate Opportunities',
                'Usługi',
                'Często zadawane pytania',
                'Polityka prywatności'
            ]
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->pages as $page) {
            Page::factory()->create([
                'uri' => $page['uri'],
                'alias' => $page['alias']
            ]);
        }

        foreach (config('app.available_locales') as $locale) {

            for ($i = 0; $i < count($this->pages); $i++) {
                $currentPageData = $this->pageData[$locale];

                DB::table('page_translations')->insert([
                    "name" => $currentPageData['names'][$i],
                    "title" => $currentPageData['titles'][$i],
                    "locale" => $locale,
                    "page_id" => $i + 1,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
            }
        }
    }
}
