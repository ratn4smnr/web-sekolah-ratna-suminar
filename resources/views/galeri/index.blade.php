@extends('layouts.app')

@section('title', 'Galeri - SMK Negeri 1 Cijati')

@section('content')

<style>
    .galeri-page {
        padding: 50px 30px;
        max-width: 1400px;
        margin: auto;
    }

    .galeri-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .galeri-title h1 {
        font-size: 36px;
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .galeri-title p {
        color: #666;
        font-size: 16px;
    }

    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .galeri-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .galeri-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
    }

    .galeri-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        display: block;
    }

    .galeri-content {
        padding: 18px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .galeri-content h2 {
        margin: 0 0 10px;
        color: #0d6efd;
        font-size: 20px;
    }

    .galeri-content p {
        margin: 0;
        color: #555;
        font-size: 14px;
        line-height: 1.6;
        flex-grow: 1;
    }

    /* AKSI / TOMBOL */

    .galeri-actions {
        display: flex;
        gap: 8px;
        margin-top: 15px;
        flex-wrap: wrap;
    }

    .btn-aksi {
        flex: 1;
        text-align: center;
        padding: 8px 10px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: opacity 0.2s ease;
    }

    .btn-aksi:hover {
        opacity: 0.85;
    }

    .btn-detail {
        background: #0d6efd;
        color: #fff;
    }

    .btn-edit {
        background: #ffc107;
        color: #1a1a1a;
    }

    .btn-delete {
        background: #dc3545;
        color: #fff;
    }

    .form-delete {
        flex: 1;
        margin: 0;
    }

    .form-delete .btn-aksi {
        width: 100%;
    }

    .tidak-ada {
        text-align: center;
        padding: 40px;
        background: #fff;
        border-radius: 15px;
        color: #666;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .alert-success {
        background: #d1e7dd;
        color: #0f5132;
        padding: 14px 20px;
        border-radius: 10px;
        margin-bottom: 25px;
        text-align: center;
        font-weight: 600;
    }

    .tambah-wrapper {
        text-align: right;
        margin-bottom: 20px;
    }

    .btn-tambah {
        display: inline-block;
        background: #0d6efd;
        color: #fff;
        padding: 10px 22px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
    }

    .btn-tambah:hover {
        opacity: 0.85;
    }

    /* Laptop */
    @media (max-width: 1200px) {
        .galeri-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* Tablet */
    @media (max-width: 992px) {
        .galeri-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Tablet kecil */
    @media (max-width: 768px) {
        .galeri-page {
            padding: 40px 20px;
        }

        .galeri-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .galeri-title h1 {
            font-size: 30px;
        }
    }

    /* HP */
    @media (max-width: 576px) {
        .galeri-grid {
            grid-template-columns: 1fr;
        }

        .galeri-title h1 {
            font-size: 28px;
        }

        .galeri-card img {
            height: 200px;
        }
    }
</style>

<div class="galeri-page">

    <div class="galeri-title">
        <h1>Galeri</h1>

        <p>
            Dokumentasi kegiatan SMK Negeri 1 Cijati
        </p>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @auth
        <div class="tambah-wrapper">
            <a href="{{ route('galeri.create') }}" class="btn-tambah">
                + Tambah Galeri
            </a>
        </div>
    @endauth

    @if($galeris->count() > 0)

        <div class="galeri-grid">

            @foreach($galeris as $galeri)

                <div class="galeri-card">

                    <img
                        src="{{ asset('storage/' . $galeri->gambar) }}"
                        alt="{{ $galeri->judul }}"
                    >

                    <div class="galeri-content">

                        <h2>
                            {{ $galeri->judul }}
                        </h2>

                        @if($galeri->deskripsi)
                            <p>
                                {{ $galeri->deskripsi }}
                            </p>
                        @endif

                        <div class="galeri-actions">

                            <a href="{{ route('galeri.show', $galeri->id) }}" class="btn-aksi btn-detail">
                                Lihat Detail
                            </a>

                            @auth
                                <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn-aksi btn-edit">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('galeri.destroy', $galeri->id) }}"
                                    method="POST"
                                    class="form-delete"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?');"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-aksi btn-delete">
                                        Delete
                                    </button>
                                </form>
                            @endauth

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="tidak-ada">
            <h2>Data galeri belum tersedia.</h2>
        </div>

    @endif

</div>

@endsection