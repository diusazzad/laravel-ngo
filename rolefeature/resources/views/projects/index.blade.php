@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold">Projects</h1>
<a href="{{ route('projects.create') }}"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Project</a>

<table class="table-auto mt-4">
    <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Description</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td class="border px-4 py-2">{{ $project->name }}</td>
            <td class="border px-4 py-2">{{ $project->description }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('projects.show', $project) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                <a href="{{ route('projects.edit', $project) }}"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <!-- Add a delete button (form) here -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection