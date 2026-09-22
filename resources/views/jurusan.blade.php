@extends('layouts.app')

@section('title', 'Jurusan - SMK Negeri 1 Cijati')

@section('content')

<style>
    .jurusan-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .jurusan-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .jurusan-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .jurusan-header p {
        color: #666;
        font-size: 17px;
    }

    .jurusan-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    @media (max-width: 992px) {
        .jurusan-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .jurusan-grid {
            grid-template-columns: 1fr;
        }
    }

    .jurusan-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        display: flex;
        flex-direction: column;
    }

    .jurusan-card:hover {
        transform: translateY(-5px);
    }

    .jurusan-card img {
        width: 100%;
        height: 180px;
        object-fit: contain;
        padding: 20px;
        background: #f8f9fa;
    }

    .jurusan-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .jurusan-content h2 {
        color: #0d6efd;
        font-size: 20px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .jurusan-content p {
        color: #555;
        line-height: 1.6;
        font-size: 14px;
    }

    .kode {
        display: inline-block;
        margin-top: 10px;
        padding: 6px 12px;
        background: #0d6efd;
        color: white;
        border-radius: 20px;
        font-size: 13px;
        width: fit-content;
    }

    .btn-selengkapnya {
        margin-top: auto;
        padding-top: 15px;
        display: block;
        text-align: center;
        padding: 8px 0;
        background: #0d6efd;
        color: #fff !important;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }

    .btn-selengkapnya:hover {
        background: #0b5ed7;
    }
</style>


<div class="jurusan-container">

    <!-- HEADER -->

    <div class="jurusan-header">

        <h1>Jurusan</h1>

        <p>
            Program keahlian yang tersedia di SMK Negeri 1 Cijati
        </p>

    </div>


    <!-- JURUSAN -->

    <div class="jurusan-grid"><!-- PPLG -->
<div class="jurusan-card">

    <img
        src="{{ asset('images/pplg.png') }}"
        alt="PPLG"
    >

    <div class="jurusan-content">

        <h2>Pengembangan Perangkat Lunak dan Gim</h2>

        <p>
            Jurusan yang mempelajari pembuatan perangkat lunak,
            aplikasi, website, serta pengembangan gim.
        </p>

        <span class="kode">
            PPLG
        </span>

        <a href="#" class="btn-selengkapnya">
            Selengkapnya
        </a>

    </div>

</div>


<!-- APHP -->
<div class="jurusan-card">

    <img
        src="{{ asset('images/aphp.png') }}"
        alt="APHP"
    >

    <div class="jurusan-content">

        <h2>Agribisnis Pengolahan Hasil Pertanian</h2>

        <p>
            Jurusan yang mempelajari pengolahan hasil pertanian
            menjadi berbagai produk yang memiliki nilai tambah.
        </p>

        <span class="kode">
            APHP
        </span>

        <a href="#" class="btn-selengkapnya">
            Selengkapnya
        </a>

    </div>

</div>


<!-- ATU -->
<div class="jurusan-card">

    <img
        src="{{ asset('images/atu.png') }}"
        alt="TKRO"
    >

    <div class="jurusan-content">

        <h2>Teknik Kendaraan Ringan Otomotif</h2>

        <p>
            Jurusan yang mempelajari budidaya tanaman,
            pengelolaan hasil tanaman, serta kegiatan agribisnis.
        </p>

        <span class="kode">
            TKRO
        </span>

        <a href="#" class="btn-selengkapnya">
            Selengkapnya
        </a>

    </div>

</div>


<!-- APAT -->
<div class="jurusan-card">

    <img
        src="{{ asset('images/apat.png') }}"
        alt="BDP"
    >

    <div class="jurusan-content">

        <h2>Bisnis Daring dan Pemasaran</h2>

        <p>
            Jurusan yang mempelajari budidaya ikan air tawar,
            pengelolaan hasil perikanan, dan kegiatan agribisnis.
        </p>

        <span class="kode">
            BDP
        </span>

        <a href="#" class="btn-selengkapnya">
            Selengkapnya
        </a>

    </div>

</div>

</div>

</div>

@endsection