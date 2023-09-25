<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SocitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socities')->insert([
            [
                'SocietyName' => 'Society 1',
                'SocietyStartDate' => now(),
                'SocietyChairman' => 'John Doe',
                'SocietyManager' => 'Jane Doe',
                'ContactNumber' => '1234567890',
                'UserName' => 'user1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SocietyName' => 'Society 2',
                'SocietyStartDate' => now(),
                'SocietyChairman' => 'Bob Smith',
                'SocietyManager' => 'Alice Smith',
                'ContactNumber' => '0987654321',
                'UserName' => 'user2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SocietyName' => 'Society 3',
                'SocietyStartDate' => now(),
                'SocietyChairman' => 'Jane Doe',
                'SocietyManager' => 'John Doe',
                'ContactNumber' => '9876543210',
                'UserName' => 'user3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SocietyName' => 'Society 4',
                'SocietyStartDate' => now(),
                'SocietyChairman' => 'Alice Smith',
                'SocietyManager' => 'Bob Smith',
                'ContactNumber' => '0123456789',
                'UserName' => 'user4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SocietyName' => 'Society 5',
                'SocietyStartDate' => now(),
                'SocietyChairman' => 'John Doe',
                'SocietyManager' => 'Jane Doe',
                'ContactNumber' => '5432109876',
                'UserName' => 'user5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
