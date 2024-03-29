<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'    => $this->faker->word,
            'slug'     => $this->faker->slug,
            'image'    => 'category.webp',
            'featured' => $this->faker->boolean,
        ];
    }
}
