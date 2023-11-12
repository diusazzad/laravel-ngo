<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = ['loan_plan_id', 'total_payable', 'paid', 'installment', 'status'];

    /**
     * Get the loanPlan that owns the Loan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function loanPlan(): BelongsTo
    {
        return $this->belongsTo(LoanPlan::class);

    }
    /**
     * Get the status that owns the Loan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(LoanStatus::class);
    }
}
