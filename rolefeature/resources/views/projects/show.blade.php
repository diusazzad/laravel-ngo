@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold">Project Details</h1>
<p class="mt-4"><strong>Name:</strong> {{ $project->name }}</p>

@can('view', $project)
<p class="mt-4"><strong>Description:</strong> {{ $project->description }}</p>
@else
<p class="mt-4"><em>You do not have permission to view the full description.</em></p>
@endcan

<!-- Add more project details here -->

<a href="{{ route('projects.index') }}"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Back to Projects</a>
@endsection
