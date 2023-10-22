<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public const EDIT_ARTICLES = 'edit articles';
    public const DELETE_ARTICLES = 'delete articles';
    public const PUBLISH_ARTICLES = 'publish articles';
    public const UNPUBLISH_ARTICLES = 'unpublish articles';
    public const MANAGE_USERS = 'manage users';
    public const MANAGE_ROLES = 'manage roles';

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
