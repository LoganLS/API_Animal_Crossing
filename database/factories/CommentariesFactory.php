<?php

namespace Database\Factories;

use App\Models\Publications;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentariesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(),
            'user_id' => User::all()->random(1)[0]->id,
            'publication_id' => Publications::all()->random(1)[0]->id,
        ];
    }
}
