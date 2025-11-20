<?php
namespace App\Exports;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    protected $lembaga_id;

    public function __construct($lembaga_id = null)
    {
        $this->lembaga_id = $lembaga_id;
    }

    public function collection()
    {
        $query = Siswa::with('lembaga')->select('nis', 'nama', 'email', 'lembaga_id');
        if ($this->lembaga_id) {
            $query->where('lembaga_id', $this->lembaga_id);
        }
        return $query->get()->map(function ($s) {
            return [
                'NIS' => $s->nis,
                'Nama' => $s->nama,
                'Email' => $s->email,
                'Lembaga' => $s->lembaga->nama_lembaga,
            ];
        });
    }

    public function headings(): array
    {
        return ['NIS', 'Nama', 'Email', 'Lembaga'];
    }
}