<?php

namespace Database\Factories;

use App\Models\Insect;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HasInsectFactory extends Factory
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
            'insect_id' => Insect::all()->random(1)[0]->id,
        ];
    }
}
