<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\VillagersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageDataSeeder::class);
        $this->call(GendersSeeder::class);
        $this->call(PersonalitySeeder::class);
        $this->call(SignsSeeder::class);
        $this->call(SpeciesSeeder::class);
        $this->call(VillagersSeeder::class);
        $this->call(CharactersSeeder::class);
        $this->call(MusicsSeeder::class);
        $this->call(FishesSeeder::class);
        $this->call(SeaCreaturesSeeder::class);
        $this->call(SetFurnituresSeeder::class);
    }
}
