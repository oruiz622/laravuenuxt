<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(10, 10000),
        ];
    }
}
