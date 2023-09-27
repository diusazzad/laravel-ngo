<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Create some employees
        Employee::create([
            'name' => 'John Doe',
            'contact_info' => 'john.doe@example.com',
            'role' => 'Software Engineer',
            'society_id' => 1,
        ]);

        Employee::create([
            'name' => 'Jane Doe',
            'contact_info' => 'jane.doe@example.com',
            'role' => 'Product Manager',
            'society_id' => 2,
        ]);
    }
}
