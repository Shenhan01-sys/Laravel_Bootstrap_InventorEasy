<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        return [
            'name_Item' => $faker->word(),
            'id_Category' => $faker->numberBetween(1, 2),
            'description' => $faker->sentence(),
            'quantity' => $faker->numberBetween(1, 10),
            'available' => $faker->boolean(),
            'link' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}