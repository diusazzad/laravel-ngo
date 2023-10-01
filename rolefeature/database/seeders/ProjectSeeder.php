<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Project 1',
            'description' => 'Description of Project 1',
            'user_id' => 1,
            // Assign to the user with ID 1 (Admin User)
        ]);

        Project::create([
            'name' => 'Project 2',
            'description' => 'Description of Project 2',
            'user_id' => 2,
            // Assign to the user with ID 2 (Staff User)
        ]);
    }
}
