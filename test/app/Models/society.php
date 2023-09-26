<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class society extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
