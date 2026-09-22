@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Guru</h4>
        </div>

        <div class="card-body">

            @if($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form
                action="{{ route('guru.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Nama Guru
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama') }}"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        NIP
                    </label>

                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        value="{{ old('nip') }}"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Jabatan
                    </label>

                    <input
                        type="text"
                        name="jabatan"
                        class="form-control"
                        value="{{ old('jabatan') }}"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Foto Guru
                    </label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control"
                        accept="image/*"
                    >

                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan
                </button>

                <a
                    href="{{ route('guru.index') }}"
                    class="btn btn-secondary"
                >
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
