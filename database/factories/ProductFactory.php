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
            'title' => $this->faker->sentence,
            'price' => $this->faker->randomDigit,
            'description' => $this->faker->text,
            'stock' =>  $this->faker->numberBetween(1, 100),
            'brand' => $this->faker->text(100),
            'category' =>$this->faker->text(100),
        ];
    }
}
