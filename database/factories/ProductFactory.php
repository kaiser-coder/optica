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
            'ref' => $this->faker->word(),
            'name' => 'Lunettes de vue',
            'description' => $this->faker->paragraph(3),
            'price' => 20000,
            'category' => 'Lunette de luxe',
            'made_in' => 'France',
            'benchmark' => 'Dolce',
            'production_date' => $this->faker->date()
        ];
    }
}
