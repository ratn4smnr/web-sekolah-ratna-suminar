<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #1e293b;
            color: #fff;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 10px;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #334155;
            color: #fff;
        }
        .sidebar .brand {
            font-size: 1.3rem;
            font-weight: bold;
            padding: 20px;
            border-bottom: 1px solid #334155;
        }
        .stat-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .stat-icon {
            font-size: 2rem;
            opacity: 0.8;
        }
        .topbar {
            background: #fff;
            padding: 15px 25px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar" style="width: 250px;">
        <div class="brand">
            <i class="bi bi-mortarboard-fill"></i> Sekolah Ratna Suminar
        </div>
        <nav class="mt-3">
            <a href="{{ url('/admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="#">
                <i class="bi bi-people-fill"></i> Data Siswa
            </a>
            <a href="#">
                <i class="bi bi-person-badge-fill"></i> Data Guru
            </a>
            <a href="#">
                <i class="bi bi-building"></i> Data Kelas
            </a>
            <a href="#">
                <i class="bi bi-diagram-3-fill"></i> Data Jurusan
            </a>
            <a href="{{ route('galeri.index') }}" class="{{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Data Galeri
            </a>
            <a href="#">
                <i class="bi bi-gear-fill"></i> Pengaturan
            </a>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Dashboard</h5>
            <div class="d-flex align-items-center gap-3">
                <span>Halo, {{ auth()->user()->name ?? 'Admin' }}</span>
                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="p-4">

            <h4 class="mb-4">Selamat datang di Dashboard Admin</h4>

            <!-- STATISTIK -->
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small">Total Siswa</div>
                                <div class="fs-4 fw-bold">{{ $totalSiswa }}</div>
                            </div>
                            <i class="bi bi-people-fill stat-icon text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small">Total Guru</div>
                                <div class="fs-4 fw-bold">{{ $totalGuru }}</div>
                            </div>
                            <i class="bi bi-person-badge-fill stat-icon text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small">Total Kelas</div>
                                <div class="fs-4 fw-bold">{{ $totalKelas }}</div>
                            </div>
                            <i class="bi bi-building stat-icon text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small">Total Jurusan</div>
                                <div class="fs-4 fw-bold">{{ $totalJurusan }}</div>
                            </div>
                            <i class="bi bi-diagram-3-fill stat-icon text-danger"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small">Total Galeri</div>
                                <div class="fs-4 fw-bold">{{ $totalGaleri ?? 0 }}</div>
                            </div>
                            <i class="bi bi-images stat-icon text-info"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>