@extends('layouts.app')

@section('title', 'Detail Guru')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                Detail Guru
            </h4>

        </div>

        <div class="card-body text-center">

            @if($guru->foto)

                <img
                    src="{{ asset('storage/' . $guru->foto) }}"
                    alt="{{ $guru->nama }}"
                    style="
                        width:200px;
                        height:250px;
                        object-fit:cover;
                        border-radius:15px;
                        margin-bottom:20px;
                    "
                >

            @else

                <div
                    style="
                        width:200px;
                        height:250px;
                        margin:0 auto 20px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        background:#f1f1f1;
                        border-radius:15px;
                    "
                >

                    <i
                        class="bi bi-person"
                        style="font-size:80px;color:#999;"
                    ></i>

                </div>

            @endif

            <h2>
                {{ $guru->nama }}
            </h2>

            <p>
                <strong>NIP:</strong>
                {{ $guru->nip ?? '-' }}
            </p>

            <p>
                <strong>Jabatan:</strong>
                {{ $guru->jabatan ?? '-' }}
            </p>

            <div class="mt-4">

                <a
                    href="{{ route('guru.edit', $guru->id) }}"
                    class="btn btn-warning"
                >
                    Edit
                </a>

                <a
                    href="{{ route('guru.index') }}"
                    class="btn btn-secondary"
                >
                    Kembali
                </a>

            </div>

        </div>

    </div>

</div>

@endsection
