<?php

namespace Database\Factories;

use App\Models\Fishes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HasFishFactory extends Factory
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
            'fish_id' => Fishes::all()->random(1)[0]->id,
        ];
    }
}
