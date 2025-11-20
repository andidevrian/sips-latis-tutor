<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SIPS LatisTutor') }} - @yield('title')</title>

    {{-- Vite + Tailwind (jangan lupa npm run dev) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- DataTables CSS (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 w-64 bg-white shadow-md transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-20 overflow-y-auto">
        <div class="px-6 py-8 border-b">
            <h1 class="text-2xl font-bold text-gray-800">SIPS LatisTutor</h1>
            <small class="text-gray-500">Sistem Informasi Pendataan Siswa</small>
        </div>
        <nav class="flex-1 px-6 py-4 space-y-2">
            <a href="{{ route('dashboard') }}"
                class="block px-4 py-3 rounded-lg hover:bg-blue-100 text-gray-700 font-medium transition {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : '' }}">
                Home
            </a>

            <a href="{{ route('siswa.index') }}"
                class="block px-4 py-3 rounded-lg hover:bg-blue-100 text-gray-700 font-medium transition {{ request()->routeIs('siswa.*') ? 'bg-blue-600 text-white' : '' }}">
                Data Siswa
            </a>

            <a href="{{ route('profile') }}"
                class="block px-4 py-3 rounded-lg hover:bg-blue-100 text-gray-700 font-medium transition {{ request()->routeIs('profile') ? 'bg-blue-600 text-white' : '' }}">
                Profile
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-3 rounded-lg hover:bg-red-100 text-red-600 font-medium transition">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Overlay Mobile -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-10 md:hidden" onclick="toggleSidebar()"></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col md:ml-64">
        <!-- Mobile Navbar -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between md:hidden">
            <button onclick="toggleSidebar()" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-xl font-bold text-gray-800">SIPS LatisTutor</h1>
        </header>

        <main class="flex-1 p-6 md:p-8">
            <!-- Flash Message & Errors -->
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- Custom Script Sidebar -->
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
            document.getElementById('overlay').classList.toggle('hidden');
        }
    </script>

    <!-- Stack untuk script tambahan (DataTables di view siswa.index) -->
    @stack('scripts')
</body>

</html>
