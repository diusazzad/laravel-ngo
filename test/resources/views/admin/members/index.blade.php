@extends('layout.dashboard')

@section('content')
<!-- Display all members -->
<a href="{{ route('members.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Create New
    Member</a>
@foreach ($members as $member)
<div class="flex justify-between items-center mb-4">
    <p class="text-lg font-medium">{{ $member->name }} - {{ $member->society->name }}</p>
    <div class="flex space-x-2">
        <a href="{{ route('members.edit', $member->id) }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
        <form action="{{ route('members.destroy', $member->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Delete</button>
        </form>
    </div>
</div>
@endforeach

@endsection
