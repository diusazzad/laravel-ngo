{{-- <section class="px-4 py-20">
    <h2 class="mb-8 text-4xl font-bold text-center">Programs and Initiatives</h2>

    <!-- Overview -->
    <div class="mb-16">
        <h3 class="mb-4 text-2xl font-bold">Overview</h3>
        <p class="text-lg">[Briefly describe the programs and initiatives your NGO is involved in.]</p>
    </div>

    <!-- Program Cards -->
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- Program Card 1 -->
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <img src="https://images.unsplash.com/photo-1579296440601-efe78a19fa91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80"
                alt="[Program Name 1]" class="w-32 h-32 mx-auto mb-4">
            <h4 class="mb-2 text-xl font-bold">[Program Name 1]</h4>
            <p class="mb-4 text-lg">[Program Description 1]</p>
            <a href="[Program Link 1]" class="font-semibold text-blue-500 hover:text-blue-700">Learn More</a>
        </div>

        <!-- Program Card 2 -->
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <img src="https://images.unsplash.com/photo-1535090467336-9501f96eef89?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                alt="[Program Name 2]" class="w-32 h-32 mx-auto mb-4">
            <h4 class="mb-2 text-xl font-bold">[Program Name 2]</h4>
            <p class="mb-4 text-lg">[Program Description 2]</p>
            <a href="[Program Link 2]" class="font-semibold text-blue-500 hover:text-blue-700">Learn More</a>
        </div>

        <!-- Program Card 3 -->
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <img src="https://plus.unsplash.com/premium_photo-1678837556129-d8cdd80cbe25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                alt="[Program Name 3]" class="w-32 h-32 mx-auto mb-4">
            <h4 class="mb-2 text-xl font-bold">[Program Name 3]</h4>
            <p class="mb-4 text-lg">[Program Description 3]</p>
            <a href="[Program Link 3]" class="font-semibold text-blue-500 hover:text-blue-700">Learn More</a>
        </div>
    </div>
</section> --}}

<section class="px-4 py-20">
    <h2 class="mb-8 text-4xl font-bold text-center">DONATE BY CARD</h2>

    <!-- Personal Info -->
    <div class="mb-8">
        <h3 class="mb-4 text-2xl font-bold">Personal Info</h3>
        <form>
            <div class="mb-4">
                <label for="name" class="block mb-2 font-semibold">Name *</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="last-name" class="block mb-2 font-semibold">Last Name *</label>
                <input type="text" id="last-name" name="last-name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 font-semibold">Email *</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-2 font-semibold">Phone number *</label>
                <input type="tel" id="phone" name="phone" required
                    pattern="^\+[0-9]{1,3}\([0-9]{2}\) [0-9]{3} [0-9]{4}$"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                    placeholder="Format: +[country code](XX) XXX XXXX">
            </div>
        </form>
    </div>

    <!-- Postal Info -->
    <div class="mb-8">
        <h3 class="mb-4 text-2xl font-bold">Postal Info</h3>
        <form>
            <div class="mb-4">
                <label for="country" class="block mb-2 font-semibold">Country</label>
                <input type="text" id="country" name="country"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="city" class="block mb-2 font-semibold">City</label>
                <input type="text" id="city" name="city" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="address" class="block mb-2 font-semibold">Address</label>
                <input type="text" id="address" name="address"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="postal-office" class="block mb-2 font-semibold">Postal Office</label>
                <input type="text" id="postal-office" name="postal-office"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
        </form>
    </div>

    <!-- Donation Amount -->
    <div class="mb-8">
        <h3 class="mb-4 text-2xl font-bold">Amount</h3>
        <form>
            <div class="mb-4">
                <label for="amount" class="block mb-2 font-semibold">Insert amount in UAH</label>
                <input type="number" id="amount" name="amount"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
        </form>
    </div>

    <!-- Currency Exchange Rates -->
    <div class="mb-8">
        <h3 class="mb-4 text-2xl font-bold">Currency Exchange Rates</h3>
        <p>Please use www.xe.com to see the UAH equivalent of the amount you wish to donate. Your donation will be
            charged in your home currency.</p>
    </div>

    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit"
            class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Send</button>
    </div>

    <p class="mt-8 text-center">Thank you for your support!</p>
</section>
