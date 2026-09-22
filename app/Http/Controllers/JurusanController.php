<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::withCount('siswa')->get();

        return view('jurusan', compact('jurusans'));
    }

    public function show(Jurusan $jurusan)
    {
        $jurusan->loadCount('siswa');

        return view('jurusan-detail', compact('jurusan'));
    }
}