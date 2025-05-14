<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Users1TableSeeder::class,
            CategoriesTableSeeder::class,
            ItemsTableSeeder::class,
            LoanTableSeeder::class,
            // Add other seeders here if needed
        ]);
    }
}
