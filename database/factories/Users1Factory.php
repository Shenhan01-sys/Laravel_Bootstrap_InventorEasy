<?php

namespace Database\Factories;

use App\Users1;
use Illuminate\Database\Eloquent\Factories\Factory;

class Users1Factory extends Factory
{
    protected $model = Users1::class;

    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'name' => $this->faker->name,
            'No_Telp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}