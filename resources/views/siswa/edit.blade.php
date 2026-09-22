<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">

    <h3 class="mb-4">Edit Data Siswa</h3>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <select name="jurusan_id" class="form-select">
                <option value="">-- Pilih Jurusan --</option>
                @foreach($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}" {{ $siswa->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                        {{ $jurusan->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Angkatan</label>
            <input type="text" name="angkatan" class="form-control" value="{{ $siswa->angkatan }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>

    </form>

</div>
</body>
</html>