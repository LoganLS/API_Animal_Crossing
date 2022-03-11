<?php

namespace Database\Seeders;

use App\Models\Insect;
use App\Models\LanguageData;
use App\Models\Music;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class BugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Insect::query()->delete();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nookipedia.com/nh/bugs",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "X-API-KEY: " . env('API_KEY_NOOKI'),
                "Accept-Version: 1.0.0"
            ),
        ));

        $bugs = json_decode(curl_exec($curl));
        $bugs = new Collection($bugs);

        foreach ($bugs as $bug) {
            dump($bug->name);
            $bugsBDD['en'][$bug->name]['name'] = $bug->name;
            $bugsBDD['en'][$bug->name]['url'] = $bug->url;
            $bugsBDD['en'][$bug->name]['icon_url'] = $bug->image_url;
            $bugsBDD['en'][$bug->name]['image_url'] = $bug->render_url;
            $bugsBDD['en'][$bug->name]['catchphrase'] = $bug->catchphrase;
            $bugsBDD['en'][$bug->name]['catchphrase2'] = $bug->catchphrase2;
            $bugsBDD['en'][$bug->name]['location'] = $bug->location;
            $bugsBDD['en'][$bug->name]['rarity'] = $bug->rarity;
            $bugsBDD['en'][$bug->name]['total_catch'] = $bug->total_catch;
            $bugsBDD['en'][$bug->name]['sell_nook'] = $bug->sell_nook;
            $bugsBDD['en'][$bug->name]['sell_flick'] = $bug->sell_flick;
            $bugsBDD['en'][$bug->name]['tank_width'] = $bug->tank_width;
            $bugsBDD['en'][$bug->name]['tank_length'] = $bug->tank_length;
            $bugsBDD['en'][$bug->name]['time'] = $bug->time;
            $bugsBDD['en'][$bug->name]['n_availability'] = $bug->n_availability;
            $bugsBDD['en'][$bug->name]['s_availability'] = $bug->s_availability;

            $bugsBDD['fr'][$bug->name]['name'] = $bug->name;
            $bugsBDD['fr'][$bug->name]['url'] = $bug->url;
            $bugsBDD['fr'][$bug->name]['icon_url'] = $bug->image_url;
            $bugsBDD['fr'][$bug->name]['image_url'] = $bug->render_url;
            $bugsBDD['fr'][$bug->name]['catchphrase'] = $bug->catchphrase;
            $bugsBDD['fr'][$bug->name]['catchphrase2'] = $bug->catchphrase2;
            $bugsBDD['fr'][$bug->name]['location'] = $bug->location;
            $bugsBDD['fr'][$bug->name]['rarity'] = $bug->rarity;
            $bugsBDD['fr'][$bug->name]['total_catch'] = $bug->total_catch;
            $bugsBDD['fr'][$bug->name]['sell_nook'] = $bug->sell_nook;
            $bugsBDD['fr'][$bug->name]['sell_flick'] = $bug->sell_flick;
            $bugsBDD['fr'][$bug->name]['tank_width'] = $bug->tank_width;
            $bugsBDD['fr'][$bug->name]['tank_length'] = $bug->tank_length;
            $bugsBDD['fr'][$bug->name]['time'] = $bug->time;
            $bugsBDD['fr'][$bug->name]['n_availability'] = $bug->n_availability;
            $bugsBDD['fr'][$bug->name]['s_availability'] = $bug->s_availability;

            $bugsBDD['fr'][$bug->name]['lang_id'] = LanguageData::getEn()->id;
        }
        die();
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

        }
        foreach ($bugsBDD['en'] as $bug) {
            Insect::create($bug);
        }

        foreach ($bugsBDD['fr'] as $bug) {
            Insect::create($bug);
        }
    }
}
