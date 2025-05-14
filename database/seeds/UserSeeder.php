<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            'nim' => 123456,
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password123'
        ]);
    }
}
