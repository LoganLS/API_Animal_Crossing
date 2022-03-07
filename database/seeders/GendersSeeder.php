<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Language;
use Illuminate\Database\Seeder;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::query()->delete();
        $genders = [
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Male',
                'gender' => 'M',
            ],
            [
                'lang_id' => Language::getEn()->id,
                'name' => 'Female',
                'gender' => 'F',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Mâle',
                'gender' => 'M',
            ],
            [
                'lang_id' => Language::getFr()->id,
                'name' => 'Femelle',
                'gender' => 'F',
            ],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
