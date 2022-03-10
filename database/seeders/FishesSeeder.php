<?php

namespace Database\Seeders;

use App\Models\Fishes;
use Illuminate\Database\Seeder;

class FishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fish1 = new Fishes();
        $fish1['id'] = 1;
        $fish1['name'] = 'Anchois';
        $fish1['period'] = 'Toute l\'année';
        $fish1['hours'] = '4h - 21';
        $fish1['place'] = 'Océan';
        $fish1['size'] = 'Petite';
        $fish1['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Anchois.png';
        $fish1['price'] = '200';
        
        Fishes::create($fish1);
    }
}
