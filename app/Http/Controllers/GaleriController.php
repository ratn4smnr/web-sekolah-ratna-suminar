<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Menampilkan semua data galeri.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri.index', compact('galeris'));
    }

    /**
     * Menampilkan detail galeri.
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('galeri.show', compact('galeri'));
    }

    /**
     * Menampilkan form tambah galeri.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Menyimpan data galeri baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'nullable|string',
        ]);

        $data = $request->only(['judul', 'kategori']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }
}