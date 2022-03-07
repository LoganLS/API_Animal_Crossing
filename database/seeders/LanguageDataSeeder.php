<?php

namespace Database\Seeders;

use App\Models\LanguageData;
use Illuminate\Database\Seeder;

class LanguageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        LanguageData::query()->delete();
        $langs = [
            [
                'name' => 'en',
                'label' => 'English',
            ],
            [
                'name' => 'fr',
                'label' => 'Français',
            ],
        ];

        foreach ($langs as $lang) {
            LanguageData::create($lang);
        }
    }
}
