<?php

namespace App\Policies;

use App\Models\User;

class TestPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function view(User $user, TestPolicy $project)
    {
        // Check if the user is authorized to view the project
        // For example, only certain roles or the project owner can view
        return $user->isAdmin() || $user->id === $project->user_id;
    }

    public function create(User $user)
    {
        // Check if the user is authorized to create projects
        // For example, only certain roles can create projects
        return $user->isAdmin() || $user->isStaff();
    }

    public function update(User $user, TestPolicy $project)
    {
        // Check if the user is authorized to update the project
        // For example, only the project owner or admins can update
        return $user->isAdmin() || $user->id === $project->user_id;
    }

    public function delete(User $user, TestPolicy $project)
    {
        // Check if the user is authorized to delete the project
        // For example, only admins can delete projects
        return $user->isAdmin();
    }
}