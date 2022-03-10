<?php

namespace Database\Seeders;

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
       /* Music::query()->delete();*/
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
            $songsBDD['en'][$bug->name]['name'] = $bug->name;
            $songsBDD['en'][$bug->name]['url'] = $bug->url;
            $songsBDD['en'][$bug->name]['icon_url'] = $bug->image_url;
            $songsBDD['en'][$bug->name]['image_url'] = $bug->render_url;
            $songsBDD['en'][$bug->name]['image_url'] = $bug->render_url;
            $songsBDD['en'][$bug->name]['catchphrase'] = $bug->render_url;
            $songsBDD['fr'][$bug->name]['lang_id'] = LanguageData::getEn()->id;
        }
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

        }

        foreach ($songsBDD['en'] as $song) {
            Music::create($song);
        }

        foreach ($songsBDD['fr'] as $song) {
            Music::create($song);
        }
    }
}
