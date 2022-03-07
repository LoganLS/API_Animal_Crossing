<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Language::query()->delete();
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
            Language::create($lang);
        }
    }
}
