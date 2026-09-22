@extends('layouts.app')

@section('title', 'Galeri - SMKN 1 Cijati')

@section('content')

<style>
    .galeri-container {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto;
    }

    .galeri-container h1 {
        text-align: center;
        margin-bottom: 10px;
    }

    .galeri-container .subtitle {
        text-align: center;
        color: #666;
        margin-bottom: 35px;
    }

    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .galeri-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .galeri-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .galeri-content {
        padding: 20px;
    }

    .galeri-content h3 {
        margin-top: 0;
        margin-bottom: 10px;
    }

    .galeri-content p {
        color: #666;
        line-height: 1.6;
    }
</style>

<div class="galeri-container">

    <h1>Galeri Kegiatan</h1>

    <p class="subtitle">
        Dokumentasi kegiatan SMK Negeri 1 Cijati
    </p>

    <div class="galeri-grid">

        @foreach ($galeris as $galeri)

            <div class="galeri-card">

                <img
                    src="{{ asset('images/' . $galeri->gambar) }}"
                    alt="{{ $galeri->judul }}"
                >

                <div class="galeri-content">

                    <h3>{{ $galeri->judul }}</h3>

                    <p>{{ $galeri->deskripsi }}</p>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection