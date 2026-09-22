@extends('layouts.app')

@section('title', 'Beranda - SMKN 1 Cijati')

@section('content')

<style>
    /* =========================
       HERO / BERANDA UTAMA
    ========================= */

    .hero {
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 60px 20px;
        position: relative;
        overflow: hidden;

        background:
            linear-gradient(
                to bottom,
                rgba(20, 10, 30, 0.35) 0%,
                rgba(2, 32, 44, 0.904) 60%,
                rgba(139, 141, 143, 0.637) 100%
            ),
            url('{{ asset('images/Gerbang.jpeg') }}')
            center center / cover no-repeat;

        color: white;
    }

    .hero-content {
        max-width: 800px;
        animation: fadeInUp 1s ease;
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(6px);
        padding: 6px 18px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 15px;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        font-weight: 800;
    }

    .hero p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 30px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    /* TOMBOL */

    .btn {
        display: inline-block;
        padding: 14px 30px;
        background: white;
        color: #4770f7;
        text-decoration: none;
        border-radius: 30px;
        font-weight: bold;
        margin: 5px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn:hover {
        opacity: 1;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
    }

    .btn.btn-outline {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    .btn.btn-outline:hover {
        background: white;
        color: #da1e8c;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .scroll-indicator {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 28px;
        animation: bounce 2s infinite;
        z-index: 2;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translate(-50%, 0); }
        40% { transform: translate(-50%, -10px); }
        60% { transform: translate(-50%, -5px); }
    }


    /* =========================
       TENTANG SEKOLAH
    ========================= */

    .welcome {
        width: 90%;
        max-width: 1100px;
        margin: 70px auto;
        text-align: center;
    }

    .welcome h2 {
        font-size: 32px;
        margin-bottom: 15px;
        color: #1a1a1a;
        position: relative;
        display: inline-block;
    }

    .welcome h2::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #284be4, #1342c4);
        border-radius: 4px;
        margin: 12px auto 0;
    }

    .welcome p {
        color: #4a4a4a;
        line-height: 1.8;
        font-size: 17px;
        margin-top: 20px;
    }


    /* =========================
       STATISTIK
    ========================= */

    .stats-grid {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto 60px;

        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .stat-card {
        background: white;
        padding: 30px 20px;
        text-align: center;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(219, 24, 132, 0.2);
    }

    .stat-card .icon {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .stat-card h2 {
        color: #044dd4d0;
        font-size: 36px;
        margin: 5px 0;
    }

    .stat-card p {
        color: #666;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
    }


    /* =========================
       INFORMASI
    ========================= */

    .info-grid {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto 60px;

        display: grid;
        grid-template-columns:
            repeat(auto-fit, minmax(250px, 1fr));

        gap: 25px;
    }

    .info-card {
        background: white;
        padding: 30px;
        text-align: center;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .info-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(219, 24, 132, 0.15);
    }

    .info-card h3 {
        color: #13020c;
        margin-bottom: 10px;
    }

    .info-card p {
        color: #666;
        line-height: 1.6;
    }

    .info-card a {
        color: #14030d;
        text-decoration: none;
        font-weight: bold;
    }

    .info-card a:hover {
        text-decoration: underline;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .hero {
            min-height: 70vh;
        }

        .hero h1 {
            font-size: 36px;
        }

        .hero p {
            font-size: 17px;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }


    @media (max-width: 480px) {

        .hero {
            padding: 40px 15px;
        }

        .hero h1 {
            font-size: 30px;
        }

        .hero p {
            font-size: 16px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-content">

        <span class="hero-badge">
            🎓 Sekolah Menengah Kejuruan Negeri
        </span>

        <h1>
            Selamat Datang di SMK Negeri 1 Cijati
        </h1>

        <p>
            Website resmi SMK Negeri 1 Cijati yang menyediakan
            informasi mengenai profil sekolah, jurusan,
            ekstrakurikuler, galeri kegiatan sekolah.
        </p>

        <a href="/profil" class="btn">
            Lihat Profil
        </a>

        <a href="/jurusan" class="btn btn-outline">
            Lihat Jurusan
        </a>

    </div>

    <div class="scroll-indicator">
        ↓
    </div>

</section>


<!-- =========================
     TENTANG SEKOLAH
========================= -->

<section class="welcome">

    <h2>
        Tentang SMK Negeri 1 Cijati
    </h2>

    <p>
        SMK Negeri 1 Cijati merupakan sekolah menengah kejuruan
        yang berkomitmen memberikan pendidikan dan keterampilan
        kepada peserta didik agar siap menghadapi dunia kerja,
        melanjutkan pendidikan, maupun berwirausaha.
    </p>

</section>


<!-- =========================
     STATISTIK SEKOLAH
========================= -->

<section class="stats-grid">

    <div class="stat-card">

        <div class="icon">
            👨‍🎓
        </div>

        <h2>
            720
        </h2>

        <p>
            Jumlah Siswa
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            👨‍🏫
        </div>

        <h2>
            52
        </h2>

        <p>
            Jumlah Guru
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            🎓
        </div>

        <h2>
            4
        </h2>

        <p>
            Jumlah Jurusan
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            🏆
        </div>

        <h2>
            10
        </h2>

        <p>
            Jumlah Eskul
        </p>

    </div>

</section>


<!-- =========================
     INFORMASI
========================= -->

<section class="info-grid">


    <!-- JURUSAN -->

    <div class="info-card">

        <h3>
            🎓 Jurusan
        </h3>

        <p>
            Temukan berbagai program keahlian yang tersedia
            di SMK Negeri 1 Cijati.
        </p>

        <a href="/jurusan">
            Lihat Jurusan
        </a>

    </div>


    <!-- EKSTRAKURIKULER -->

    <div class="info-card">

        <h3>
            🏆 Ekstrakurikuler
        </h3>

        <p>
            Berbagai kegiatan ekstrakurikuler untuk
            mengembangkan bakat dan minat siswa.
        </p>

        <a href="/ekstrakurikuler">
            Lihat Eskul
        </a>

    </div>


    <!-- GALERI -->

    <div class="info-card">

        <h3>
            📸 Galeri
        </h3>

        <p>
            Lihat dokumentasi berbagai kegiatan
            siswa dan sekolah.
        </p>

        <a href="/galeri">
            Lihat Galeri
        </a>

    </div>


</section>

@endsection