<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_admin_route()
    {
        $role = Role::factory()->create(['name' => 'admin']);
        $user = User::factory()->create(['role_id' => $role->id]);

        $response = $this->actingAs($user)->get('/admin');

        $response->assertStatus(200);
    }

    public function test_non_admin_cannot_access_admin_route()
    {
        $role = Role::factory()->create(['name' => 'user']);
        $user = User::factory()->create(['role_id' => $role->id]);

        $response = $this->actingAs($user)->get('/admin');

        $response->assertStatus(403);
    }
}
