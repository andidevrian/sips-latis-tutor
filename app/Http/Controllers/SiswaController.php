<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Lembaga;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Siswa::with('lembaga');

            if ($request->filled('lembaga_id')) {
                $query->where('lembaga_id', $request->lembaga_id);
            }

            return DataTables::of($query)
                ->addColumn('lembaga', fn($row) => $row->lembaga?->nama_lembaga ?? '-')
                ->make(true);
        }

        $lembagas = Lembaga::all();
        return view('siswa.index', compact('lembagas'));
    }

    public function export(Request $request)
    {
        $query = Siswa::with('lembaga');

        if ($request->filled('lembaga_id')) {
            $query->where('lembaga_id', $request->lembaga_id);
        }

        $siswa = $query->get();

        // Nama file
        $filename = 'data_siswa_' . date('Ymd_His') . '.xlsx';

        return Excel::download(new class ($siswa) extends \PhpOffice\PhpSpreadsheet\Spreadsheet implements \Maatwebsite\Excel\Concerns\FromCollection {
            private $data;
            public function __construct($data)
            {
                $this->data = $data;
            }
            public function collection()
            {
                return $this->data;
            }
        }, $filename);
    }

    public function create()
    {
        $lembagas = Lembaga::all();
        return view('siswa.create', compact('lembagas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswas,nis',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:siswas,email',
            'lembaga_id' => 'required|exists:lembagas,id',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:100', // 100KB
        ]);

        $data = $request->only(['nis', 'nama', 'email', 'lembaga_id']);

        if ($request->hasFile('foto')) {
            // Buat manager
            $manager = new ImageManager(new Driver());

            $image = $request->file('foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Baca → resize → langsung simpan (PAKAI ->save() bukan encode!)
            $manager->read($image)
                ->resize(400, 560, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(storage_path('app/public/siswa/' . $filename), 90, 'jpg');

            // Simpan path ke database
            $data['foto'] = 'siswa/' . $filename;

            // Hapus foto lama (khusus update)
            if (isset($siswa) && $siswa->foto) {
                Storage::disk('public')->delete($siswa->foto);
            }
        }

        Siswa::create($data);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit(Siswa $siswa)
    {
        $lembagas = Lembaga::all();
        return view('siswa.edit', compact('siswa', 'lembagas'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        // validasi sama seperti store, kecuali unique skip diri sendiri
        $request->validate([
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'nama' => 'required',
            'email' => 'required|email|unique:siswas,email,' . $siswa->id,
            'lembaga_id' => 'required|exists:lembagas,id',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nis', 'nama', 'email', 'lembaga_id']);

        if ($request->hasFile('foto')) {
            // Buat manager
            $manager = new ImageManager(new Driver());

            $image = $request->file('foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Baca → resize → langsung simpan (PAKAI ->save() bukan encode!)
            $manager->read($image)
                ->resize(400, 560, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(storage_path('app/public/siswa/' . $filename), 90, 'jpg');

            // Simpan path ke database
            $data['foto'] = 'siswa/' . $filename;

            // Hapus foto lama (khusus update)
            if (isset($siswa) && $siswa->foto) {
                Storage::disk('public')->delete($siswa->foto);
            }
        }

        $siswa->update($data);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui!');
    }

    public function destroy(Siswa $siswa)
    {
        if ($siswa->foto) {
            Storage::disk('public')->delete($siswa->foto);
        }
        $siswa->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}