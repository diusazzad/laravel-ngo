@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="mb-4 text-2xl font-semibold">Edit Member</h1>

    <form action="{{ route('members.update', $member) }}" method="POST" class="max-w-md space-y-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label for="name" class="mb-2 text-lg font-semibold">Name</label>
            <input type="text" id="name" name="name" value="{{ $member->name }}"
                   class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                   required>
        </div>

        <div class="flex flex-col">
            <label for="email" class="mb-2 text-lg font-semibold">Email</label>
            <input type="email" id="email" name="email" value="{{ $member->email }}"
                   class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                   required>
        </div>

        <!-- Add other fields as needed -->

        <button type="submit"
                class="px-4 py-2 font-semibold text-white transition duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Update Member</button>
    </form>
</div>
@endsection
