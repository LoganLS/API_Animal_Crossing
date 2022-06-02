<?php

namespace Database\Factories;

use App\Models\SeaCreatures;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HasSeaCreatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random(1)[0]->id,
            'sea_creature_id' => SeaCreatures::all()->random(1)[0]->id,
        ];
    }
}
