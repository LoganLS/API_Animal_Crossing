<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Gender;
use App\Models\LanguageData;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::query()->delete();

        $characters = file_get_contents("https://raw.githubusercontent.com/Norviah/animal-crossing/master/json/data/Special%20NPCs.json");
        $characters = json_decode($characters);

        $characters = new Collection($characters);
        foreach ($characters as $character) {
            if (!$character->npcId == null && !$character->npcId == '') {
                $month = Carbon::parse(DateTime::createFromFormat('!m', strstr($character->birthday, '/', true)))->locale('en')->getTranslatedMonthName();
                $characterBDD['en'][$character->npcId]['name'] = $character->name;
                $characterBDD['en'][$character->npcId]['npcId'] = $character->npcId;
                $characterBDD['en'][$character->npcId]['photoImage'] = $character->photoImage;
                $characterBDD['en'][$character->npcId]['iconImage'] = $character->iconImage;
                $characterBDD['en'][$character->npcId]['gender_id'] = Gender::getGender('en', substr($character->gender, 0, 1))->id;
                $characterBDD['en'][$character->npcId]['birthday_month'] = ucfirst($month);
                $characterBDD['en'][$character->npcId]['birthday_day'] =  substr(strstr($character->birthday, '/'), 1);
                $characterBDD['en'][$character->npcId]['lang_id'] = LanguageData::getEn()->id;

                $month = Carbon::parse(DateTime::createFromFormat('!m', strstr($character->birthday, '/', true)))->locale('fr')->getTranslatedMonthName();

                $characterBDD['fr'][$character->npcId]['name'] = $character->translations->eUfr;
                $characterBDD['fr'][$character->npcId]['npcId'] = $character->npcId;
                $characterBDD['fr'][$character->npcId]['photoImage'] = $character->photoImage;
                $characterBDD['fr'][$character->npcId]['iconImage'] = $character->iconImage;
                $characterBDD['fr'][$character->npcId]['gender_id'] = Gender::getGender('fr', substr($character->gender, 0, 1))->id;
                $characterBDD['fr'][$character->npcId]['birthday_month'] = ucfirst($month);
                $characterBDD['fr'][$character->npcId]['birthday_day'] = substr(strstr($character->birthday, '/'), 1);
                $characterBDD['fr'][$character->npcId]['lang_id'] = LanguageData::getFr()->id;
            }
        }

        foreach ($characterBDD['en'] as $character) {
            Character::create($character);
        }

        foreach ($characterBDD['fr'] as $character) {
            Character::create($character);
        }
    }
}
