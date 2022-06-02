<?php

namespace Database\Seeders;
use App\Models\Fossils;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class FossilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //https://raw.githubusercontent.com/alexislours/translation-sheet-data/master/fossils.json
        //1
        $request = Http::withHeaders([
            "X-API-KEY" => env('API_KEY_NOOKI'),
            "Accept-Version" => "1.0.0",
        ])
            ->withOptions([
                'verify' => false,
            ])
            ->get('https://api.nookipedia.com/nh/fossils/individuals');

        $Fossils = json_decode($request->body(), true);
        $Fossils = new Collection($Fossils);
        foreach ($Fossils as $Fossil) {
            $FossilsToDatabase = new Fossils();
            $FossilsToDatabase['name'] = $Fossil['name'];
            $FossilsToDatabase['price'] = $Fossil["sell"];
            $FossilsToDatabase['image_url'] = $Fossil["image_url"];
            $FossilsToDatabase['fossil_group']=$Fossil["fossil_group"];
            $FossilsToDatabase['width']=$Fossil["width"];
            $FossilsToDatabase['length']=$Fossil["length"];
            $FossilsToDatabase->save();        
        }

    }
}
