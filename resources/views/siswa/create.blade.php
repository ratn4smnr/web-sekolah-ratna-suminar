<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">

    <h3 class="mb-4">Tambah Data Siswa</h3>

    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <select name="jurusan_id" class="form-select">
                <option value="">-- Pilih Jurusan --</option>
                @foreach($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="Contoh: X RPL 1">
        </div>

        <div class="mb-3">
            <label class="form-label">Angkatan</label>
            <input type="text" name="angkatan" class="form-control" placeholder="Contoh: 2026">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>

    </form>

</div>
</body>
</html>