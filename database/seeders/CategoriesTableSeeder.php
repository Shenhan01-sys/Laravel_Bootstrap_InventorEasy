<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name_category' => 'Elektronik',
                'type' => 'Alat',
                'description' => 'Alat Elektronik'
            ],
            [
                'name_category' => 'Non-elektronik',
                'type' => 'Alat',
                'description' => 'Alat Non-elektronik'
            ],
        ]);
    }
}
