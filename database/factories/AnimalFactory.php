<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->name(),
            'type'=>fake()->emoji(),
            'prix'=>fake()->numberBetween(0,10000),
            'date_naissance'=>fake()->date("Y-m-d"),
            'img_link'=>fake()->imageUrl(),
        ];
    }
}
