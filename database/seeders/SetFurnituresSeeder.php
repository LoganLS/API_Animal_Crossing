<?php

namespace Database\Seeders;

use App\Models\SetFurniture;
use Illuminate\Database\Seeder;

class SetFurnituresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SetFurniture::query()->delete();

        $set = new SetFurniture();
        $set['id'] = 1;
        $set['label'] = 'Série Moderne';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 2;
        $set['label'] = 'Série bleu';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 3;
        $set['label'] = 'Série rustique';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 4;
        $set['label'] = 'Série ranch';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 5;
        $set['label'] = 'Série royal';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 6;
        $set['label'] = 'Série enfant';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 7;
        $set['label'] = 'Série coeur';

        $set->save();

        $set = new SetFurniture();
        $set['id'] = 8;
        $set['label'] = 'Série chalet';

        $set->save();
    }
}
