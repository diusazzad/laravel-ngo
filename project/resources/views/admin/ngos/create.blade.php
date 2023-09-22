@extends('layouts.admin')


@section('content')
<form method="POST" action="{{ route('ngos.calculateLoan') }}">
    @csrf

    <label for="loan_amount">Loan Amount:</label>
    <input type="number" id="loan_amount" name="loan_amount" required>

    <label for="interest_rate">Interest Rate (%):</label>
    <input type="number" id="interest_rate" name="interest_rate" required>

    <label for="loan_duration">Loan Duration (years):</label>
    <input type="number" id="loan_duration" name="loan_duration" required>

    <button type="submit">Calculate</button>
</form>

@endsection
