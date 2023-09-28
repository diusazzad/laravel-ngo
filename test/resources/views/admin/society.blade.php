@extends('layout.dashboard')

@section('content')
<h2 class="text-lg font-semibold">Create Society</h2>




<form method="POST" action="">
    @csrf
    <div class="mt-4">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-input" required>
    </div>
    <div class="mt-4">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" class="form-input" required>
    </div>
    <div class="mt-4">
        <label for="contact_info">Contact Info:</label>
        <input type="text" name="contact_info" id="contact_info" class="form-input" required>
    </div>
    <div class="mt-6">
        <button type="submit" class="btn btn-primary">Create Society</button>
    </div>
</form>

<div class="mt-8">
    <h2 class="text-lg font-semibold mb-4">Societies</h2>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Address
                </th>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Contact Info
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($societyIndexs as $society)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                    {{ $society->name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    {{ $society->address }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    {{ $society->contact_info }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <form action="" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
