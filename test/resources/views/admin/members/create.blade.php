@extends('layout.dashboard')

@section('content')
<!-- Create a new member form -->
<form action="{{ route('members.store') }}" method="POST" class="max-w-md mx-auto">
    @csrf
    @method('POST')
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="contact_info" class="block text-gray-700 font-bold mb-2">Contact Info</label>
        <input type="text" name="contact_info" id="contact_info" placeholder="Contact Info"
            value="{{ old('contact_info') }}" required
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('contact_info')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="society_id" class="block text-gray-700 font-bold mb-2">Society</label>
        <select name="society_id" id="society_id"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @foreach ($societies as $society)
            <option value="{{ $society->id }}" {{ old('society_id')==$society->id ? 'selected' : '' }}>{{ $society->name
                }}</option>
            @endforeach
        </select>
        @error('society_id')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
            Member</button>
    </div>
</form>
@endsection
