@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header Selamat Datang -->
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4">
                Selamat Datang Kembali,
                <span class="bg-gradient-to-r from-pink-500 to-violet-500 bg-clip-text text-transparent">
                    {{ Auth::user()->name }}!
                </span>
            </h1>
            <p class="text-xl text-purple-200 font-light">Kamu berhasil login sebagai Full Stack Developer</p>
        </div>

        <!-- Grid Kartu Statistik & Menu -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Kartu 1 -->
            <div class="group relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 p-6 text-white transform transition-all hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-300 text-sm font-medium">Total Siswa</p>
                        <p class="text-4xl font-bold mt-2">1,234</p>
                    </div>
                    <div class="p-4 bg-purple-500/30 rounded-xl">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 text-sm text-purple-200">+12% dari bulan lalu</div>
            </div>

            <!-- Kartu 2 -->
            <div class="group relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 p-6 text-white transform transition-all hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-pink-300 text-sm font-medium">Lembaga Aktif</p>
                        <p class="text-4xl font-bold mt-2">8</p>
                    </div>
                    <div class="p-4 bg-pink-500/30 rounded-xl">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h-4m-6 0H5"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 text-sm text-pink-200">Semua lembaga aktif</div>
            </div>

            <!-- Kartu 3 -->
            <div class="group relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 p-6 text-white transform transition-all hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-cyan-300 text-sm font-medium">Export Hari Ini</p>
                        <p class="text-4xl font-bold mt-2">24</p>
                    </div>
                    <div class="p-4 bg-cyan-500/30 rounded-xl">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m-4-6v6m8-6v6m-8 4h8a2 2 0 002-2V6a2 2 0 00-2-2H8a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 text-sm text-cyan-200">Data berhasil diekspor</div>
            </div>

            <!-- Kartu 4 -->
            <div class="group relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 p-6 text-white transform transition-all hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-emerald-300 text-sm font-medium">Status Sistem</p>
                        <p class="text-3xl font-bold mt-2">Online</p>
                    </div>
                    <div class="p-4 bg-emerald-500/30 rounded-xl">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 text-sm text-emerald-200">Semua fitur berjalan normal</div>
            </div>
        </div>

        <!-- Menu Cepat -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('siswa.index') }}" class="group block">
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 text-center border border-white/20 hover:bg-white/20 transition-all transform hover:scale-105 hover:shadow-2xl">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21h3a2 2 0 002-2v-1a2 2 0 00-2-2H9a2 2 0 00-2 2v1a2 2 0 002 2h3m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Data Siswa</h3>
                    <p class="text-purple-200">Kelola semua data siswa dengan mudah</p>
                </div>
            </a>

            <a href="{{ route('siswa.create') }}" class="group block">
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 text-center border border-white/20 hover:bg-white/20 transition-all transform hover:scale-105 hover:shadow-2xl">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Tambah Siswa</h3>
                    <p class="text-green-200">Input data siswa baru sekarang</p>
                </div>
            </a>

            <a href="{{ route('profile') }}" class="group block">
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 text-center border border-white/20 hover:bg-white/20 transition-all transform hover:scale-105 hover:shadow-2xl">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Profile Saya</h3>
                    <p class="text-pink-200">Lihat profil developer kamu</p>
                </div>
            </a>
        </div>

        <!-- Footer -->
        <div class="text-center mt-16 text-purple-300">
            <p class="text-sm">Dibuat dengan <span class="text-red-500">Laravel 12</span> + <span class="text-cyan-400">Tailwind CSS</span></p>
        </div>
    </div>
</div>
@endsection
