<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LoanPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'interest_rate', 'late_fee'];

    /**
     * Get all of the loans for the LoanPlan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loans(): HasMany
    {
        return $this->hasMany(loan::class);
    }
}
