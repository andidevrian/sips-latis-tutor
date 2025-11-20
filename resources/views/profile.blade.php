@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Card Utama -->
            <div class="bg-white shadow-2xl rounded-3xl overflow-hidden">
                <!-- Header Gradient -->
                <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 px-8 py-12 text-center">
                    <div class="relative inline-block">
                        <img src="{{ asset('storage/img/kandidat.jpg') }}" alt="Foto {{ Auth::user()->name }}"
                            class="w-40 h-40 rounded-full object-cover border-8 border-white shadow-2xl mx-auto">
                        <div
                            class="absolute bottom-0 right-0 bg-green-500 w-12 h-12 rounded-full border-4 border-white flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-4xl font-extrabold text-white mt-6">{{ Auth::user()->name }}</h1>
                    <p class="text-xl text-indigo-100 mt-2">Full Stack Developer</p>
                    <div class="flex flex-wrap justify-center gap-5 mt-8">
                        @php
                            $skills = [
                                'Laravel',
                                'Livewire',
                                'Tailwind CSS',
                                'React.js',
                                'MySQL',
                                'Git',
                                'API RESTful',
                                'Alpine.js',
                            ];
                        @endphp
                        @foreach ($skills as $skill)
                            <div class="group">
                                <span
                                    class="inline-block px-6 py-3 bg-white/20 backdrop-blur-xl border border-white/40 text-white font-bold text-sm rounded-full shadow-2xl 
                                         transform transition-all duration-300 
                                         hover:bg-white/40 hover:scale-110 hover:shadow-pink-500/50">
                                    {{ $skill }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Body Card -->
                <div class="px-10 py-12 bg-gray-50">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Info Kiri -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-8 h-8 text-indigo-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Informasi Pribadi
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-6 h-6 text-indigo-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span class="font-medium">Email:</span>
                                    <span class="ml-3 text-indigo-600">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-6 h-6 text-indigo-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h.01a1 1 0 100-2H6zm2 0a1 1 0 000 2h.01a1 1 0 100-2H8zm2 0a1 1 0 000 2h.01a1 1 0 100-2H10zm2 0a1 1 0 000 2h.01a1 1 0 100-2H12zm2 0a1 1 0 000 2h.01a1 1 0 100-2H14zm-8 4a1 1 0 000 2h.01a1 1 0 100-2H6zm2 0a1 1 0 000 2h.01a1 1 0 100-2H8zm2 0a1 1 0 000 2h.01a1 1 0 100-2H10zm2 0a1 1 0 000 2h.01a1 1 0 100-2H12zm2 0a1 1 0 000 2h.01a1 1 0 100-2H14z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-medium">Bergabung:</span>
                                    <span
                                        class="ml-3 text-indigo-600">{{ Auth::user()->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Kanan -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-8 h-8 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Keahlian Utama
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                @php
                                    $skills = [
                                        'Laravel',
                                        'Livewire',
                                        'Tailwind CSS',
                                        'MySQL',
                                        'Git & GitHub',
                                        'API RESTful',
                                        'React.js',
                                        'Alpine.js',
                                    ];
                                @endphp
                                @foreach ($skills as $skill)
                                    <div
                                        class="bg-gradient-to-r from-indigo-100 to-purple-100 px-5 py-3 rounded-xl text-center font-semibold text-indigo-800 shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
                                        {{ $skill }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('dashboard') }}"
                            class="px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-lg rounded-xl shadow-xl transition transform hover:scale-105 flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1v-10" />
                            </svg>
                            Kembali ke Dashboard
                        </a>

                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="px-8 py-4 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white font-bold text-lg rounded-xl shadow-xl transition transform hover:scale-105 flex items-center justify-center">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Kecil -->
            <div class="text-center mt-10 text-gray-600">
                <p class="text-sm">Dibuat dengan ❤️ menggunakan <span class="font-bold text-indigo-600">Laravel + Tailwind
                        CSS</span></p>
            </div>
        </div>
    </div>
@endsection
