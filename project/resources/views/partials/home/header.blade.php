<header class="bg-blue-500 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="text-white text-2xl font-semibold">
            <a href="">
                <img src="https://freevector-images.s3.amazonaws.com/uploads/vector/preview/31261/LiverBirdHead829.png"
                    alt="" class="h-12 w-auto">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:block space-x-4">
            <x-home.navlink href="#">Home</x-home.navlink>
            <x-home.navlink href="#">About Us</x-home.navlink>
            <x-home.navlink href="#">Programs</x-home.navlink>
            <x-home.navlink href="#">Get Involved</x-home.navlink>
            <x-home.navlink href="#">Contact</x-home.navlink>
            <x-home.donatebutton href="#">Donate</x-home.donatebutton>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden" x-data="{ open: false }">
            <button @click="open = true" type="button" class="text-white hover:text-blue-300 focus:outline-none">
                <svg viewBox="0 0 20 20" fill="currentColor" class="menu w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm1 5a1 1 0 100 2h14a1 1 0 100-2H3z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div :class="{ 'hidden': !open }" class="absolute top-0 left-0 w-full h-full bg-blue-500 p-4">
                <button @click="open = false" class="text-white hover:text-blue-300 focus:outline-none float-right">
                    Close
                </button>
                <div class="clear-both">
                    <x-home.navlink href="#" class="block font-semibold mb-2">Home</x-home.navlink>
                    <x-home.navlink href="#" class="block font-semibold mb-2">About Us</x-home.navlink>
                    <x-home.navlink href="#" class="block font-semibold mb-2">Programs</x-home.navlink>
                    <x-home.navlink href="#" class="block font-semibold mb-2">Get Involved</x-home.navlink>
                    <x-home.navlink href="#" class="block font-semibold mb-2">Contact</x-home.navlink>
                    <x-home.donatebutton href="#" class="block mt-4">Donate</x-home.donatebutton>
                </div>
            </div>
        </div>
    </div>
</header>
