<?php

namespace Database\Seeders;

use App\Models\Platforms;
use Illuminate\Database\Seeder;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platforms::query()->delete();

        $gamecube = new Platforms();
        $gamecube['id'] = 1;
        $gamecube['label'] = 'Gamecube';
        $gamecube['release_date'] = new \DateTime('2004-09-24');
        $gamecube->save();

        $ds = new Platforms();
        $ds['id'] = 2;
        $ds['label'] = 'DS';
        $ds['release_date'] = new \DateTime('2006-03-31');
        $ds->save();

        $wii = new Platforms();
        $wii['id'] = 3;
        $wii['label'] = 'Wii';
        $wii['release_date'] = new \DateTime('2008-12-05');
        $wii->save();

        $nintendo3ds = new Platforms();
        $nintendo3ds['id'] = 4;
        $nintendo3ds['label'] = '3DS';
        $nintendo3ds['release_date'] = new \DateTime('2016-11-25');
        $nintendo3ds->save();

        $switch = new Platforms();
        $switch['id'] = 5;
        $switch['label'] = 'Switch';
        $switch['release_date'] = new \DateTime('2020-03-20');
        $switch->save();
    }
}
