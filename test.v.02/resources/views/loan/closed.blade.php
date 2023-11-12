@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">Closed Loans</h2>
    <div class="rounded-xl border border-gray-200 p-4 shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-500 text-white font-semibold">
                    <th class="px-2 py-2">S.N.</th>
                    <th class="px-2 py-2">Loan Plan</th>
                    <th class="px-2 py-2">Total Payable</th>
                    <th class="px-2 py-2">Paid</th>
                    <th class="px-2 py-2">Installment</th>
                    <th class="px-2 py-2">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($closedLoans as $closedLoan)
                <tr class="text-gray-600">
                    <td class="px-2 py-2">{{ $closedLoan->id }}</td>
                    <td class="px-2 py-2">{{ $closedLoan->loanPlan->name }}</td>
                    <td class="px-2 py-2">{{ $closedLoan->total_payable }}</td>
                    <td class="px-2 py-2">{{ $closedLoan->paid }}</td>
                    <td class="px-2 py-2">{{ $closedLoan->installment }}</td>
                    <td class="px-2 py-2">{{ $closedLoan->status }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
