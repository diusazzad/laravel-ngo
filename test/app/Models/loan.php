<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }

    public function loanApprovals()
    {
        return $this->hasMany(LoanApproval::class);
    }

}