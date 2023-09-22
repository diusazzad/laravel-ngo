@extends('layouts.admin')

@section('content')

<h1>Loan Calculation Result</h1>

<p><strong>Loan Amount:</strong> ${{ $ngo->loan_amount }}</p>
<p><strong>Interest Rate:</strong> {{ $ngo->interest_rate * 100 }}%</p>
<p><strong>Loan Duration (in years):</strong> {{ $ngo->loan_duration }}</p>

<p><strong>Total Pay:</strong> ${{ $ngo->total_pay }}</p>
<p><strong>Weekly Pay:</strong> ${{ $ngo->weekly_pay }}</p>

<a href="{{ route('ngos.index') }}">Back to Loan Management</a>
@endsection
 