<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jurusan',
        'singkatan',
        'deskripsi',
        'gambar',
    ];

    /**
     * Relasi ke Siswa (satu jurusan punya banyak siswa)
     */
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}