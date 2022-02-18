<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Language;
use App\Models\Personality;
use App\Models\Sign;
use App\Models\Species;
use App\Models\Villagers;
use Illuminate\Database\Seeder;

class VillagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Villagers::query()->delete();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://acnhapi.com/v1/villagers/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $villagers = json_decode(curl_exec($curl));

        foreach ($villagers as $villager) {
            $villagerBDD['en'][$villager->{'file-name'}] = [
                'code' => $villager->{'file-name'} !== null ? $villager->{'file-name'} : "1",
                'name' => $villager->name->{'name-EUen'},
                'gender_id' => Gender::getGender('en', substr($villager->gender, 0, 1))->id,
                'species_id' => Species::getSpece('en', substr($villager->species, 0, 3))->id,
                'lang_id' => Language::getEn()->id,
                'icon_url' => $villager->icon_uri,
            ];
            $villagerBDD['fr'][$villager->{'file-name'}] = [
                'code' => $villager->{'file-name'} !== null ? $villager->{'file-name'} : "1",
                'name' => $villager->name->{'name-EUfr'},
                'gender_id' => Gender::getGender('fr', substr($villager->gender, 0, 1))->id,
                'species_id' => Species::getSpece('fr', substr($villager->species, 0, 3))->id,
                'lang_id' => Language::getEn()->id,
                'icon_url' => $villager->icon_uri,
            ];
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nookipedia.com/villagers",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "X-API-KEY: " . env('API_KEY_NOOKI'),
                "Accept-Version: 1.0.0"
            ),
        ));

        $villagers = json_decode(curl_exec($curl));

        foreach ($villagers as $villager) {
            $villagerBDD['en'][$villager->id]['url'] = $villager->url;
            $villagerBDD['en'][$villager->id]['image_url'] = $villager->image_url;
            $villagerBDD['en'][$villager->id]['phrase'] = $villager->quote;
            $villagerBDD['en'][$villager->id]['catchphrase'] = $villager->phrase;
            $villagerBDD['en'][$villager->id]['clothing'] = $villager->clothing;
            $villagerBDD['en'][$villager->id]['birthday_month'] = $villager->birthday_month;
            $villagerBDD['en'][$villager->id]['birthday_day'] = $villager->birthday_day;
            $villagerBDD['en'][$villager->id]['personality_id'] = Personality::getPersonality('en', substr($villager->personality, 0, 3))->id;
            $villagerBDD['en'][$villager->id]['sign_id'] = Sign::getSign('en', substr($villager->sign, 0, 3))->id;

            $villagerBDD['fr'][$villager->id]['url'] = $villager->url;
            $villagerBDD['fr'][$villager->id]['image_url'] = $villager->image_url;
            $villagerBDD['fr'][$villager->id]['phrase'] = $villager->quote;
            $villagerBDD['fr'][$villager->id]['catchphrase'] = $villager->phrase;
            $villagerBDD['fr'][$villager->id]['clothing'] = $villager->clothing;
            $villagerBDD['fr'][$villager->id]['birthday_month'] = $villager->birthday_month;
            $villagerBDD['fr'][$villager->id]['birthday_day'] = $villager->birthday_day;
            $villagerBDD['fr'][$villager->id]['personality_id'] = Personality::getPersonality('fr', substr($villager->personality, 0, 3))->id;
            $villagerBDD['fr'][$villager->id]['sign_id'] = Sign::getSign('fr', substr($villager->sign, 0, 3))->id;
        }
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

        }
        foreach ($villagerBDD['en'] as $villager) {
            Villagers::create($villager);
        }
    }
}
