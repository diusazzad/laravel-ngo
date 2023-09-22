<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    use HasFactory;

    protected $table = 'ngos';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
