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

    public function loan_plan(){
        return view('loan.plan');
    }

    public function loan_active(){
        return view('loan.active');
    }
    public function loan_pending(){
        return view('loan.pending');
    }
    public function loan_paid(){
        return view('loan.paid');
    }
    public function loan_closed(){
        return view('loan.closed');
    }
    public function loan_all(){
        return view('loan.all');
    }

   public function saving_active(){
        return view('saving.active');
    }
   public function saving_pending(){
        return view('saving.pending');
    }

    public function payment_history(){
        $payments = DB::table('payments')
        ->select('id', 'type', 'plan_name', 'paid_through', 'amount', 'late_fee', 'total_amount', 'date_time')
        ->get();

    return view('admin.dashboard', ['payments' => $payments]);
    }
}
