<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->delete();

        $set = new Category();
        $set['id'] = 1;
        $set['label'] = 'Maison';
        $set['icon'] = 'nook.svg';

        $set->save();

        $set = new Category();
        $set['id'] = 2;
        $set['label'] = 'Ile';
        $set['icon'] = 'nook.svg';

        $set->save();

        $set = new Category();
        $set['id'] = 3;
        $set['label'] = 'Pattern';
        $set['icon'] = 'nook.svg';

        $set->save();
    }
}
