<?php

namespace Database\Seeders;

use App\Models\Language;
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
                'lang_id' => Language::getEn()->id,
                'name' => 'Aries',
                'code' => 'Ari',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Taurus',
                'code' => 'Tau',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Gemini',
                'code' => 'Gem',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Cancer',
                'code' => 'Can',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Leo',
                'code' => 'Leo',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Virgo',
                'code' => 'Vir',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Libra',
                'code' => 'Lib',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Scorpio',
                'code' => 'Sco',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Sagittarius',
                'code' => 'Sag',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Capricorn',
                'code' => 'Cap',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Aquarius',
                'code' => 'Aqu',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Pisces',
                'code' => 'Pis',
            ],
            /*Fr*/

            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Bélier',
                'code' => 'Ari',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Taureau',
                'code' => 'Tau',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Gémeaux',
                'code' => 'Gem',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Cancer',
                'code' => 'Can',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Lion',
                'code' => 'Leo',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Vierge',
                'code' => 'Vir',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Balance',
                'code' => 'Lib',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Scorpion',
                'code' => 'Sco',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Sagittaire',
                'code' => 'Sag',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Capricorne',
                'code' => 'Cap',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Verseau',
                'code' => 'Aqu',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Poisson',
                'code' => 'Pis',
            ],
        ];

        foreach ($signs as $sign) {
            Sign::create($sign);
        }
    }
}


