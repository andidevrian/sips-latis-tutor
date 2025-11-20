@extends('layouts.app')

@section('title', 'Tambah Siswa Baru')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-6">
            <h1 class="text-3xl font-bold text-white">Tambah Siswa Baru</h1>
            <p class="text-blue-100 mt-1">Isi data siswa dengan lengkap dan benar</p>
        </div>

        <div class="p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- NIS -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ old('nis') }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('nis') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition"
                               placeholder="Contoh: 20250001" required>
                        @error('nis')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('nama') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition"
                               placeholder="Masukkan nama siswa" required>
                        @error('nama')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition"
                               placeholder="contoh@student.com" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Lembaga -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Lembaga</label>
                        <select name="lembaga_id" 
                                class="w-full px-4 py-3 border {{ $errors->has('lembaga_id') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition" required>
                            <option value="">-- Pilih Lembaga --</option>
                            @foreach($lembagas as $lembaga)
                                <option value="{{ $lembaga->id }}" {{ old('lembaga_id') == $lembaga->id ? 'selected' : '' }}>
                                    {{ $lembaga->nama_lembaga }}
                                </option>
                            @endforeach
                        </select>
                        @error('lembaga_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Foto -->
                <div class="mt-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Foto Siswa (Opsional)</label>
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-64 border-4 border-dashed border-gray-300 rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                                <p class="text-sm text-gray-600">Klik untuk upload foto</p>
                                <p class="text-xs text-gray-500 mt-2">PNG, JPG maksimal 100KB</p>
                            </div>
                            <input type="file" name="foto" class="hidden" accept="image/jpeg,image/png">
                        </label>
                    </div>
                    @error('foto')
                        <p class="mt-3 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol -->
                <div class="mt-10 flex justify-end gap-4">
                    <a href="{{ route('siswa.index') }}" 
                       class="px-6 py-3 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-lg shadow transition">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition transform hover:scale-105">
                        Simpan Data Siswa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection