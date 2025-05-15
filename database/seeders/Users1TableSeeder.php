<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users1')->insert([
            [
                'nim' => 72230667,
                'name' => 'Gatot Subroto',
                'No_Telp' => '08123456789',
                'email' => 'GatotBroto@gmail.com'
            ],
            [
                'nim' => 72230668,
                'name' => 'Budi Santoso',
                'No_Telp' => '08123456780',
                'email' => 'BudiBro@gamil.com'
            ],
            [
                'nim' => 72230669,
                'name' => 'Joko Widodo',
                'No_Telp' => '08123456781',
                'email' => 'Joko@gmail.com'
            ]
        ]);
    }
}
