@extends('layout.dashboard')

@section('content')
<div x-cloak x-data="sidebar()" class="relative flex items-start ">
    <x-dashboard.sidebar />
    <div :class="{'ml-56': sidebarOpen, 'ml-0' : !sidebarOpen }"
        class="flex-col w-full min-h-screen ml-56 transition-all duration-300 md:flex md:flex-col">
        <div class="p-10">
            main content
        </div>
    </div>

</div>


@endsection
