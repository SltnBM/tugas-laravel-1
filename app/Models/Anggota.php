<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas';
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'jk_anggota',
        'jurusan_anggota',
        'no_telp_anggota',
        'alamat_anggota',
    ];

    public function pinjam()
    {
        return $this->hasOne(App\Models\Peminjaman::class);
    }

    public function kembali()
    {
        return $this->hasOne(App\Models\Pengembalian::class);
    }
}
