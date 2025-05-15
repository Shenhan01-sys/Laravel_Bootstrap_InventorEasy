<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loans')->insert([
            [
                'id_Loan' => 1,
                'id_Item' => 1,
                'nim' => 72230667,
                'loan_date' => '2025-05-13',
                'return_date' => '2025-05-20',
                'status' => 'pending',
                'notes' => 'Kondisi baik',
                'quantity' => 1,

            ],
            [
                'id_Loan' => 2,
                'id_Item' => 2,
                'nim' => 72230668,
                'loan_date' => '2025-05-14',
                'return_date' => '2025-05-21',
                'status' => 'pending',
                'notes' => 'Kondisi baik',
                'quantity' => 1,
            ],
        ]);
    }
}
