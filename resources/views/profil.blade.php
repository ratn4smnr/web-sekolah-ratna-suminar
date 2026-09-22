@extends('layouts.app')

@section('title', 'Profil - SMK Negeri 1 Cijati')

@section('content')

<style>
    .profil-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .profil-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .profil-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .profil-header p {
        color: #666;
        font-size: 17px;
    }

    .profil-card {
        background: white;
        padding: 35px;
        border-radius: 12px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .profil-card h2 {
        color: #0d6efd;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .profil-card p {
        color: #555;
        line-height: 1.8;
        font-size: 16px;
    }

    .visi-misi {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .visi,
    .misi {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .visi h2,
    .misi h2 {
        color: #0d6efd;
        margin-top: 0;
    }

    .visi p,
    .misi li {
        color: #555;
        line-height: 1.8;
    }

    .misi ol {
        padding-left: 25px;
    }
</style>


<div class="profil-container">

    <!-- HEADER -->

    <div class="profil-header">

        <h1>Profil SMK Negeri 1 Cijati</h1>

        <p>
            Mengenal lebih dekat SMK Negeri 1 Cijati
        </p>

    </div>


    <!-- TENTANG SEKOLAH -->

    <div class="profil-card">

        <h2>Tentang Sekolah</h2>

        <p>
            SMK Negeri 1 Cijati merupakan Sekolah Menengah Kejuruan
            yang memberikan pendidikan dan keterampilan kepada
            peserta didik sesuai dengan bidang keahlian yang
            dipelajari.
        </p>

        <p>
            Sekolah berupaya menciptakan lingkungan pendidikan
            yang mendukung perkembangan akademik, keterampilan,
            karakter, kreativitas, dan kemandirian siswa.
        </p>

    </div>


    <!-- VISI DAN MISI -->

    <div class="visi-misi">

        <div class="visi">

            <h2>Visi</h2>

            <p>
                Menjadi sekolah kejuruan yang menghasilkan
                lulusan kompeten, berkarakter, mandiri,
                dan siap menghadapi perkembangan dunia kerja
                serta teknologi.
            </p>

        </div>


        <div class="misi">

            <h2>Misi</h2>

            <ol>

                <li>
                    Menyelenggarakan pembelajaran mendalam yang berpusat
                    pada peserta didik untuk mengembangkan kompetensi secara optimal.
                </li>

                <li>
                    Menumbuhkan karakter religius, energik, 
                    dan nasionalis dalam kehidupan sehari-hari melalui penguatan
                    nilai-nilai pancawaluya.
                </li>

                <li>
                    Membentuk karakter siswa yang disiplin,
                    bertanggung jawab, dan mandiri.
                </li>

                <li>
                    Mengembangkan lulusan yang kompeten dan berdaya saing 
                    sesuai dengan kebutuhan dunia kerja dan perkembangan zaman.
                </li>

                <li>
                    Menanamkan jiwa kewirausahaan (entrepreneurship) melalui kegiatan
                    pembelajaran dan praktik nyata.
                </li>

                </li>
                    Menumbuhkan integritas, etos kerja, dan tanggung jawab melalui pembiasaan,
                    keteladanan, dan budaya sekolah yang positif.
                </li>

                </li>
                    Menguatkan kolaborasi dan kemitraan aktif dengan dunia kerja dan industri
                    untuk meningkatkan relevansi dan kualitas lulusan.
                </li>

            </ol>

        </div>

    </div>


    <!-- INFORMASI -->

    <div class="profil-card">

        <h2>Tujuan Pendidikan</h2>

        <p>
            SMK Negeri 1 Cijati berusaha memberikan bekal pengetahuan,
            keterampilan, dan pengalaman kepada siswa sehingga
            mampu menjadi lulusan yang memiliki kompetensi sesuai
            bidang keahlian serta mampu beradaptasi dengan
            perkembangan zaman.
        </p>

    </div>

</div>

@endsection