@extends('layout.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Societies</h1>

<a href="{{ route('society.create') }}"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Create Society</a>

<div class="overflow-x-auto">
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Contact Info</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($societies as $society)
            <tr>
                <td class="border px-4 py-2">{{ $society->id }}</td>
                <td class="border px-4 py-2">{{ $society->name }}</td>
                <td class="border px-4 py-2">{{ $society->address }}</td>
                <td class="border px-4 py-2">{{ $society->contact_info }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('society.show', $society) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">View</a>
                    <a href="{{ route('society.edit', $society) }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                    <form action="{{ route('society.destroy', $society) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
