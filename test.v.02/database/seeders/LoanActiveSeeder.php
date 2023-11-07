<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan_actives')->insert([
            [
                'loan_plan' => 'Plan A',
                'total_payable' => 12000.00,
                'paid' => 4000.00,
                'installment' => 1000.00,
                'status' => 'Active',
            ],
            [
                'loan_plan' => 'Plan B',
                'total_payable' => 6000.00,
                'paid' => 2000.00,
                'installment' => 500.00,
                'status' => 'Active',
            ],
            // Add more data as needed
        ]);
    }
}
