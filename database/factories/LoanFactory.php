<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'id_Item' => \App\Models\Item::inRandomOrder()->first()->id_Item,
            'nim' => \App\Users1::inRandomOrder()->first()->nim,
            'loan_date' => $this->faker->date(),
            'return_date' => $this->faker->date(),
            'status' => 'pending',
            'notes' => $this->faker->sentence(),
            'quantity' => 1,
        ];
    }
}
