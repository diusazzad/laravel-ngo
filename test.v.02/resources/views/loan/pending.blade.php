@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">Pending Loans</h2>
    <div class="rounded-xl border border-gray-200 p-4 shadow-md">
        <table class="w-full">
            <thead>
                <tr class="text-gray-500 font-semibold">
                    <th class="px-2 py-2">S.N.</th>
                    <th class="px-2 py-2">Loan Plan</th>
                    <th class="px-2 py-2">Total Payable</th>
                    <th class="px-2 py-2">Applied Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingLoans as $pendingLoan)
                <tr class="text-gray-600">
                    <td class="px-2 py-2">{{ $pendingLoan->id }}</td>
                    <td class="px-2 py-2">{{ $pendingLoan->loanPlan->name }}</td>
                    <td class="px-2 py-2">{{ $pendingLoan->total_payable }}</td>
                    <td class="px-2 py-2">{{ $pendingLoan->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
