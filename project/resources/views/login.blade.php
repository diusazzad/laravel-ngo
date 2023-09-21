@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full flex items-center justify-center">
        <div class="w-full max-w-xs">
            <h2 class="text-3xl font-semibold mb-6 text-center">NGO Login</h2>
            <form class="space-y-4">
                <div class="flex flex-col">
                    <label for="email" class="text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="flex flex-col">
                    <label for="password" class="text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
