<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name_Item' => 'Tripod',
                'id_Category' => 1,
                'description' => 'Tripod kamera sony1',
                'quantity' => 2,
                'available' => true,
            ],
            [
                'name_Item' => 'Sapu',
                'id_Category' => 2,
                'description' => 'Sapu ijuk A',
                'quantity' => 3,
                'available' => true,
            ],
            [
                'name_Item' => 'TV LED 32"',
                'id_Category' => 1,
                'description' => 'TV samsung LED 32"',
                'quantity' => 2,
                'available' => true,
            ],
            [
                'name_Item' => 'microphone',
                'id_Category' => 1,
                'description' => 'microphone lenovo A',
                'quantity' => 2,
                'available' => true,
            ],
        ]);
    }
}
