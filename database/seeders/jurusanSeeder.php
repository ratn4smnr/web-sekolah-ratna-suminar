<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'singkatan' => 'RPL',
                'slug' => 'rekayasa-perangkat-lunak',
                'gambar' => null,
                'deskripsi' => 'Jurusan Rekayasa Perangkat Lunak mempelajari cara merancang, membangun, dan menguji aplikasi maupun website. Siswa dibekali kemampuan pemrograman, basis data, dan pengembangan perangkat lunak.',
                'prospek_kerja' => 'Programmer, Web Developer, Mobile Developer, Software Tester.',
            ],
            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'singkatan' => 'TKJ',
                'slug' => 'teknik-komputer-dan-jaringan',
                'gambar' => null,
                'deskripsi' => 'Jurusan Teknik Komputer dan Jaringan mempelajari instalasi, konfigurasi, dan perbaikan jaringan komputer serta perangkat keras komputer.',
                'prospek_kerja' => 'Teknisi Komputer, Network Administrator, IT Support.',
            ],
            [
                'nama' => 'Multimedia',
                'singkatan' => 'MM',
                'slug' => 'multimedia',
                'gambar' => null,
                'deskripsi' => 'Jurusan Multimedia mempelajari desain grafis, animasi, editing video, dan produksi konten digital kreatif.',
                'prospek_kerja' => 'Graphic Designer, Video Editor, Animator, Content Creator.',
            ],
        ];

        foreach ($data as $item) {
            Jurusan::create($item);
        }
    }
}