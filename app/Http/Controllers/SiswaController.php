<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Menampilkan semua data siswa.
     */
    public function index()
    {
        $siswa = Siswa::with('jurusan')->latest()->get();

        return view('siswa.index', compact('siswa'));
    }

    /**
     * Menampilkan form tambah siswa.
     */
    public function create()
    {
        $jurusans = Jurusan::all();

        return view('siswa.create', compact('jurusans'));
    }

    /**
     * Menyimpan data siswa baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'nis'           => 'required|string|max:255|unique:siswas,nis',
            'nisn'          => 'nullable|string|max:255',
            'jurusan_id'    => 'nullable|exists:jurusans,id',
            'kelas'         => 'nullable|string|max:255',
            'angkatan'      => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:L,P',
            'foto'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('foto-siswa', 'public');
        }

        Siswa::create($validated);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail siswa.
     */
    public function show(Siswa $siswa)
    {
        $siswa->load('jurusan');

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Menampilkan form edit siswa.
     */
    public function edit(Siswa $siswa)
    {
        $jurusans = Jurusan::all();

        return view('siswa.edit', compact('siswa', 'jurusans'));
    }

    /**
     * Mengupdate data siswa.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'nis'           =>'required|string|max:255|unique:siswas,nis,' . $siswa->id,
            'nisn'          => 'nullable|string|max:255',
            'jurusan_id'    => 'nullable|exists:jurusans,id',
            'kelas'         => 'nullable|string|max:255',
            'angkatan'      => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:L,P',
            'foto'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($siswa->foto && Storage::disk('public')->exists($siswa->foto)) {
                Storage::disk('public')->delete($siswa->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request->file('foto')
                ->store('foto-siswa', 'public');
        }

        $siswa->update($validated);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy(Siswa $siswa)
    {
        // Hapus foto siswa
        if ($siswa->foto && Storage::disk('public')->exists($siswa->foto)) {
            Storage::disk('public')->delete($siswa->foto);
        }

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}
