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
                <li><a href="{{ route('admin.dashboard') }}"
                        class="block py-2 text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('admin.socity') }}" class="block py-2 text-gray-700 hover:text-blue-500">Society
                        Add</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Member Add</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Apply</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Approval</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Loan Collection</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Share Collection</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Deny To Approve</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Withdraw</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Report</a></li>
                @elseif(auth()->user()->role == 'user')
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-blue-500">userpart</a></li>
                @endif
                <li class="mb-2">
                    <a href="{{ route('logout') }}" class="block py-2 text-gray-700 hover:text-blue-500"
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
        <div class=" p-1 m-1 ">
            @yield('content')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>
