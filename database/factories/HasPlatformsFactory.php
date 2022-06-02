<?php

namespace Database\Factories;

use App\Models\Platforms;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HasPlatformsFactory extends Factory
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
            'platform_id' => Platforms::all()->random(1)[0]->id,
        ];
    }
}
