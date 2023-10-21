<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public const WRITER = 'writer';
    public const EDITOR = 'editor';
    public const ADMINISTRATOR = 'administrator';
    public const SUPER_ADMINISTRATOR = 'super administrator';
}
