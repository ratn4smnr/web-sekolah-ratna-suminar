<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EkstrakurikulerController extends Controller
{
    /**
     * Menampilkan semua data ekstrakurikuler.
     */
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::latest()->get();

        return view('ekstrakurikuler', compact('ekstrakurikulers'));
    }

    /**
     * Menampilkan form tambah.
     */
    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    /**
     * Menyimpan data ekstrakurikuler.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'pembina'    => 'nullable|string|max:255',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaFile = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images'),
                $namaFile
            );

            $validated['gambar'] = $namaFile;
        }

        Ekstrakurikuler::create($validated);

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail.
     */
    public function show(Ekstrakurikuler $ekstrakurikuler)
    {
        return view(
            'ekstrakurikuler.show',
            compact('ekstrakurikuler')
        );
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(Ekstrakurikuler $ekstrakurikuler)
    {
        return view(
            'ekstrakurikuler.edit',
            compact('ekstrakurikuler')
        );
    }

    /**
     * Mengupdate data.
     */
    public function update(
        Request $request,
        Ekstrakurikuler $ekstrakurikuler
    ) {
        $validated = $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'pembina'    => 'nullable|string|max:255',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Jika upload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $ekstrakurikuler->gambar &&
                File::exists(
                    public_path('images/' . $ekstrakurikuler->gambar)
                )
            ) {
                File::delete(
                    public_path('images/' . $ekstrakurikuler->gambar)
                );
            }

            // Upload gambar baru
            $gambar = $request->file('gambar');

            $namaFile = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images'),
                $namaFile
            );

            $validated['gambar'] = $namaFile;
        }

        $ekstrakurikuler->update($validated);

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    /**
     * Menghapus data.
     */
    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        // Hapus gambar
        if (
            $ekstrakurikuler->gambar &&
            File::exists(
                public_path('images/' . $ekstrakurikuler->gambar)
            )
        ) {
            File::delete(
                public_path('images/' . $ekstrakurikuler->gambar)
            );
        }

        $ekstrakurikuler->delete();

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}