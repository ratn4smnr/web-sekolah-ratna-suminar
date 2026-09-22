<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nama_sekolah' => 'SMA Contoh',
            'sambutan'     => 'Selamat datang di website resmi sekolah kami.',
            'visi'         => 'Menjadi sekolah unggulan yang berkarakter.',
            'misi'         => 'Meningkatkan kualitas pendidikan berbasis IPTEK dan IMTAK.',
            'alamat'       => 'Jl. Contoh No. 123, Kota Contoh',
            'telepon'      => '021-1234567',
            'email'        => 'info@smacontoh.sch.id',
            'logo'         => 'logo.png',
        ]);
    }
}
