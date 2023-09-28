<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact_info', 'society_id'];
    public $timestamps = false;
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
