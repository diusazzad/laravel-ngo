@extends('layout.dashboard')

@section('content')
<div class="p-10">
    <h2 class="text-lg font-semibold">Add Member</h2>

    <form method="POST" action="">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="contact_info" class="block text-gray-700 text-sm font-bold mb-2">Contact Info</label>
            <input type="text" name="contact_info" id="contact_info"
                class="form-input rounded-md shadow-sm mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="society_id" class="block text-gray-700 text-sm font-bold mb-2">Society</label>
            <select name="society_id" id="society_id" class="form-select rounded-md shadow-sm mt-1 block w-full"
                required>
                {{-- @foreach($societies as $society) --}}
                {{-- <option value="{{ $society->id }}">{{ $society->name }}</option> --}}
                {{-- @endforeach --}}
            </select>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary">Add Member</button>
        </div>
    </form>

    <!-- Display all users -->
    @foreach ($members as $member)
    <p>{{ $member->username }}</p>
    @endforeach


</div>
@endsection
