<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loanController extends Controller
{
    public function loanPlan(){
        $loanPlans = LoanPlan::all();

        return view('loan.plan', [
            'loanPlans' => $loanPlans,
        ]);
    }

    public function loanActive()
    {
        $activeLoans = Loan::where('status', 'active')->paginate(10);

        return view('loan.active', [
            'activeLoans' => $activeLoans
        ]);
    }

    public function loanPending()
    {
        $pendingLoans = Loan::where('status', 'pending')->get();

        return view('loan.pending', [
            'pendingLoans' => $pendingLoans
        ]);
    }

    public function loanPaid()
    {
        $paidLoans = Loan::where('status', 'paid')->paginate(10);

        return view('loan.paid', [
            'paidLoans' => $paidLoans
        ]);
    }


    public function loanClosed()
    {
        $closedLoans = Loan::where('total_payable', '<=', 'paid')->where('status', 'closed')->get();

        return view('loan.closed', [
            'closedLoans' => $closedLoans
        ]);
    }

    public function loanAll()
    {
        // Fetch data from the database using the query builder
        $loans = DB::table('loans')
            ->join('loan_plans', 'loans.loan_plan_id', '=', 'loan_plans.id')
            ->select('loan_plans.name as plan_name', 'loans.total_payable', 'loans.paid', 'loans.installment', 'loans.status')
            ->get();

        // Pass the data to the view
        return view('loan.all', compact('loans'));
    }

}
