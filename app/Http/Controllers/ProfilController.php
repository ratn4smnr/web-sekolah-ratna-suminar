<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Ekstrakurikuler;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Guru;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $guru = Guru::latest()->take(4)->get();
        $galeri = Galeri::latest()->take(6)->get();
        $jurusan = Jurusan::all();

        return view('profil', compact('profil', 'guru', 'galeri', 'jurusan'));
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        return view('profil-edit', compact('profil'));
    }

    public function update(\Illuminate\Http\Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $validated = $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'visi'         => 'nullable|string',
            'misi'         => 'nullable|string',
            'alamat'       => 'nullable|string',
        ]);

        $profil->update($validated);

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui.');
    }
}