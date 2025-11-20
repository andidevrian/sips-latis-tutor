<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lembaga;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nis', 'nama', 'email', 'lembaga_id', 'foto'];

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }
}
