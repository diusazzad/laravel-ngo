<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function loanApprovals()
    {
        return $this->hasMany(LoanApproval::class);
    }
}

class Society extends Model
{
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}

class Employee extends Model
{
    public function society()
    {
        return $this->belongsTo(Society::class);
    }
}

class Member extends Model
{
    public function society()
    {
        return $this->belongsTo(Society::class);
    }

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }

    public function shareCollections()
    {
        return $this->hasMany(ShareCollection::class);
    }
}

class Loan extends Model
{
    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }

    public function loanApprovals()
    {
        return $this->hasMany(LoanApproval::class);
    }
}

class LoanApplication extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}

class ShareCollection extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}

class LoanApproval extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
