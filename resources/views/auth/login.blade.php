<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat relative"
    style="background-image: url('https://images.unsplash.com/photo-1560264418-c4445382edbc?auto=format&fit=crop&w=1920&q=80');">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <!-- Form -->
    <div class="relative w-full max-w-md bg-white bg-opacity-95 shadow-2xl rounded-3xl p-10 z-10 transform transition-transform duration-300 hover:scale-105">
        
        <!-- Judul -->
        <h1 class="text-3xl font-extrabold text-gray-900 text-center mb-8 tracking-wide">Login</h1>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-600 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition">
            </div>

            <!-- Password -->
            <div class="mb-8">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105">
                Login
            </button>
        </form>

        <!-- Optional Footer -->
        <p class="mt-6 text-center text-gray-600 text-sm">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Daftar sekarang</a>
        </p>
    </div>

</body>

</html>
