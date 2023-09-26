<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite('resources/css/app.css')

</head>

<body>
    <div x-cloak x-data="sidebar()" class="relative flex items-start ">
        <x-dashboard.sidebar />
        <div :class="{'ml-56': sidebarOpen, 'ml-0' : !sidebarOpen }"
            class="flex-col w-full min-h-screen ml-56 transition-all duration-300 md:flex md:flex-col">
            <div class="p-10">
                @yield('content')
            </div>
        </div>

    </div>

</body>

</html>
