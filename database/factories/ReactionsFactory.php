<?php

namespace Database\Factories;

use App\Models\ImageReactions;
use App\Models\Publications;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReactionsFactory extends Factory
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
            'publication_id' => Publications::all()->random(1)[0]->id,
            'image_reaction_id' => ImageReactions::all()->random(1)[0]->id,
        ];
    }
}
