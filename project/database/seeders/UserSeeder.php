<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
        ]);
    }
}
