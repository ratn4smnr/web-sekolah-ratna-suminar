<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'jurusan_id',
        'kelas',
        'angkatan',
        'jenis_kelamin',
        'foto',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
