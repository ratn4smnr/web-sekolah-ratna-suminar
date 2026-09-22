<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Menampilkan semua data guru.
     */
    public function index()
    {
        $gurus = Guru::latest()->get();

        return view('guru.index', compact('gurus'));
    }

    /**
     * Menampilkan form tambah guru.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Menyimpan data guru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:100',
            'jabatan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
        ];

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store(
                'guru',
                'public'
            );
        }

        Guru::create($data);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail guru.
     */
    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'));
    }

    /**
     * Menampilkan form edit guru.
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Mengupdate data guru.
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:100',
            'jabatan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
        ];

        // Upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }

            $data['foto'] = $request->file('foto')->store(
                'guru',
                'public'
            );
        }

        $guru->update($data);

        return redirect()
            ->to('/guru')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Menghapus data guru.
     */
    public function destroy(Guru $guru)
    {
        // Hapus foto
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }

        $guru->delete();

        return redirect()
            ->to('/guru')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}
