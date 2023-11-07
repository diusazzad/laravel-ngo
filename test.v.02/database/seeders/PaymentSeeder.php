<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'loan_id' => 1,
                'type' => 'payment',
                'plan_name' => 'Plan A',
                'paid_through' => 12,
                'amount' => 1000.00,
                'late_fee' => 0.00,
                'total_amount' => 1000.00,
                'date_time' => now(),
            ],
            [
                'loan_id' => 2,
                'type' => 'late fee',
                'plan_name' => 'Plan B',
                'paid_through' => 6,
                'amount' => 500.00,
                'late_fee' => 50.00,
                'total_amount' => 550.00,
                'date_time' => now(),
            ],
            // Add more data as needed
        ]);
    }
}
