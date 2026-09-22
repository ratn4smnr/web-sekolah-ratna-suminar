<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLoginForm()
{
    return view('login');
}

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek login
        if (Auth::attempt($credentials)) {

            // Regenerasi session
            $request->session()->regenerate();

            // Redirect ke halaman utama
            return redirect()->intended('/admin/dashboard');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
    public function dashboard()
{
    $totalSiswa = \App\Models\Siswa::count();
    $totalGuru = \App\Models\Guru::count();
    $totalJurusan = \App\Models\Jurusan::count();
    $totalKelas = \App\Models\Siswa::distinct('kelas')->count('kelas');
    $totalGaleri = \App\Models\Galeri::count();

    return view('admin.dashboard', compact('totalSiswa', 'totalGuru', 'totalJurusan', 'totalKelas', 'totalGaleri'));
}

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus session
        $request->session()->invalidate();

        // Buat token baru
        $request->session()->regenerateToken();

        return redirect('/');
    }
}