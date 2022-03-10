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
        Fishes::query()->delete();

        $fish1 = new Fishes();
        $fish1['id'] = 1;
        $fish1['name'] = 'Anchois';
        $fish1['period'] = 'Toute l\'année';
        $fish1['hours'] = '4h - 21';
        $fish1['place'] = 'Océan';
        $fish1['size'] = 'Petite';
        $fish1['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Anchois.png';
        $fish1['price'] = '200';
        
        $fish1->save();

        $fish2 = new Fishes();
        $fish2['id'] = 2;
        $fish2['name'] = 'Bar';
        $fish2['period'] = 'Toute l\'année';
        $fish2['hours'] = 'Toute la journée';
        $fish2['place'] = 'Rivière';
        $fish2['size'] = 'Grande';
        $fish2['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Bar.png';
        $fish2['price'] = '400';
        
        $fish2->save();

        $fish3 = new Fishes();
        $fish3['id'] = 3;
        $fish3['name'] = 'Bar commun';
        $fish3['period'] = 'Toute l\'année';
        $fish3['hours'] = 'Toute la journée';
        $fish3['place'] = 'Océan';
        $fish3['size'] = 'Très grande';
        $fish3['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Bar%20commun.png';
        $fish3['price'] = '400';
        
        $fish3->save();

        $fish4 = new Fishes();
        $fish4['id'] = 4;
        $fish4['name'] = 'Bouvière';
        $fish4['period'] = 'Novembre - Mars';
        $fish4['hours'] = 'Toute la journée';
        $fish4['place'] = 'Rivière';
        $fish4['size'] = 'Minuscule';
        $fish4['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Bouvi%C3%A8re.png';
        $fish4['price'] = '900';
        
        $fish4->save();

        $fish5 = new Fishes();
        $fish5['id'] = 5;
        $fish5['name'] = 'Calmar';
        $fish5['period'] = 'Décembre - Août';
        $fish5['hours'] = 'Toute la journée';
        $fish5['place'] = 'Océan';
        $fish5['size'] = 'Moyenne';
        $fish5['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Calmar.png';
        $fish5['price'] = '500';
        
        $fish5->save();

        $fish6 = new Fishes();
        $fish6['id'] = 6;
        $fish6['name'] = 'Carassin';
        $fish6['period'] = 'Toute l\'année';
        $fish6['hours'] = 'Toute la journée';
        $fish6['place'] = 'Rivière';
        $fish6['size'] = 'Petite';
        $fish6['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Carassin.png';
        $fish6['price'] = '160';
        
        $fish6->save();

        $fish7 = new Fishes();
        $fish7['id'] = 7;
        $fish7['name'] = 'Cardeau';
        $fish7['period'] = 'Toute l\'année';
        $fish7['hours'] = 'Toute la journée';
        $fish7['place'] = 'Océan';
        $fish7['size'] = 'Très grande';
        $fish7['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/poissons/Cardeau.png';
        $fish7['price'] = '800';
        
        $fish7->save();
    }
}
