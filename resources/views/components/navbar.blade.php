<nav class="w-full bg-white shadow-sm fixed top-0 left-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

        <!-- Logo + Judul -->
        <div class="flex items-center gap-2">
            <img src="/img/logo.jpg" class="w-10 h-10 object-cover rounded-full">
            <h1 class="font-['Arial'] text-2xl font-bold text-[#1b4d3e]">
                Florista Garden
            </h1>
        </div>

        <!-- Menu -->
        <ul class="hidden md:flex items-center gap-6 text-[#1b4d3e] font-semibold">
            <li><a href="/katalog" class="hover:text-green-700">Katalog</a></li>
            <li><a href="/admin/dashboard" class="hover:text-green-700">Admin</a></li>

            <!-- LOGIN / LOGOUT -->
            @if(Auth::check())
                <!-- Kalau admin SUDAH login -->
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button 
                            type="submit"
                            class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800 transition">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <!-- Kalau admin BELUM login -->
                <li>
                    <a 
                        href="/login"
                        class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800 transition">
                        Login
                    </a>
                </li>
            @endif
        </ul>

    </div>
</nav>
