<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            [
                'judul'     => 'Upacara Bendera',
                'gambar'    => 'upacara.jpg',
                'kategori'  => 'Kegiatan Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Praktik Jurusan APHP',
                'gambar'    => 'praktik-aphp.jpg',
                'kategori'  => 'Praktik Jurusan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Praktik Jurusan TKR',
                'gambar'    => 'praktik-tkr.jpg',
                'kategori'  => 'Praktik Jurusan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Ekstrakurikuler Pramuka',
                'gambar'    => 'pramuka.jpg',
                'kategori'  => 'Ekstrakurikuler',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Ekstrakurikuler Futsal',
                'gambar'    => 'futsal.jpg',
                'kategori'  => 'Ekstrakurikuler',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Gerbang Sekolah',
                'gambar'    => 'gerbang.jpeg',
                'kategori'  => 'Lingkungan Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Wisuda Kelas XII',
                'gambar'    => 'wisuda.jpg',
                'kategori'  => 'Acara Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'     => 'Perpustakaan Sekolah',
                'gambar'    => 'perpustakaan.jpg',
                'kategori'  => 'Fasilitas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}