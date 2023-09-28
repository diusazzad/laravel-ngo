@extends('layout.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Loan Applications</h1>

<a href="{{ route('loan-applications.create') }}"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4">Apply
    for a Loan</a>

<div class="grid grid-cols-4 gap-4">
    @foreach ($loanApplications as $loanApplication)
    <div class="border border-gray-400 rounded-lg p-4">
        <h2 class="text-lg font-bold mb-2">{{ $loanApplication->id }}</h2>
        <p class="mb-2">Amount: {{ $loanApplication->application_amount }}</p>
        <p class="mb-2">Date: {{ $loanApplication->application_date }}</p>
        <p class="mb-2">Status: {{ $loanApplication->status }}</p>
        <div class="flex justify-end">
            <a href="{{ route('loanApplications.show', $loanApplication) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">View</a>
            <a href="{{ route('loanApplications.edit', $loanApplication) }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">Edit</a>
            <form method="POST" action="{{ route('loanApplications.destroy', $loanApplication) }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
