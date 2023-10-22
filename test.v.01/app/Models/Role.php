<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Permission;

class Role extends Model
{
    use HasFactory;
    public const WRITER = 'writer';
    public const EDITOR = 'editor';
    public const ADMINISTRATOR = 'administrator';
    public const SUPER_ADMINISTRATOR = 'super administrator';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
