<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database (opsional, karena Laravel otomatis
     * pakai bentuk jamak dari nama model: profils)
     */
    protected $table = 'profils';

    /**
     * Kolom yang boleh diisi lewat mass assignment (create/update)
     */
    protected $fillable = [
        'nama_sekolah',
        'sambutan',
        'visi',
        'misi',
        'alamat',
        'telepon',
        'email',
        'logo',
    ];
}