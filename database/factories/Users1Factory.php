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
            'id_User' => $this->faker->unique()->randomNumber(8, true), // ID unik untuk setiap pengguna
            'email' => $this->faker->unique()->safeEmail,
            'name' => $this->faker->name,
            'password' => $this->faker->password(8, 20), // Password acak
            'kota' => $this->faker->city,
            'alamat' => $this->faker->address,
            'foto' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
             // Password yang sudah di-hash
        ];
    }
}