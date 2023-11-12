<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LoanStatus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the comments for the LoanStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loans(): HasMany
    {
        // return $this->hasMany(Loan::class, 'foreign_key', 'local_key');
        return $this->hasMany(Loan::class);
    }

}
