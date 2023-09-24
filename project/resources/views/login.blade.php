@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center h-screen bg-gray-100">
    <div class="flex items-center justify-center w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <div class="w-full max-w-xs">
            <h2 class="mb-6 text-3xl font-semibold text-center">NGO Login</h2>
            <form action="{{ route('login') }}" method="post" class="space-y-4">
                @csrf

                @if ($errors->any())
                <div class="mt-4 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="flex flex-col">
                    <label for="email" class="mb-2 font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="flex flex-col">
                    <label for="password" class="mb-2 font-semibold text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-6 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
                    <div class="text-sm">
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Don't have an
                            account?</a>
                        <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
