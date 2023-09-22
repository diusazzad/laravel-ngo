@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="mb-4 text-2xl font-semibold">Members</h1>

    <a href="{{ route('members.create') }}"
       class="px-4 py-2 text-white transition duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Add New Member</a>

    <ul class="mt-6 space-y-4">
        @foreach ($members as $member)
        <li class="flex items-center justify-between p-4 bg-white rounded-md shadow-md">
            <div>
                <p class="text-lg font-semibold">{{ $member->name }}</p>
                <p class="text-gray-500">{{ $member->email }}</p>
            </div>
            <div>
                <a href="{{ route('members.edit', $member) }}"
                   class="mr-2 text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('members.destroy', $member) }}" method="POST"
                      class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="text-red-500 hover:text-red-700 hover:underline">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
