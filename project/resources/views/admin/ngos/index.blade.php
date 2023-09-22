@extends('layouts.admin')

@section('content')

<h1>Loan Calculation Index</h1>

<a href="{{ route('ngos.create') }}">Calculate a Loan</a>

<table>
    <thead>
        <tr>
            <th>Serial No</th>
            <th>Name</th>
            <th>Loan Amount</th>
            <th>Interest Rate</th>
            <th>Loan Duration (years)</th>
            <th>Total Pay</th>
            <th>Weekly Pay</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ngos as $ngo)
        <tr>
            <td>{{ $ngo->id }}</td>
            <td>{{ $ngo->name }}</td>
            <td>${{ $ngo->loan_amount }}</td>
            <td>{{ $ngo->interest_rate * 100 }}%</td>
            <td>{{ $ngo->loan_duration }}</td>
            <td>${{ $ngo->total_pay }}</td>
            <td>${{ $ngo->weekly_pay }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
