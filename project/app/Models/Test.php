<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [
        'loan_amount',
        'interest_rate',
        'loan_duration',
        'total_pay',
        'weekly_pay',
    ];
}
