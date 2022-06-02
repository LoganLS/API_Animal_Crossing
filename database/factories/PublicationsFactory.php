<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'content' => $this->faker->paragraphs(3),
            'category_id' => Category::all()->random(1)[0]->id,
            'user_id' => User::all()->random(1)[0]->id,
        ];
    }
}
