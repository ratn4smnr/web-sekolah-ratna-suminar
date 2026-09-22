@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-warning">

            <h4 class="mb-0">
                Edit Data Guru
            </h4>

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
                action="{{ route('guru.update', $guru->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Nama Guru
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $guru->nama) }}"
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
                        value="{{ old('nip', $guru->nip) }}"
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
                        value="{{ old('jabatan', $guru->jabatan) }}"
                    >

                </div>

                @if($guru->foto)

                    <div class="mb-3">

                        <label class="form-label">
                            Foto Saat Ini
                        </label>

                        <br>

                        <img
                            src="{{ asset('storage/' . $guru->foto) }}"
                            width="150"
                            style="
                                border-radius:10px;
                                margin-bottom:10px;
                            "
                        >

                    </div>

                @endif

                <div class="mb-3">

                    <label class="form-label">
                        Ganti Foto
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
                    class="btn btn-warning"
                >
                    Update
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
