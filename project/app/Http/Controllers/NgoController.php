<?php

namespace App\Http\Controllers;

use App\Models\Ngo;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    
    public function index()
    {
        $ngos = Ngo::all(); // Retrieve all NGO records

        return view('admin.ngos.index', compact('ngos'));
    }
    public function calculateLoan(Request $request)
    {
        // Validate the input data
        $request->validate([
            'loan_amount' => 'required|numeric|min:1',
            'interest_rate' => 'required|numeric|min:0',
            'loan_duration' => 'required|integer|min:1',
        ]);

        // Retrieve input values
        $loanAmount = $request->input('loan_amount');
        $interestRate = $request->input('interest_rate') / 100; // Convert interest rate to decimal
        $loanDuration = $request->input('loan_duration');

        // Calculate total pay
        $totalPay = $loanAmount + ($loanAmount * $interestRate);

        // Calculate weekly pay
        $weeklyPay = $totalPay / ($loanDuration * 52); // Assuming 52 weeks in a year

        // Create an NGO record with the calculated values
        $ngo = new Ngo([
            'loan_amount' => $loanAmount,
            'interest_rate' => $interestRate,
            'loan_duration' => $loanDuration,
            'total_pay' => $totalPay,
            'weekly_pay' => $weeklyPay,
        ]);

        // Save the NGO record to the database
        $ngo->save();

        // Redirect to the index page to show the table of calculations
        return redirect()->route('ngos.index');
    }
}
