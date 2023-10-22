<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    // Function to retrieve the user, role, and permission as an JSON format
    public function getUserRolePermission()
    {
        // Get the current user
        $user = auth()->user();

        // Get the roles of the user
        $roles = $user->roles;

        // Get the permissions of the user
        $permissions = $user->permissions;

        // Return the user, role, and permission information
        return [
            'user' => $user,
            'roles' => $roles,
            'permissions' => $permissions,
        ];
    }

    public function createRole(Request $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        return response()->json($role);
    }

    public function createPermission(Request $request)
    {
        $permission = Permission::create(['name' => $request->input('name')]);
        return response()->json($permission);
    }

    public function assignPermissionToRole($roleName, $permissionName)
    {
        $role = Role::findByName($roleName);
        $permission = Permission::findByName($permissionName);
        $role->givePermissionTo($permission);
        return response()->json('Permission assigned to role successfully');
    }

    public function getUsersWithRole($roleName)
    {
        $users = User::role($roleName)->get();
        return response()->json($users);
    }

    public function getUserPermissions($userId)
    {
        $user = User::find($userId);
        $permissions = $user->getAllPermissions();
        return response()->json($permissions);
    }

    public function checkUserPermission($userId, $permissionName)
    {
        $user = User::find($userId);
        if ($user->hasPermissionTo($permissionName)) {
            return response()->json('User has the permission');
        } else {
            return response()->json('User does not have the permission');
        }
    }
}
