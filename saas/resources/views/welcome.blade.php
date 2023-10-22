@extends('layouts.app')

@section('content')
    <div x-data="{ open: false }">
        <nav class="bg-white px-6 py-4 shadow">
            <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="#" class="text-gray-800 text-xl font-bold md:text-2xl">Brand</a>
                    </div>
                    <div>
                        <button @click="open = !open" class="md:hidden rounded-lg focus:outline-none focus:shadow-outline">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 6a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm1 5a1 1 0 100 2h12a1 1 0 100-2H4z">
                                </path>
                                <path x-show="open" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="md:flex items-center" :class="{ 'hidden': !open }">
                    <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1 text-gray-700">
                        <a class="mt-1 md:mt-0 md:mx-4 text-sm font-semibold text-gray-700 md:text-gray-800 hover:text-blue-600"
                            href="#">Home</a>
                        <a class="mt-1 md:mt-0 md:mx-4 text-sm font-semibold text-gray-700 md:text-gray-800 hover:text-blue-600"
                            href="#">About</a>
                        <a class="mt-1 md:mt-0 md:mx-4 text-sm font-semibold text-gray-700 md:text-gray-800 hover:text-blue-600"
                            href="#">Services</a>
                        <a class="mt-1 md:mt-0 md:mx-4 text-sm font-semibold text-gray-700 md:text-gray-800 hover:text-blue-600"
                            href="#">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection
