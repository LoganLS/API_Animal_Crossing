<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\LanguageData;
use App\Models\Personality;
use Illuminate\Database\Seeder;

class PersonalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personality::query()->delete();
        $personalities = [
            /*En*/

            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Cranky',
                'gender_id' => Gender::getGender('en', 'M')->id,
                'code' => 'Cra',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Lazy',
                'gender_id' => Gender::getGender('en', 'M')->id,
                'code' => 'Laz',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Jock',
                'gender_id' => Gender::getGender('en', 'M')->id,
                'code' => 'Joc',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Smug',
                'gender_id' => Gender::getGender('en', 'M')->id,
                'code' => 'Smu',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Snooty',
                'gender_id' => Gender::getGender('en', 'F')->id,
                'code' => 'Sno',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Normal',
                'gender_id' => Gender::getGender('en', 'F')->id,
                'code' => 'Nor',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Peppy',
                'gender_id' => Gender::getGender('en', 'F')->id,
                'code' => 'Pep',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Sisterly',
                'gender_id' => Gender::getGender('en', 'F')->id,
                'code' => 'Sis',
            ],

            /*Fr*/

            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Versatile',
                'gender_id' => Gender::getGender('fr', 'M')->id,
                'code' => 'Cra',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Sportif',
                'gender_id' => Gender::getGender('fr', 'M')->id,
                'code' => 'Joc',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Paresseux',
                'gender_id' => Gender::getGender('fr', 'M')->id,
                'code' => 'Laz',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Chic',
                'gender_id' => Gender::getGender('fr', 'M')->id,
                'code' => 'Smu',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Normale',
                'gender_id' => Gender::getGender('fr', 'F')->id,
                'code' => 'Nor',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Vive',
                'gender_id' => Gender::getGender('fr', 'F')->id,
                'code' => 'Pep',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Grande soeur',
                'gender_id' => Gender::getGender('fr', 'F')->id,
                'code' => 'Sis',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Arrogante',
                'gender_id' => Gender::getGender('fr', 'F')->id,
                'code' => 'Sno',
            ],
        ];

        foreach ($personalities as $personality) {
            Personality::create($personality);
        }
    }
}
