@extends('layout.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Society</h1>

<form action="{{ route('society.update', $society) }}" method="POST" class="max-w-lg">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" name="name" id="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $society->name }}" required>
    </div>

    <div class="mb-4">
        <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
        <input type="text" name="address" id="address" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $society->address }}" required>
    </div>

    <div class="mb-4">
        <label for="contact_info" class="block text-gray-700 font-bold mb-2">Contact Info</label>
        <input type="text" name="contact_info" id="contact_info" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $society->contact_info }}" required>
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
</form>
@endsection
