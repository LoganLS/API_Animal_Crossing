<?php

namespace Database\Seeders;

use App\Models\Publications;
use Illuminate\Database\Seeder;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publications::query()->delete();

        $set = new Publications();
        $set['id'] = 1;
        $set['title'] = 'First';
        $set['content'] = "C'est la toute première publication youpppiiii";
        $set['category_id'] = 1;
        $set['user_id'] = 1;

        $set->save();

        $set = new Publications();
        $set['id'] = 2;
        $set['title'] = 'Deuxieme';
        $set['content'] = "J'adore les villageois et j'adore ce site";
        $set['category_id'] = 2;
        $set['user_id'] = 1;

        $set->save();

        $set = new Publications();
        $set['id'] = 3;
        $set['title'] = 'Troisieme';
        $set['content'] = "La page profile est joli !";
        $set['category_id'] = 3;
        $set['user_id'] = 1;

        $set->save();

        $set = new Publications();
        $set['id'] = 4;
        $set['title'] = 'Quatrieme';
        $set['content'] = "C'est pété !";
        $set['category_id'] = 1;
        $set['user_id'] = 1;

        $set->save();

        $set = new Publications();
        $set['id'] = 5;
        $set['title'] = 'Cinquieme';
        $set['content'] = "Juste pour passer un coucou";
        $set['category_id'] = 2;
        $set['user_id'] = 1;

        $set->save();
    }
}
