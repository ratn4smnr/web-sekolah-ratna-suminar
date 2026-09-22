@extends('layouts.app')

@section('title', 'Data Guru & Staf')

@section('content')

<style>
    .guru-page {
        padding: 40px 30px;
        max-width: 1400px;
        margin: auto;
    }

    .guru-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .guru-header h1 {
        margin: 0;
        color: #333;
        font-size: 30px;
    }

    .btn-tambah {
        background: #0d6efd;
        color: white;
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        border: none;
    }

    .btn-tambah:hover {
        background: #0b5ed7;
        color: white;
    }

    .alert-success {
        background: #d1e7dd;
        color: #0f5132;
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .guru-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .guru-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
        transition: 0.3s;
    }

    .guru-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
    }

    .guru-foto {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        background: #f1f1f1;
    }

    .guru-content {
        padding: 18px;
        text-align: center;
    }

    .guru-content h2 {
        margin: 0 0 8px;
        color: #0d6efd;
        font-size: 20px;
    }

    .guru-content p {
        margin: 5px 0;
        color: #666;
        font-size: 14px;
    }

    .guru-actions {
        display: flex;
        gap: 8px;
        justify-content: center;
        margin-top: 15px;
    }

    .btn-edit,
    .btn-detail,
    .btn-hapus {
        border: none;
        padding: 7px 12px;
        border-radius: 6px;
        color: white;
        text-decoration: none;
        font-size: 13px;
        cursor: pointer;
    }

    .btn-detail {
        background: #198754;
    }

    .btn-edit {
        background: #ffc107;
        color: #212529;
    }

    .btn-hapus {
        background: #dc3545;
    }

    .form-hapus {
        display: inline;
    }

    .tidak-ada {
        text-align: center;
        padding: 50px;
        background: white;
        border-radius: 15px;
        color: #666;
    }

    /* Laptop */
    @media (max-width: 1200px) {
        .guru-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* Tablet */
    @media (max-width: 992px) {
        .guru-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Tablet kecil */
    @media (max-width: 768px) {
        .guru-page {
            padding: 30px 20px;
        }

        .guru-header {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }

        .guru-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* HP */
    @media (max-width: 576px) {
        .guru-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="guru-page">

    <div class="guru-header">

        <h1>Data Guru & Staf</h1>

        <a href="{{ route('guru.create') }}" class="btn-tambah">
            <i class="bi bi-plus-lg"></i>
            Tambah Guru
        </a>

    </div>

    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif

    @if($gurus->count() > 0)

        <div class="guru-grid">

            @foreach($gurus as $guru)

                <div class="guru-card">

                    @if($guru->foto)

                        <img
                            src="{{ asset('storage/' . $guru->foto) }}"
                            alt="{{ $guru->nama }}"
                            class="guru-foto"
                        >

                    @else

                        <div
                            class="guru-foto"
                            style="
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                color:#999;
                            "
                        >
                            <i
                                class="bi bi-person"
                                style="font-size:70px;"
                            ></i>
                        </div>

                    @endif

                    <div class="guru-content">

                        <h2>
                            {{ $guru->nama }}
                        </h2>

                        <p>
                            <strong>NIP:</strong>
                            {{ $guru->nip ?? '-' }}
                        </p>

                        <p>
                            {{ $guru->jabatan ?? '-' }}
                        </p>

                        <div class="guru-actions">

                            <a
                                href="{{ route('guru.show', $guru->id) }}"
                                class="btn-detail"
                            >
                                Detail
                            </a>

                            <a
                                href="{{ route('guru.edit', $guru->id) }}"
                                class="btn-edit"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('guru.destroy', $guru->id) }}"
                                method="POST"
                                class="form-hapus"
                                onsubmit="return confirm('Yakin ingin menghapus data guru ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn-hapus"
                                >
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="tidak-ada">

            <i
                class="bi bi-people"
                style="font-size:60px;"
            ></i>

            <h2>Data guru belum tersedia.</h2>

            <p>
                Silakan tambahkan data guru menggunakan tombol
                <strong>Tambah Guru</strong>.
            </p>

        </div>

    @endif

</div>

@endsection
