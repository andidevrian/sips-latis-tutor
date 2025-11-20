<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route::get('/siswa/export', [SiswaController::class, 'export'])
//          ->name('siswa.export');

Route::resource('siswa', SiswaController::class);

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/siswa/export', function(Request $request){
    $lembaga = $request->lembaga_id;
    return Excel::download(new SiswaExport($lembaga), 'data-siswa.xlsx');
})->name('siswa.export');
