<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-64 p-4 bg-white shadow-lg">
            <h2 class="mb-6 text-2xl font-semibold">Admin Panel</h2>
            <ul>
                @auth
                @if(auth()->user()->role == 'admin')
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="{{ route(" members.index") }}"
                        class="block py-2 text-gray-700 hover:text-blue-500">Employee Add</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">NGO Calculation</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Disburse</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Collection/Return</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Interest</a></li>
                @elseif(auth()->user()->role == 'user')
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                @endif
                <li class="mb-2">
                    <a href="{{ route('logout') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-700"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            @yield('content')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>
