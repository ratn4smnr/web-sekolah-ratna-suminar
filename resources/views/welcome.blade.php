<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMKN 1 Cijati</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f5f7f6;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 7%;

            background-color: #198754;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-menu a:hover {
            color: #d1e7dd;
        }


        /* ================= HERO ================= */

        .hero {
            min-height: 600px;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 50px 20px;

            color: white;

            background:
                linear-gradient(
                    rgba(25, 135, 84, 0.85),
                    rgba(20, 108, 67, 0.9)
                ),
                url('{{ asset('images/sekolah.jpg') }}');

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .hero h2 {
            font-size: 25px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;

            padding: 13px 25px;

            background-color: white;
            color: #198754;

            text-decoration: none;

            border-radius: 7px;

            font-weight: bold;
        }

        .btn:hover {
            background-color: #d1e7dd;
        }


        /* ================= SECTION ================= */

        .section {
            padding: 70px 7%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            color: #198754;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }


        /* ================= PROFIL ================= */

        .profil {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .profil img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
        }

        .profil-content h2 {
            color: #198754;
            margin-bottom: 20px;
        }

        .profil-content p {
            line-height: 1.8;
            color: #555;
        }


        /* ================= CARD ================= */

        .card-container {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 25px;
        }

        .card {
            background-color: white;

            border-radius: 12px;

            overflow: hidden;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, 0.1);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            color: #198754;
            margin-bottom: 10px;
        }

        .card-content p {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }


        /* ================= GALERI ================= */

        .galeri-container {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .galeri-item {
            overflow: hidden;
            border-radius: 12px;
            height: 220px;
            background-color: #ddd;
        }

        .galeri-item img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: 0.3s;
        }

        .galeri-item img:hover {
            transform: scale(1.08);
        }


        /* ================= BUTTON SECTION ================= */

        .center {
            text-align: center;
            margin-top: 35px;
        }

        .btn-green {
            display: inline-block;

            padding: 12px 22px;

            background-color: #198754;
            color: white;

            text-decoration: none;

            border-radius: 6px;
        }

        .btn-green:hover {
            background-color: #146c43;
        }


        /* ================= FOOTER ================= */

        .footer {
            background-color: #146c43;

            color: white;

            text-align: center;

            padding: 40px 20px;
        }

        .footer h3 {
            margin-bottom: 10px;
        }

        .footer p {
            margin-top: 8px;
            color: #d1e7dd;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 1000px) {

            .card-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .profil {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 700px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .hero h2 {
                font-size: 20px;
            }

            .hero p {
                font-size: 15px;
            }

            .card-container {
                grid-template-columns: 1fr;
            }

            .galeri-container {
                grid-template-columns: 1fr;
            }

        }

    </style>
</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="logo">
            SMKN 1 Cijati
        </div>

        <ul class="nav-menu">

            <li>
                <a href="/">Beranda</a>
            </li>

            <li>
                <a href="#profil">Profil</a>
            </li>

            <li>
                <a href="{{ url('/jurusan') }}">
                    Jurusan
                </a>
            </li>

            <li>
                <a href="{{ url('/eskul') }}">
                    Ekstrakurikuler
                </a>
            </li>

            <li>
                <a href="{{ url('/galeri') }}">
                    Galeri
                </a>
            </li>

        </ul>

    </nav>


    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-content">

            <h1>SMKN 1 Cijati</h1>

            <h2>
                Sekolah Menengah Kejuruan
            </h2>

            <p>
                Mencetak generasi muda yang kompeten,
                berkarakter, kreatif, dan siap menghadapi
                dunia kerja serta perkembangan teknologi.
            </p>

            <a href="#profil" class="btn">
                Selengkapnya
            </a>

        </div>

    </section>


    <!-- ================= PROFIL ================= -->

    <section class="section" id="profil">

        <div class="section-title">

            <h2>Profil Sekolah</h2>

            <p>
                Mengenal lebih dekat SMKN 1 Cijati
            </p>

        </div>


        <div class="profil">

            <img
                src="{{ asset('images/sekolah.jpg') }}"
                alt="SMKN 1 Cijati"
            >


            <div class="profil-content">

                <h2>
                    SMKN 1 Cijati
                </h2>

                <p>
                    SMKN 1 Cijati merupakan sekolah menengah
                    kejuruan yang memberikan pendidikan dan
                    keterampilan kepada peserta didik untuk
                    mempersiapkan diri menghadapi dunia kerja,
                    dunia industri, maupun melanjutkan pendidikan
                    ke jenjang yang lebih tinggi.
                </p>

                <br>

                <p>
                    Sekolah terus berupaya meningkatkan kualitas
                    pendidikan melalui pengembangan kompetensi,
                    karakter, kreativitas, dan keterampilan siswa.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= JURUSAN ================= -->

    <section class="section">

        <div class="section-title">

            <h2>Jurusan</h2>

            <p>
                Program keahlian yang tersedia di SMKN 1 Cijati
            </p>

        </div>


        <div class="card-container">


            <!-- RPL -->

            <div class="card">

                <img
                    src="{{ asset('images/rpl.jpg') }}"
                    alt="RPL"
                >

                <div class="card-content">

                    <h3>
                        RPL
                    </h3>

                    <p>
                        Rekayasa Perangkat Lunak mempelajari
                        pemrograman, website, aplikasi,
                        database, dan teknologi perangkat lunak.
                    </p>

                </div>

            </div>


            <!-- TKR -->

            <div class="card">

                <img
                    src="{{ asset('images/tkr.jpg') }}"
                    alt="TKR"
                >

                <div class="card-content">

                    <h3>
                        TKR
                    </h3>

                    <p>
                        Teknik Kendaraan Ringan mempelajari
                        perawatan dan perbaikan kendaraan ringan.
                    </p>

                </div>

            </div>


            <!-- BD -->

            <div class="card">

                <img
                    src="{{ asset('images/bd.jpg') }}"
                    alt="BD"
                >

                <div class="card-content">

                    <h3>
                        BD
                    </h3>

                    <p>
                        Bisnis Daring mempelajari bisnis,
                        pemasaran, perdagangan online,
                        dan strategi pemasaran digital.
                    </p>

                </div>

            </div>


            <!-- APHP -->

            <div class="card">

                <img
                    src="{{ asset('images/aphp.jpg') }}"
                    alt="APHP"
                >

                <div class="card-content">

                    <h3>
                        APHP
                    </h3>

                    <p>
                        Agribisnis Pengolahan Hasil Pertanian
                        mempelajari pengolahan hasil pertanian
                        menjadi produk bernilai ekonomi.
                    </p>

                </div>

            </div>

        </div>


        <div class="center">

            <a href="{{ url('/jurusan') }}" class="btn-green">
                Lihat Semua Jurusan
            </a>

        </div>

    </section>


    <!-- ================= EKSTRAKURIKULER ================= -->

    <section class="section">

        <div class="section-title">

            <h2>Ekstrakurikuler</h2>

            <p>
                Kegiatan untuk mengembangkan bakat dan minat siswa
            </p>

        </div>


        <div class="card-container">


            <div class="card">

                <img
                    src="{{ asset('images/pramuka.jpg') }}"
                    alt="Pramuka"
                >

                <div class="card-content">

                    <h3>Pramuka</h3>

                    <p>
                        Melatih kedisiplinan, kemandirian,
                        kepemimpinan, dan kerja sama.
                    </p>

                </div>

            </div>


            <div class="card">

                <img
                    src="{{ asset('images/paskibra.jpg') }}"
                    alt="Paskibra"
                >

                <div class="card-content">

                    <h3>Paskibra</h3>

                    <p>
                        Melatih kedisiplinan, ketangkasan,
                        dan nasionalisme siswa.
                    </p>

                </div>

            </div>


            <div class="card">

                <img
                    src="{{ asset('images/futsal.jpg') }}"
                    alt="Futsal"
                >

                <div class="card-content">

                    <h3>Futsal</h3>

                    <p>
                        Mengembangkan kemampuan olahraga,
                        kerja sama, dan sportivitas.
                    </p>

                </div>

            </div>


            <div class="card">

                <img
                    src="{{ asset('images/rohis.jpg') }}"
                    alt="Rohis"
                >

                <div class="card-content">

                    <h3>Rohis</h3>

                    <p>
                        Mengembangkan pengetahuan keagamaan
                        dan membangun karakter siswa.
                    </p>

                </div>

            </div>

        </div>


        <div class="center">

            <a href="{{ url('/eskul') }}" class="btn-green">
                Lihat Semua Ekstrakurikuler
            </a>

        </div>

    </section>


    <!-- ================= GALERI ================= -->

    <section class="section">

        <div class="section-title">

            <h2>Galeri</h2>

            <p>
                Dokumentasi kegiatan SMKN 1 Cijati
            </p>

        </div>


        <div class="galeri-container">

            <div class="galeri-item">

                <img
                    src="{{ asset('images/upacara.jpg') }}"
                    alt="Upacara"
                >

            </div>


            <div class="galeri-item">

                <img
                    src="{{ asset('images/pramuka.jpg') }}"
                    alt="Pramuka"
                >

            </div>


            <div class="galeri-item">

                <img
                    src="{{ asset('images/paskibra.jpg') }}"
                    alt="Paskibra"
                >

            </div>


            <div class="galeri-item">

                <img
                    src="{{ asset('images/pmr.jpg') }}"
                    alt="PMR"
                >

            </div>


            <div class="galeri-item">

                <img
                    src="{{ asset('images/futsal.jpg') }}"
                    alt="Futsal"
                >

            </div>


            <div class="galeri-item">

                <img
                    src="{{ asset('images/rohis.jpg') }}"
                    alt="Rohis"
                >

            </div>

        </div>


        <div class="center">

            <a href="{{ url('/galeri') }}" class="btn-green">
                Lihat Semua Galeri
            </a>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <h3>
            SMKN 1 Cijati
        </h3>

        <p>
            Sekolah Menengah Kejuruan
        </p>

        <p>
            &copy; {{ date('Y') }} SMKN 1 Cijati.
            All Rights Reserved.
        </p>

    </footer>


</body>

</html>