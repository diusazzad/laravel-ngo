<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan_plans')->insert([
            [
                'plan_name' => 'Plan A',
                'monthly_payment' => 1000.00,
                'loan_amount' => 10000.00,
                'payable_amount' => 12000.00,
                'total_installments' => 12,
                'late_fee' => 50.00,
            ],
            [
                'plan_name' => 'Plan B',
                'monthly_payment' => 500.00,
                'loan_amount' => 5000.00,
                'payable_amount' => 6000.00,
                'total_installments' => 12,
                'late_fee' => 25.00,
            ],
            // Add more data as needed
        ]);
    }
}
