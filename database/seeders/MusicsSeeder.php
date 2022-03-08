<?php

namespace Database\Seeders;

use App\Models\LanguageData;
use App\Models\Music;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class MusicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Music::query()->delete();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://acnhapi.com/v1/songs/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $songs = json_decode(curl_exec($curl));
        $songs = new Collection($songs);
        foreach ($songs as $song) {
            $songsBDD['en'][$song->{'file-name'}]['file_name'] = $song->{'file-name'};
            $songsBDD['en'][$song->{'file-name'}]['name'] = $song->name->{'name-EUen'};
            $songsBDD['en'][$song->{'file-name'}]['buy_price'] = $song->{'buy-price'};
            $songsBDD['en'][$song->{'file-name'}]['sell_price'] = $song->{'sell-price'};
            $songsBDD['en'][$song->{'file-name'}]['music_url'] = $song->music_uri;
            $songsBDD['en'][$song->{'file-name'}]['image_url'] = $song->image_uri;
            $songsBDD['en'][$song->{'file-name'}]['lang_id'] = LanguageData::getEn()->id;

            $songsBDD['fr'][$song->{'file-name'}]['file_name'] = $song->{'file-name'};
            $songsBDD['fr'][$song->{'file-name'}]['name'] = $song->name->{'name-EUen'};
            $songsBDD['fr'][$song->{'file-name'}]['buy_price'] = $song->{'buy-price'};
            $songsBDD['fr'][$song->{'file-name'}]['sell_price'] = $song->{'sell-price'};
            $songsBDD['fr'][$song->{'file-name'}]['music_url'] = $song->music_uri;
            $songsBDD['fr'][$song->{'file-name'}]['image_url'] = $song->image_uri;
            $songsBDD['fr'][$song->{'file-name'}]['lang_id'] = LanguageData::getFr()->id;
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
