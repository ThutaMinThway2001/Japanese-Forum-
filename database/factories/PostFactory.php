<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'intro' => $this->faker->text(),
            'body' => $this->faker->paragraph()
        ];
    }
}
