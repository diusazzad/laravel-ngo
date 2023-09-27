@extends('layout.dashboard')

@section('content')
<div class="p-10">
    <h2 class="text-lg font-semibold">Apply for a Loan</h2>

    <form method="POST" action="">
        @csrf
        <div class="mb-4">
            <label for="loan_amount" class="block text-gray-700 text-sm font-bold mb-2">Loan Amount</label>
            <input type="text" name="loan_amount" id="loan_amount"
                class="form-input rounded-md shadow-sm mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="interest_rate" class="block text-gray-700 text-sm font-bold mb-2">Interest Rate (%)</label>
            <input type="text" name="interest_rate" id="interest_rate"
                class="form-input rounded-md shadow-sm mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="application_date" class="block text-gray-700 text-sm font-bold mb-2">Application Date</label>
            <input type="date" name="application_date" id="application_date"
                class="form-input rounded-md shadow-sm mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <input type="text" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                required>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary">Apply for Loan</button>
        </div>
    </form>
</div>
@endsection
