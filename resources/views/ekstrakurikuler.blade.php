@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SMK Negeri 1 Cijati')

@section('content')

<style>
    .ekskul-page {
        padding: 50px 30px;
        max-width: 1400px;
        margin: auto;
    }

    .ekskul-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .ekskul-title h1 {
        font-size: 36px;
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .ekskul-title p {
        color: #666;
        font-size: 16px;
    }

    .ekskul-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .ekskul-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        height: 100%;
    }

    .ekskul-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
    }

    .ekskul-card img {
        width: 100%;
        height: 180px;
        object-fit: contain;
        display: block;
        background: #f8f9fa;
        padding: 10px;
    }

    .ekskul-content {
        padding: 18px;
    }

    .ekskul-content h2 {
        margin-top: 0;
        margin-bottom: 10px;
        color: #0d6efd;
        font-size: 21px;
        line-height: 1.3;
    }

    .ekskul-content p {
        color: #555;
        line-height: 1.6;
        margin: 0;
        font-size: 14px;
    }

    .tidak-ada {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 15px;
        color: #666;
    }

    @media (max-width: 1200px) {
        .ekskul-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 992px) {
        .ekskul-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .ekskul-page {
            padding: 40px 20px;
        }

        .ekskul-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .ekskul-title h1 {
            font-size: 30px;
        }

        .ekskul-card img {
            height: 160px;
        }
    }

    @media (max-width: 576px) {
        .ekskul-grid {
            grid-template-columns: 1fr;
        }

        .ekskul-title h1 {
            font-size: 28px;
        }

        .ekskul-card img {
            height: 200px;
        }
    }
</style>

<div class="ekskul-page">

    <div class="ekskul-title">

        <h1>Ekstrakurikuler</h1>

        <p>
            Berbagai kegiatan ekstrakurikuler yang tersedia
            di SMK Negeri 1 Cijati
        </p>

    </div>

    @if($ekstrakurikulers->count() > 0)

        <div class="ekskul-grid">

            @foreach($ekstrakurikulers as $eskul)

                <div class="ekskul-card">

                    {{-- GAMBAR --}}
                    @if($eskul->gambar)

                        <img
                            src="{{ asset('images/' . $eskul->gambar) }}"
                            alt="{{ $eskul->nama_eskul }}"
                            onerror="this.src='{{ asset('images/upacara.jpg') }}'"
                        >

                    @else

                        <img
                            src="{{ asset('images/upacara.jpg') }}"
                            alt="Gambar Ekstrakurikuler"
                        >

                    @endif

                    {{-- ISI --}}
                    <div class="ekskul-content">

                        <h2>
                            {{ $eskul->nama_eskul }}
                        </h2>

                        <p>
                            {{ $eskul->deskripsi }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="tidak-ada">

            <h2>
                Data ekstrakurikuler belum tersedia.
            </h2>

        </div>

    @endif

</div>

@endsection