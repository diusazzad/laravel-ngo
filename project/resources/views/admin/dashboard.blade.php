@extends('layouts.admin')

@section('content')
<div class="flex h-screen bg-gray-200">
    <!-- Sidebar -->
    {{-- <div class="w-64 p-4 bg-white shadow-lg">
        <h2 class="mb-6 text-2xl font-semibold">Admin Panel</h2>
        <ul>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Home</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Society Add</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Member Add</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Apply</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Approval</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Collection</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Share Collection</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Deny To Approve</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Withdraw</a></li>
            <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Report</a></li>
            <li class="mb-2">
                <a href="{{ route('logout') }}" class="block py-2 text-gray-700 hover:text-blue-500"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div> --}}

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <!-- Top Nav -->
        <div class="flex justify-end mb-10">
            <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Logout</a>
        </div>

        <!-- Right Side Nav -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Member's Status</h3>
                <!-- Member's Status Content -->
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Income and Expense</h3>
                <!-- Income and Expense Content -->
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Employee Info</h3>
                <!-- Employee Info Content -->
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Bank Transaction</h3>
                <!-- Bank Transaction Content -->
            </div>
        </div>
    </div>
</div>

@endsection
