<?php

namespace Database\Seeders;

use App\Models\SeaCreatures;
use Illuminate\Database\Seeder;

class SeaCreaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeaCreatures::query()->delete();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Anémone de mer';
        $seaCreature['period'] = 'Toute l\'année';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Grande';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/An%C3%A9mone%20de%20mer.png';
        $seaCreature['price'] = '500';
        $seaCreature['movement'] = 'Immobile';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Balane';
        $seaCreature['period'] = 'Toute l\'année';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Minuscule';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Balane.png';
        $seaCreature['price'] = '600';
        $seaCreature['movement'] = 'Immobile';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Bulot';
        $seaCreature['period'] = 'Toute l\'année';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Petite';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Bulot.png';
        $seaCreature['price'] = '1000';
        $seaCreature['movement'] = 'Lent';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Calmar luciole';
        $seaCreature['period'] = 'Mars - Juin';
        $seaCreature['hours'] = '21h - 4h';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Minuscule';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Calmar%20luciole.png';
        $seaCreature['price'] = '1400';
        $seaCreature['movement'] = 'Lent';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Concombre de mer';
        $seaCreature['period'] = 'Novembre - Avril';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Moyenne';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Concombre%20de%20mer.png';
        $seaCreature['price'] = '500';
        $seaCreature['movement'] = 'Très lent';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Crabe de Dungeness';
        $seaCreature['period'] = 'Novembre - Mair';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Moyenne';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Crabe%20de%20Dungeness.png';
        $seaCreature['price'] = '1900';
        $seaCreature['movement'] = 'Moyen';

        $seaCreature->save();

        $seaCreature = new SeaCreatures();
        $seaCreature['name'] = 'Crabe des neiges';
        $seaCreature['period'] = 'Novembre - Avril';
        $seaCreature['hours'] = 'Toute la journée';
        $seaCreature['place'] = 'Océan';
        $seaCreature['size'] = 'Grande';
        $seaCreature['image_url'] = 'https://www.animalcrossing-online.com/new-horizons-switch/img/fondsmarins/Crabe%20des%20neiges.png';
        $seaCreature['price'] = '6000';
        $seaCreature['movement'] = 'Rapide';

        $seaCreature->save();
    }
}
