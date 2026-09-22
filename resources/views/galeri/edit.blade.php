@extends('layouts.app')

@section('title', 'Edit Galeri - SMK Negeri 1 Cijati')

@section('content')

<style>
    .form-page {
        max-width: 600px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .form-card {
        background: #fff;
        border-radius: 15px;
        padding: 35px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
    }

    .form-card h1 {
        color: #0d6efd;
        font-size: 28px;
        margin-bottom: 25px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
        color: #333;
    }

    .form-group input[type="text"],
    .form-group input[type="file"] {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
    }

    .form-group img {
        margin-top: 10px;
        max-width: 100%;
        border-radius: 8px;
    }

    .error-text {
        color: #dc3545;
        font-size: 13px;
        margin-top: 5px;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-simpan {
        flex: 1;
        background: #0d6efd;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        font-size: 15px;
    }

    .btn-simpan:hover {
        opacity: 0.85;
    }

    .btn-batal {
        flex: 1;
        background: #e9ecef;
        color: #333;
        text-align: center;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        font-size: 15px;
    }

    .btn-batal:hover {
        opacity: 0.85;
    }
</style>

<div class="form-page">

    <div class="form-card">

        <h1>Edit Galeri</h1>

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input
                    type="text"
                    name="judul"
                    id="judul"
                    value="{{ old('judul', $galeri->judul) }}"
                >
                @error('judul')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input
                    type="text"
                    name="kategori"
                    id="kategori"
                    value="{{ old('kategori', $galeri->kategori) }}"
                >
                @error('kategori')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>

                @if($galeri->gambar)
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}">
                @endif

                <input
                    type="file"
                    name="gambar"
                    id="gambar"
                    accept="image/*"
                >

                <small style="color:#777;">
                    Biarkan kosong jika tidak ingin mengganti gambar.
                </small>

                @error('gambar')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-simpan">
                    Simpan Perubahan
                </button>

                <a href="{{ route('galeri.index') }}" class="btn-batal">
                    Batal
                </a>
            </div>

        </form>

    </div>

</div>

@endsection