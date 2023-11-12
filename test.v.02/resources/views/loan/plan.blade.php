@extends('layout.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($loanPlans as $loanPlan)
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img class="h-48 w-full object-cover"
            src="https://images.pexels.com/photos/6591155/pexels-photo-6591155.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt="Sunset in the mountains">
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $loanPlan->name }}</div>
            <p class="mt-2 text-gray-500">{{ $loanPlan->interest_rate }}% Monthly</p>
            <p class="mt-2 text-gray-500">Late Fee: {{ $loanPlan->late_fee }}</p>
            <div class="mt-4">
                <a href="" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded-full">Apply Now</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
