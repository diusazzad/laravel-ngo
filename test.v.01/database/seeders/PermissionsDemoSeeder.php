<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\PermissionServiceProvider;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// // Reset cached roles and permissions
// app()[PermissionRegistrar::class]->forgetCachedPermissions();

// // create permissions
// Permission::create(['name' => 'edit articles']);
// Permission::create(['name' => 'delete articles']);
// Permission::create(['name' => 'publish articles']);
// Permission::create(['name' => 'unpublish articles']);

// // create roles and assign existing permissions
// $role1 = Role::create(['name' => 'employee']);
// // $role1->givePermissionTo('edit articles');
// // $role1->givePermissionTo('delete articles');

// $role2 = Role::create(['name' => 'admin']);
// // $role2->givePermissionTo('publish articles');
// // $role2->givePermissionTo('unpublish articles');

// $role3 = Role::create(['name' => 'SuperAdmin']);
// // gets all permissions via Gate::before rule; see AuthServiceProvider

// // create demo users
// $user = \App\Models\User::factory()->create([
//     'name' => 'Example User',
//     'email' => 'test@example.com',
// ]);
// $user->assignRole($role1);

// $user = \App\Models\User::factory()->create([
//     'name' => 'Example Admin User',
//     'email' => 'admin@example.com',
// ]);
// $user->assignRole($role2);

// $user = \App\Models\User::factory()->create([
//     'name' => 'Example Super-Admin User',
//     'email' => 'superadmin@example.com',
// ]);
// $user->assignRole($role3);

$permissions = [
    'create users',
    'edit users',
    'delete users',
    'view users',
    'create projects',
    'edit projects',
    'delete projects',
    'view projects',
    'create reports',
    'edit reports',
    'delete reports',
    'view reports',
];

foreach ($permissions as $permission) {
    Permission::create(['name' => $permission]);
}

    }


}
