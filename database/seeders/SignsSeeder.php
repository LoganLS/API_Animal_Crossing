<?php

namespace Database\Seeders;

use App\Models\LanguageData;
use App\Models\Sign;
use Illuminate\Database\Seeder;

class SignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sign::query()->delete();
        $signs = [
            /*En*/

            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Aries',
                'code' => 'Ari',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Taurus',
                'code' => 'Tau',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Gemini',
                'code' => 'Gem',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Cancer',
                'code' => 'Can',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Leo',
                'code' => 'Leo',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Virgo',
                'code' => 'Vir',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Libra',
                'code' => 'Lib',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Scorpio',
                'code' => 'Sco',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Sagittarius',
                'code' => 'Sag',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Capricorn',
                'code' => 'Cap',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Aquarius',
                'code' => 'Aqu',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Pisces',
                'code' => 'Pis',
            ],
            /*Fr*/

            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Bélier',
                'code' => 'Ari',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Taureau',
                'code' => 'Tau',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Gémeaux',
                'code' => 'Gem',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Cancer',
                'code' => 'Can',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Lion',
                'code' => 'Leo',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Vierge',
                'code' => 'Vir',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Balance',
                'code' => 'Lib',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Scorpion',
                'code' => 'Sco',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Sagittaire',
                'code' => 'Sag',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Capricorne',
                'code' => 'Cap',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Verseau',
                'code' => 'Aqu',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Poisson',
                'code' => 'Pis',
            ],
        ];

        foreach ($signs as $sign) {
            Sign::create($sign);
        }
    }
}


