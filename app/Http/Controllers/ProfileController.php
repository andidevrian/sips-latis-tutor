<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile', [
            'nama' => 'Nama Kandidat Anda',
            'posisi' => 'Full Stack Developer',
            'foto' => 'img/kandidat.jpg'
        ]);
    }
}
