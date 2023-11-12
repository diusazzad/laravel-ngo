@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">Active Loans</h2>
    <div class="rounded-xl border border-gray-200 p-4 shadow-md">
        <table>
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Loan Plan</th>
                    <th>Total Payable</th>
                    <th>Paid</th>
                    <th>Installment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activeLoans as $activeLoan)
                <tr>
                    <td>{{ $activeLoan->id }}</td>
                    <td>{{ $activeLoan->loanPlan->name }}</td>
                    <td>{{ $activeLoan->total_payable }}</td>
                    <td>{{ $activeLoan->paid }}</td>
                    <td>{{ $activeLoan->installment }}</td>
                    <td>{{ $activeLoan->status }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $activeLoans->links() }}
    </div>
</div>

@endsection
