<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function showLoanCalculationForm()
    {
        return view('test.loancalculation');
    }
    public function loanCalculation()
    {
        return view('test.loancalculation');
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
        $totalPay = $loanAmount + ($loanAmount * $interestRate * $loanDuration);

        // Calculate weekly pay (assuming 52 weeks in a year)
        $weeklyPay = $totalPay / ($loanDuration * 52);

        // Store the loan calculation results in a database table (e.g., loan_calculations)
        Test::create([
            'loan_amount' => $loanAmount,
            'interest_rate' => $interestRate,
            'loan_duration' => $loanDuration,
            'total_pay' => $totalPay,
            'weekly_pay' => $weeklyPay,
        ]);

        return redirect()->route('loanCalculation')->with('success', 'Loan calculation saved successfully.');

    }


    public function showLoginForm()
    {
        return view('login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->route('user.dashboard');
        }
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 'user') {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



}
