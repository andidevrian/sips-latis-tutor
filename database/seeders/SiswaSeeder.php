<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembaga;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat Lembaga kalau belum ada
        $latis = Lembaga::firstOrCreate(['nama_lembaga' => 'Latiseducation']);
        $tutor = Lembaga::firstOrCreate(['nama_lembaga' => 'Tutorindonesia']);

        // 2. Daftar nama siswa
        $namaSiswa = [
            'Ahmad Rizki', 'Siti Aisyah', 'Budi Santoso', 'Rina Wulandari', 'Dika Pratama',
            'Nadia Putri', 'Fajar Nugroho', 'Laras Sari', 'Galih Pratama', 'Intan Permata',
            'Raka Wijaya', 'Dewi Lestari', 'Arief Rahman', 'Maya Anggraini', 'Tian Saputra'
        ];

        // 3. Buat folder storage untuk foto dummy (kalau belum ada)
        Storage::disk('public')->makeDirectory('siswa');

        foreach ($namaSiswa as $i => $nama) {
            $nis = '2025' . str_pad(($i + 1), 4, '0', STR_PAD_LEFT); // 20250001 dst
            $email = Str::slug($nama, '.') . '@student.com';

            // Foto dummy dari pravatar.cc (bisa langsung diakses)
            $fotoUrl = "https://i.pravatar.cc/300?img=" . ($i + 1);
            $fotoName = 'siswa_' . ($i + 1) . '.jpg';
            $fotoPath = 'siswa/' . $fotoName;

            // Download & simpan foto
            $imageContent = file_get_contents($fotoUrl);
            Storage::disk('public')->put($fotoPath, $imageContent);

            // Acak lembaga
            $lembaga = ($i % 2 == 0) ? $latis->id : $tutor->id;

            Siswa::create([
                'nis' => $nis,
                'nama' => $nama,
                'email' => $email,
                'lembaga_id' => $lembaga,
                'foto' => $fotoPath,
            ]);
        }

        $this->command->info('15 data siswa berhasil ditambahkan dengan foto!');
    }
}