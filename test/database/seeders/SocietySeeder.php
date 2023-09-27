<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('societies')->insert([
            'name' => 'ABC Society',
            'address' => '123 Main St',
            'contact_info' => 'abc@example.com',
        ]);
    }
}
