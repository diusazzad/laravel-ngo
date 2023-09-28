@extends('layout.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Loan Application</h1>

<h1 class="text-2xl font-bold mb-4">Apply for a Loan</h1>

<form method="POST" action="{{ route('loan-applications.store') }}" class="max-w-lg">
    @csrf

    <div class="mb-4">
        <label for="application_amount" class="block text-gray-700 font-bold mb-2">Amount:</label>
        <input id="application_amount" type="number" step="0.01" name="application_amount"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>

    <div class="mb-4">
        <label for="application_date" class="block text-gray-700 font-bold mb-2">Date:</label>
        <input id="application_date" type="date" name="application_date"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>

    <div class="mb-4">
        <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
        <input id="status" type="text" name="status"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>

    <div class="mb-4">
        <label for="member_id" class="block text-gray-700 font-bold mb-2">Member ID:</label>
        <input id="member_id" type="number" name="member_id"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>

    <div class="mb-4">
        <label for="loan_id" class="block text-gray-700 font-bold mb-2">Loan ID:</label>
        <input id="loan_id" type="number" name="loan_id"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>

    <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
</form>
@endsection
