<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Seeder;

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

        /*curl_setopt_array($curl, array(
            CURLOPT_URL => "http://acnhapi.com/v1/songs/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $songs = json_decode(curl_exec($curl));

        foreach ($songs as $song) {

        }
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

        }*/

        $music = new Music();
        $music['name'] = 'Agent K.K.';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/1';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/1';

        $music->save();

        $music = new Music();
        $music['name'] = 'Agent K.K.';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/1';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/1';

        $music->save();

        $music = new Music();
        $music['name'] = 'À nous la belle ville';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/3';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/3';

        $music->save();

        $music = new Music();
        $music['name'] = 'Bubblegum K.K.';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/4';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/4';

        $music->save();

        $music = new Music();
        $music['name'] = 'Agent K.K.';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/1';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/1';

        $music->save();

        $music = new Music();
        $music['name'] = 'Café K.K.';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/5';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/5';

        $music->save();

        $music = new Music();
        $music['name'] = 'Tovaritch Kéké';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/6';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/6';

        $music->save();

        $music = new Music();
        $music['name'] = 'Sur la route';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/8';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/8';

        $music->save();

        $music = new Music();
        $music['name'] = 'Despedida';
        $music['price'] = '3200';
        $music['sell_price'] = '800';
        $music['music_url'] = 'https://acnhapi.com/v1/music/9';
        $music['image_url'] = 'https://acnhapi.com/v1/images/songs/9';

        $music->save();
    }
}
