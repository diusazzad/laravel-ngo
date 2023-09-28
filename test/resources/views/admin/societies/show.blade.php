@extends('layout.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Society Details</h1>

<table class="border-collapse border border-gray-400">
    <tbody>
        <tr>
            <th class="border border-gray-400 px-4 py-2">ID</th>
            <td class="border border-gray-400 px-4 py-2">{{ $society->id }}</td>
        </tr>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Name</th>
            <td class="border border-gray-400 px-4 py-2">{{ $society->name }}</td>
        </tr>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Address</th>
            <td class="border border-gray-400 px-4 py-2">{{ $society->address }}</td>
        </tr>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Contact Info</th>
            <td class="border border-gray-400 px-4 py-2">{{ $society->contact_info }}</td>
        </tr>
    </tbody>
</table>
@endsection
