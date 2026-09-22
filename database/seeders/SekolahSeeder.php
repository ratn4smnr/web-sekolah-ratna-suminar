<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Jurusan;
use App\Models\Eskul;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    public function run(): void
    {
        // ===== Jurusan =====
        $rpl = Jurusan::create([
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'deskripsi'    => 'Jurusan yang mempelajari pengembangan aplikasi, website, dan basis data.',
            'kompetensi'   => 'Pemrograman Web, Basis Data, Mobile Programming',
            'gambar'       => 'jurusan/rpl.jpg',
        ]);

        $tkj = Jurusan::create([
            'nama_jurusan' => 'Teknik Komputer dan Jaringan',
            'deskripsi'    => 'Jurusan yang mempelajari instalasi jaringan, keamanan, dan perawatan komputer.',
            'kompetensi'   => 'Jaringan Komputer, Administrasi Server, Keamanan Jaringan',
            'gambar'       => 'jurusan/tkj.jpg',
        ]);

        $akl = Jurusan::create([
            'nama_jurusan' => 'Akuntansi dan Keuangan Lembaga',
            'deskripsi'    => 'Jurusan yang mempelajari pencatatan dan pengelolaan keuangan.',
            'kompetensi'   => 'Akuntansi Dasar, Perpajakan, Aplikasi Akuntansi',
            'gambar'       => 'jurusan/akl.jpg',
        ]);

        // ===== Guru =====
        Guru::insert([
            ['nama' => 'Drs. Ahmad Fauzi, M.Pd', 'nip' => '196801011990031001', 'jabatan' => 'Kepala Sekolah', 'mapel' => '-', 'foto' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Siti Rahma, S.Pd', 'nip' => '197505152001122001', 'jabatan' => 'Guru', 'mapel' => 'Matematika', 'foto' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Budi Santoso, S.Kom', 'nip' => '198203102005011002', 'jabatan' => 'Guru', 'mapel' => 'Pemrograman Web', 'foto' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Dewi Lestari, S.Pd', 'nip' => '198711202010012003', 'jabatan' => 'Guru', 'mapel' => 'Bahasa Indonesia', 'foto' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rudi Hartono, S.T', 'nip' => '198009152006041004', 'jabatan' => 'Guru', 'mapel' => 'Jaringan Komputer', 'foto' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ===== Siswa =====
        Siswa::insert([
            ['nama' => 'Andi Pratama', 'nis' => '2024001', 'jurusan_id' => $rpl->id, 'kelas' => 'XI RPL 1', 'angkatan' => '2024', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bella Safitri', 'nis' => '2024002', 'jurusan_id' => $rpl->id, 'kelas' => 'XI RPL 1', 'angkatan' => '2024', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Citra Ayu', 'nis' => '2024003', 'jurusan_id' => $tkj->id, 'kelas' => 'XI TKJ 1', 'angkatan' => '2024', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Dimas Saputra', 'nis' => '2024004', 'jurusan_id' => $tkj->id, 'kelas' => 'XI TKJ 1', 'angkatan' => '2024', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Eka Wulandari', 'nis' => '2024005', 'jurusan_id' => $akl->id, 'kelas' => 'XI AKL 1', 'angkatan' => '2024', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ===== Galeri =====
        Galeri::insert([
            ['judul' => 'Kegiatan Upacara Bendera', 'foto' => 'galeri/upacara.jpg', 'keterangan' => 'Upacara rutin setiap hari Senin.', 'kategori' => 'kegiatan', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Laboratorium Komputer', 'foto' => 'galeri/lab-komputer.jpg', 'keterangan' => 'Fasilitas laboratorium komputer sekolah.', 'kategori' => 'fasilitas', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Perpustakaan Sekolah', 'foto' => 'galeri/perpustakaan.jpg', 'keterangan' => 'Ruang baca dan koleksi buku.', 'kategori' => 'fasilitas', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Perayaan Hari Kemerdekaan', 'foto' => 'galeri/hut-ri.jpg', 'keterangan' => 'Lomba dan perayaan HUT RI.', 'kategori' => 'acara', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Kegiatan Pramuka', 'foto' => 'galeri/pramuka.jpg', 'keterangan' => 'Latihan rutin ekstrakurikuler pramuka.', 'kategori' => 'kegiatan', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Lapangan Olahraga', 'foto' => 'galeri/lapangan.jpg', 'keterangan' => 'Fasilitas lapangan serbaguna.', 'kategori' => 'fasilitas', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ===== Prestasi =====
        Prestasi::insert([
            ['judul' => 'Lomba Cerdas Cermat Tingkat Kabupaten', 'nama_siswa' => 'Andi Pratama', 'tingkat' => 'Kabupaten', 'juara' => 'Juara 1', 'tahun' => '2025', 'foto' => 'prestasi/lcc.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Lomba Web Design', 'nama_siswa' => 'Bella Safitri', 'tingkat' => 'Provinsi', 'juara' => 'Juara 2', 'tahun' => '2025', 'foto' => 'prestasi/webdesign.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Olimpiade Matematika', 'nama_siswa' => 'Citra Ayu', 'tingkat' => 'Nasional', 'juara' => 'Juara 3', 'tahun' => '2024', 'foto' => 'prestasi/olimpiade.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Lomba Futsal Antar Sekolah', 'nama_siswa' => 'Tim Futsal', 'tingkat' => 'Kabupaten', 'juara' => 'Juara 1', 'tahun' => '2024', 'foto' => 'prestasi/futsal.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ===== Eskul =====
        Eskul::insert([
            ['nama_eskul' => 'Pramuka', 'slug' => 'pramuka', 'deskripsi' => 'Kegiatan kepramukaan untuk melatih kedisiplinan dan kemandirian.', 'pembina' => 'Rudi Hartono, S.T', 'jadwal' => 'Jumat, 14.00 - 16.00', 'gambar' => 'eskul/pramuka.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['nama_eskul' => 'Futsal', 'slug' => 'futsal', 'deskripsi' => 'Ekstrakurikuler olahraga futsal untuk mengasah bakat siswa.', 'pembina' => 'Budi Santoso, S.Kom', 'jadwal' => 'Selasa & Kamis, 15.30 - 17.00', 'gambar' => 'eskul/futsal.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['nama_eskul' => 'Paskibra', 'slug' => 'paskibra', 'deskripsi' => 'Melatih baris-berbaris dan kedisiplinan siswa.', 'pembina' => 'Dewi Lestari, S.Pd', 'jadwal' => 'Rabu, 15.00 - 17.00', 'gambar' => 'eskul/paskibra.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['nama_eskul' => 'English Club', 'slug' => 'english-club', 'deskripsi' => 'Meningkatkan kemampuan bahasa Inggris siswa secara aktif.', 'pembina' => 'Siti Rahma, S.Pd', 'jadwal' => 'Sabtu, 09.00 - 11.00', 'gambar' => 'eskul/english-club.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}