<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eskul = [
            [
                'nama_eskul' => 'Pramuka',
                'deskripsi'  => 'Kegiatan kepramukaan yang melatih kedisiplinan, kemandirian, dan jiwa kepemimpinan siswa.',
                'pembina'    => 'Ahmad Suhendra',
                'gambar'     => 'pramuka.jpg',
            ],
            [
                'nama_eskul' => 'Paskibra',
                'deskripsi'  => 'Ekstrakurikuler pengibaran bendera yang melatih kedisiplinan dan baris-berbaris.',
                'pembina'    => 'Tatang Rustandi',
                'gambar'     => 'paskibra.jpg',
            ],
            [
                'nama_eskul' => 'Futsal',
                'deskripsi'  => 'Wadah pengembangan bakat siswa di bidang olahraga futsal.',
                'pembina'    => 'Asep Purnama',
                'gambar'     => 'futsal.jpg',
            ],
            [
                'nama_eskul' => 'Basket',
                'deskripsi'  => 'Melatih kemampuan siswa dalam olahraga bola basket serta kerja sama tim.',
                'pembina'    => 'Sakti Alamsyah, SE',
                'gambar'     => 'basket.jpg',
            ],
            [
                'nama_eskul' => 'PMR (Palang Merah Remaja)',
                'deskripsi'  => 'Melatih siswa dalam bidang kepalangmerahan dan pertolongan pertama.',
                'pembina'    => 'Santi Mustika, AP',
                'gambar'     => 'pmr.jpg',
            ],
            [
                'nama_eskul' => 'Seni Tari',
                'deskripsi'  => 'Mengembangkan bakat siswa di bidang seni tari tradisional dan modern.',
                'pembina'    => 'Sima Kristina, ST',
                'gambar'     => 'seni_tari.jpg',
            ],
            [
                'nama_eskul' => 'Marching Band',
                'deskripsi'  => 'Ekstrakurikuler musik dan baris-berbaris yang sering tampil di berbagai acara.',
                'pembina'    => 'Nurdiansah, S.I.P',
                'gambar'     => 'marching_band.jpg',
            ],
            [
                'nama_eskul' => 'Rohis',
                'deskripsi'  => 'Kegiatan kerohanian Islam untuk membina akhlak dan spiritual siswa.',
                'pembina'    => 'M. Najib Aminullah',
                'gambar'     => 'rohis.jpg',
            ],
        ];

        DB::table('estrakurikulers')->insert($eskul);
    }
}