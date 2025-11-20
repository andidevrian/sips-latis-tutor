@extends('layouts.app')

@section('title', 'Edit Siswa - ' . $siswa->nama)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-700 px-8 py-6">
            <h1 class="text-3xl font-bold text-white">Edit Data Siswa</h1>
            <p class="text-indigo-100 mt-1">Perbarui informasi siswa dengan benar</p>
        </div>

        <div class="p-8">
            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- NIS -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('nis') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-indigo-300 focus:border-indigo-500 transition"
                               required>
                        @error('nis')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('nama') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-indigo-300 focus:border-indigo-500 transition"
                               required>
                        @error('nama')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', $siswa->email) }}" 
                               class="w-full px-4 py-3 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-indigo-300 focus:border-indigo-500 transition"
                               required>
                        @error('email')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <!-- Lembaga -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Lembaga</label>
                        <select name="lembaga_id" 
                                class="w-full px-4 py-3 border {{ $errors->has('lembaga_id') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-4 focus:ring-indigo-300 focus:border-indigo-500 transition" required>
                            <option value="">-- Pilih Lembaga --</option>
                            @foreach($lembagas as $lembaga)
                                <option value="{{ $lembaga->id }}" {{ old('lembaga_id', $siswa->lembaga_id) == $lembaga->id ? 'selected' : '' }}>
                                    {{ $lembaga->nama_lembaga }}
                                </option>
                            @endforeach
                        </select>
                        @error('lembaga_id')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <!-- Foto Saat Ini & Upload Baru -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Foto Saat Ini -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Foto Saat Ini</label>
                        <div class="flex justify-center">
                            @if($siswa->foto)
                                <img src="{{ asset('storage/' . $siswa->foto) }}" 
                                     class="w-48 h-64 object-cover shadow-2xl border-8 border-white rounded-lg" alt="Foto {{ $siswa->nama }}">
                            @else
                                <div class="w-48 h-64 bg-gray-200 border-8 border-dashed border-gray-400 rounded-lg flex items-center justify-center">
                                    <span class="text-gray-500 text-lg">Tidak ada foto</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Upload Foto Baru -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Ganti Foto (Opsional)</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col items-center justify-center w-full h-64 border-4 border-dashed border-indigo-300 rounded-xl cursor-pointer bg-indigo-50 hover:bg-indigo-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-12 h-12 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                    <p class="text-sm text-indigo-700 font-medium">Klik untuk upload foto baru</p>
                                    <p class="text-xs text-gray-600 mt-2">PNG, JPG • Maksimal 100KB</p>
                                </div>
                                <input type="file" name="foto" class="hidden" accept="image/jpeg,image/png">
                            </label>
                        </div>
                        @error('foto')<p class="mt-3 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="mt-12 flex justify-end gap-4">
                    <a href="{{ route('siswa.index') }}" 
                       class="px-8 py-3 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-lg shadow-lg transition">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-10 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold rounded-lg shadow-xl transition transform hover:scale-105">
                        Update Data Siswa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection