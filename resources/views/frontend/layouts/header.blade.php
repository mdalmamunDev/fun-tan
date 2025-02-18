<!-- Header -->
<header id="header" class="fixed top-0 left-0 right-0 flex items-center justify-between px-6 py-4 bg-gray-800 z-50">
    <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/40x40?text=Logo" alt="Logo" class="w-8 h-8">
        <!-- 3-bar (Hamburger) icon for mobile -->
        <button class="block md:hidden focus:outline-none" onclick="toggleMenu()">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <!-- Navigation links (visible on larger screens, hidden on mobile) -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="hover:text-red-500">Home</a>
            <a href="{{ url('items') }}?type=2" class="hover:text-red-500">TV Shows</a>
            <a href="{{ url('items') }}?type=1" class="hover:text-red-500">Movies</a>
            <a href="{{ url('items') }}?sort=5" class="hover:text-red-500">New & Popular</a>
            <a href="{{ url('items') }}" class="hover:text-red-500">My List</a>
        </nav>
    </div>
    <!-- Profile and Search -->
    <div class="flex items-center space-x-4">
        <button class="bg-gray-700 px-3 py-1 rounded">Search</button>
        <details class="dropdown">
            <summary class="flex items-center cursor-pointer">
                <img src="https://via.placeholder.com/40" alt="User Profile" class="w-8 h-8 rounded-full me-1">
                Md. Al Mamun
            </summary>
            <ul class="menu dropdown-content bg-gray-700 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Profile</a></li>
                <li><a>History</a></li>
                <li><a>My List</a></li>
                <li><a>Logout</a></li>
            </ul>
        </details>
    </div>
</header>

<!-- Mobile Menu (visible when toggled) -->
<div id="mobileMenu" class="md:hidden hidden bg-gray-800 text-white">
    <nav class="flex flex-col items-start px-6 py-4 pt-20 space-y-4">
        <a href="{{ url('/') }}" class="hover:text-red-500">Home</a>
        <a href="{{ url('items') }}?type=2" class="hover:text-red-500">TV Shows</a>
        <a href="{{ url('items') }}?type=1" class="hover:text-red-500">Movies</a>
        <a href="{{ url('items') }}?sort=5" class="hover:text-red-500">New & Popular</a>
        <a href="{{ url('items') }}" class="hover:text-red-500">My List</a>
    </nav>
</div>