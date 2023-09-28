<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;

class LoanApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanApplications = LoanApplication::all();
        return view('admin.loan_applications.index', compact('loanApplications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loan_applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loanApplication = LoanApplication::create($request->all());
        return redirect()->route('loan_applications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.loan_applications.show', compact('loanApplication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.loan_applications.edit', compact('loanApplication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoanApplication $loanApplication)
    {
        $loanApplication->update($request->all());
        return redirect()->route('loan_applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanApplication $loanApplication)
    {
        $loanApplication->delete();
        return redirect()->route('loan_applications.index');
    }
}
