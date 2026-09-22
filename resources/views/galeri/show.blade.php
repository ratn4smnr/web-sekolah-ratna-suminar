@extends('layouts.app')

@section('title', $galeri->judul . ' - Galeri SMK Negeri 1 Cijati')

@section('content')

<style>
    .detail-page {
        max-width: 900px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .detail-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
    }

    .detail-card img {
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        display: block;
    }

    .detail-content {
        padding: 30px;
    }

    .detail-kategori {
        display: inline-block;
        background: #e7f1ff;
        color: #0d6efd;
        padding: 5px 14px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .detail-content h1 {
        color: #1a1a1a;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .detail-content .tanggal {
        color: #888;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .detail-content p {
        color: #555;
        line-height: 1.8;
        font-size: 16px;
    }

    .back-wrapper {
        margin-bottom: 20px;
    }

    .btn-kembali {
        display: inline-block;
        color: #0d6efd;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
    }

    .btn-kembali:hover {
        text-decoration: underline;
    }

    .detail-actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-aksi {
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .btn-edit {
        background: #ffc107;
        color: #1a1a1a;
    }

    .btn-delete {
        background: #dc3545;
        color: #fff;
    }
</style>

<div class="detail-page">

    <div class="back-wrapper">
        <a href="{{ route('galeri.index') }}" class="btn-kembali">
            &larr; Kembali ke Galeri
        </a>
    </div>

    <div class="detail-card">

        <img
            src="{{ asset('storage/' . $galeri->gambar) }}"
            alt="{{ $galeri->judul }}"
        >

        <div class="detail-content">

            @if($galeri->kategori)
                <span class="detail-kategori">
                    {{ $galeri->kategori }}
                </span>
            @endif

            <h1>
                {{ $galeri->judul }}
            </h1>

            <div class="tanggal">
                Ditambahkan pada {{ $galeri->created_at->translatedFormat('d F Y') }}
            </div>

            @if($galeri->deskripsi)
                <p>
                    {{ $galeri->deskripsi }}
                </p>
            @endif

            @auth
                <div class="detail-actions">

                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn-aksi btn-edit">
                        Edit
                    </a>

                    <form
                        action="{{ route('galeri.destroy', $galeri->id) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?');"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn-aksi btn-delete">
                            Delete
                        </button>
                    </form>

                </div>
            @endauth

        </div>

    </div>

</div>

@endsection