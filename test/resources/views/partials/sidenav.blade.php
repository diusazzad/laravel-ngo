<div x-data="{ isOpen: false }" class="h-screen transition duration-500 bg-gray-500 md:w-1/4 hover:bg-gray-800">
    <!-- Sidebar content -->
    <button @click="isOpen = !isOpen"
        class="px-6 py-2 mb-1 text-gray-100 bg-gray-200 rounded-lg md:hidden hover:bg-gray-700 hover:text-gray-200">
        <i class='bx bx-menu'></i> Menu
    </button>
    <ul x-show="isOpen || window.innerWidth > 768" class="md:block">
        <li class="transition duration-500 hover:bg-gray-50">
            <a href="/societyAdd"><i class='bx bx-user-plus'></i> Society Add</a>
        </li>
        <li class="transition duration-500 hover:bg-gray-50">
            <a href="/memberAdd"><i class='bx bx-user-plus'></i> Member Add</a>
        </li>
        <li class="transition duration-500 hover:bg-gray-50">
            <a href="/loanApply"><i class='bx bx-money'></i> Loan Apply</a>
        </li>
        <!-- Add more list items with links and icons for each menu item -->
        <li class="transition duration-500 hover:bg-gray-50">
            <a href="/logout"><i class='bx bx-log-out'></i> Logout</a>
        </li>
    </ul>
</div>
