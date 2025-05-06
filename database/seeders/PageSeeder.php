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
        ]
    ];

    private array $pageNames = [
        'en' => [
            'Fundora – Global Real Estate Opportunities',
            'Our Services',
            'FAQ'
        ],
        'lt' => [
            'Fundora – Global Real Estate Opportunities',
            'Paslaugos',
            'Dažnai užduodami klausimai'
        ],
        'ru' => [
            'Fundora – Global Real Estate Opportunities',
            'Наши услуги',
            'Часто задаваемые вопросы'
        ],
        'pl' => [
            'Fundora – Global Real Estate Opportunities',
            'Usługi',
            'Często zadawane pytania'
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
            $initialValue = 1;
            static $pageId = $initialValue;

            foreach ($this->pageNames[$locale] as $pageName) {
                DB::table('page_translations')->insert([
                    "name" => $pageName,
                    "locale" => $locale,
                    "page_id" => $pageId,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
                $pageId++;
            }

            $pageId = $initialValue;
        }
    }
}
