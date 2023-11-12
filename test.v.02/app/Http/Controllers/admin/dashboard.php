<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }



    public function payment_history(){
        $payments = DB::table('payments')
        ->select('id', 'type', 'plan_name', 'paid_through', 'amount', 'late_fee', 'total_amount', 'date_time')
        ->get();

    return view('admin.dashboard', ['payments' => $payments]);
    }
}
