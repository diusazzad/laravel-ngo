<header class="p-4 bg-blue-500">
    <div class="container flex items-center justify-between mx-auto">
        <!-- Logo -->
        <div class="text-2xl font-semibold text-white">
            <a href="">
                <img src="https://freevector-images.s3.amazonaws.com/uploads/vector/preview/31261/LiverBirdHead829.png"
                    alt="" class="w-auto h-12">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden space-x-4 md:block">
            <x-home.navlink href="{{ route('home') }}">Home</x-home.navlink>
            <x-home.navlink href="{{ route('home') }}">About Us</x-home.navlink>
            <x-home.navlink href="{{ route('home') }}">Programs</x-home.navlink>
            <x-home.navlink href="{{ route('home') }}">Get Involved</x-home.navlink>
            <x-home.navlink href="{{ route('login') }}">Login</x-home.navlink>
            <x-home.donatebutton href="#">Donate</x-home.donatebutton>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden" x-data="{ open: false }">
            <button @click="open = true" type="button" class="text-white hover:text-blue-300 focus:outline-none">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 menu">
                    <path fill-rule="evenodd"
                        d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm1 5a1 1 0 100 2h14a1 1 0 100-2H3z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div :class="{ 'hidden': !open }" class="absolute top-0 left-0 w-full h-full p-4 bg-blue-500">
                <button @click="open = false" class="float-right text-white hover:text-blue-300 focus:outline-none">
                    Close
                </button>
                <div class="clear-both">
                    <x-home.navlink href="#" class="block mb-2 font-semibold">Home</x-home.navlink>
                    <x-home.navlink href="#" class="block mb-2 font-semibold">About Us</x-home.navlink>
                    <x-home.navlink href="#" class="block mb-2 font-semibold">Programs</x-home.navlink>
                    <x-home.navlink href="#" class="block mb-2 font-semibold">Get Involved</x-home.navlink>
                    <x-home.navlink href="#" class="block mb-2 font-semibold">Contact</x-home.navlink>
                    <x-home.donatebutton href="#" class="block mt-4">Donate</x-home.donatebutton>
                </div>
            </div>
        </div>
    </div>
</header>
