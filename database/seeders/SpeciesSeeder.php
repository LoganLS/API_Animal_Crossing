<?php

namespace Database\Seeders;

use App\Models\LanguageData;
use App\Models\Species;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Species::query()->delete();
        $species = [
            /*En*/

            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Alligator',
                'code' => 'All',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Anteater',
                'code' => 'Ant',
            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Bear',
                'code' => 'Bea',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Bird',
                'code' => 'Bir',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Bull',
                'code' => 'Bul',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Cat',
                'code' => 'Cat',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Cub',
                'code' => 'Cub',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Chicken',
                'code' => 'Chi',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Cow',
                'code' => 'Cow',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Deer',
                'code' => 'Dee',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Dog',
                'code' => 'Dog',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Duck',
                'code' => 'Duc',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Eagle',
                'code' => 'Eag',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Elephant',
                'code' => 'Ele',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Frog',
                'code' => 'Fro',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Goat',
                'code' => 'Goa',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Gorilla',
                'code' => 'Gor',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Hamster',
                'code' => 'Ham',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Hippo',
                'code' => 'Hip',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Horse',
                'code' => 'Hor',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Koala',
                'code' => 'Koa',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Kangaroo',
                'code' => 'Kan',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Lion',
                'code' => 'Lio',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Monkey',
                'code' => 'Mon',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Mouse',
                'code' => 'Mou',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Octopus',
                'code' => 'Oct',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Ostrich',
                'code' => 'Ost',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Penguin',
                'code' => 'Pen',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Pig',
                'code' => 'Pig',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Rabbit',
                'code' => 'Rab',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Rhino',
                'code' => 'Rhi',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Sheep',
                'code' => 'She',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Squirrel',
                'code' => 'Squ',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Tiger',
                'code' => 'Tig',

            ],
            [
                'lang_id' => LanguageData::getEn()->id,
                'name' => 'Wolf',
                'code' => 'Wol',

            ],

            /*Fr*/

            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Alligator',
                'code' => 'All',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Tamanoir',
                'code' => 'Ant',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Ours',
                'code' => 'Bea',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Oiseau',
                'code' => 'Bir',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Taureau',
                'code' => 'Bul',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Chat',
                'code' => 'Cat',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Lionceau',
                'code' => 'Cub',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Poulet',
                'code' => 'Chi',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Vache',
                'code' => 'Cow',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Cerf',
                'code' => 'Dee',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Chien',
                'code' => 'Dog',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Canard',
                'code' => 'Duc',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Aigle',
                'code' => 'Eag',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Éléphant',
                'code' => 'Ele',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Grenouille',
                'code' => 'Fro',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Chèvre',
                'code' => 'Goa',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Gorille',
                'code' => 'Gor',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Hamster',
                'code' => 'Ham',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Hippopotame',
                'code' => 'Hip',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Cheval',
                'code' => 'Hor',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Koala',
                'code' => 'Koa',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Kangourou',
                'code' => 'Kan',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Lion',
                'code' => 'Lio',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Singe',
                'code' => 'Mon',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Souris',
                'code' => 'Mou',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Pieuvre',
                'code' => 'Oct',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Autruche',
                'code' => 'Ost',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Pingouin',
                'code' => 'Pen',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Cochon',
                'code' => 'Pig',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Lapin',
                'code' => 'Rab',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Rhinocéros',
                'code' => 'Rhi',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Mouton',
                'code' => 'She',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Écureuil',
                'code' => 'Squ',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Tigre',
                'code' => 'Tig',
            ],
            [
                'lang_id' => LanguageData::getFr()->id,
                'name' => 'Loup',
                'code' => 'Wol',
            ],
        ];

        foreach ($species as $spec) {
            Species::create($spec);
        }
    }
}
