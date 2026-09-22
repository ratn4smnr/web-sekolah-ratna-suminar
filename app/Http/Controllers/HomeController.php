<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Ekstrakurikuler;
use App\Models\Berita;
use App\Models\Profil;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama (home)
     */
    public function index()
    {
        $profil = Profil::first();
        $guru = Guru::latest()->take(4)->get();
        $galeri = Galeri::latest()->take(6)->get();
        $jurusan = Jurusan::all();
        $ekstrakurikuler = Ekstrakurikuler::all();
        $berita = Berita::latest()->take(3)->get();

        return view('home', compact(
            'profil',
            'guru',
            'galeri',
            'jurusan',
            'ekstrakurikuler',
            'berita'
        ));
    }
}