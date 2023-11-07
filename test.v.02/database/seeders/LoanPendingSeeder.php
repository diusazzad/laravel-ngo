<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanPendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan_pendings')->insert([
            [
                'loan_plan' => 'Plan A',
                'total_payable' => 12000.00,
                'applied_date' => '2023-10-01',
                'installment' => 1000.00,
            ],
            [
                'loan_plan' => 'Plan B',
                'total_payable' => 6000.00,
                'applied_date' => '2023-09-15',
                'installment' => 500.00,
            ],
            // Add more data as needed
        ]);
    }
}
