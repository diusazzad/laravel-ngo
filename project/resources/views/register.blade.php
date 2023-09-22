@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <h2 class="mb-6 text-3xl font-semibold text-center">Register</h2>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div class="flex flex-col">
                <label for="name" class="mb-2 font-semibold text-gray-700">Name</label>
                <input type="text" id="name" name="name"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    value="{{ old('name') }}" required autofocus>
            </div>

            <div class="flex flex-col">
                <label for="email" class="mb-2 font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    value="{{ old('email') }}" required>
            </div>

            <div class="flex flex-col">
                <label for="password" class="mb-2 font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="flex flex-col">
                <label for="password_confirmation" class="mb-2 font-semibold text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="px-6 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</section>
@endsection
