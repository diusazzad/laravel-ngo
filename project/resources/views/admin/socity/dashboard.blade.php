@extends('layouts.admin')

@section('content')
<div class="container flex ">
    <!-- Form for creating a new society -->
    <div class="max-w-md mx-auto bg-white  p-5 rounded-md shadow-sm">
        <h2 class="text-2xl font-bold mb-5 text-gray-900">Society Registration</h2>
        <form action="/societies" method="POST" class="space-y-5">
            @csrf


            <div>
                <label for="SocietyID" class="block text-sm font-medium text-gray-700">Society ID</label>
                <select id="SocietyID" name="SocietyID" required
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Select Society</option>
                    @foreach ($societyOptions as $societyID => $societyName)
                    <option value="{{ $societyID }}">{{ $societyName }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="SocietyName">Society Name</label>
                <input type="text" class="form-control" id="SocietyName" name="SocietyName"
                    placeholder="Enter society name" required>
                <div class="invalid-feedback">
                    Please enter a society name.
                </div>
            </div>

            <div class="form-group">
                <label for="SocietyStartDate">Society Start Date</label>
                <input type="date" class="form-control" id="SocietyStartDate" name="SocietyStartDate" required>
                <div class="invalid-feedback">
                    Please enter a valid start date.
                </div>
            </div>

            <div class="form-group">
                <label for="SocietyChairman">Society Chairman</label>
                <input type="text" class="form-control" id="SocietyChairman" name="SocietyChairman"
                    placeholder="Enter chairman name" required>
                <div class="invalid-feedback">
                    Please enter a chairman name.
                </div>
            </div>

            <div class="form-group">
                <label for="SocietyManager">Society Manager</label>
                <input type="text" class="form-control" id="SocietyManager" name="SocietyManager"
                    placeholder="Enter manager name" required>
                <div class="invalid-feedback">
                    Please enter a manager name.
                </div>
            </div>

            <div class="form-group">
                <label for="ContactNumber">Contact Number</label>
                <input type="text" class="form-control" id="ContactNumber" name="ContactNumber"
                    placeholder="Enter contact number" required>
                <div class="invalid-feedback">
                    Please enter a valid contact number.
                </div>
            </div>

            <div class="form-group">
                <label for="Username">Username</label>
                <select class="form-select" id="Username" name="Username" required>
                    <option value="">Select User</option>
                    @foreach ($userOptions as $userID => $userName)
                    <option value="{{ $userID }}">{{ $userName }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Please select a user.
                </div>
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
        </form>
    </div>


    <!-- Table for displaying existing societies -->
    <div class="mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Society ID
                    </th>
                    <th scope="col">Society Name</th>
                    <th scope="col">Society Start Date</th>
                    <th scope="col">Society Chairman</th>
                    <th scope="col">Society Manager</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{-- Loop through existing societies and display them here --}}
                @foreach ($societies as $society)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->SocietyID }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->SocietyName }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->SocietyStartDate }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->SocietyChairman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->SocietyManager }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->ContactNumber }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $society->Username }}</div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection
