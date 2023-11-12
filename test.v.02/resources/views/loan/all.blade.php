@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">All Loans</h2>
    <div class="bg-cyan-700 rounded-xl overflow-hidden shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100 text-gray-700 font-semibold">
                    <th class="py-2 px-4">Loan Plan</th>
                    <th class="py-2 px-4">Total Payable</th>
                    <th class="py-2 px-4">Paid</th>
                    <th class="py-2 px-4">Installment</th>
                    <th class="py-2 px-4">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($loans as $loan)
                <tr class="border-t border-gray-200">
                    <td class="py-2 px-4">{{ $loan->plan_name }}</td>
                    <td class="py-2 px-4">{{ $loan->total_payable }}</td>
                    <td class="py-2 px-4">{{ $loan->paid }}</td>
                    <td class="py-2 px-4">{{ $loan->installment }}</td>
                    <td class="py-2 px-4">{{ $loan->status }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-4 px-6 text-center text-gray-500">No loans available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
