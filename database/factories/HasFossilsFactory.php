<?php

namespace Database\Factories;

use App\Models\Fossils;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HasFossilsFactory extends Factory
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
            'fossil_id' => Fossils::all()->random(1)[0]->id,
        ];
    }
}
