<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SMKN 1 Cijati')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }

        nav {
            background: #0d6efd;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }
         .btn-login {
        background: white;
        color: #0d6efd;
        padding: 8px 16px;
        border-radius: 6px;
        margin-left: 20px;
        font-weight: bold;
    }

    .btn-login:hover {
        background: #f0f0f0;
        text-decoration: none;
    }
        main {
            min-height: 80vh;
        }

        footer {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            SMK Negeri 1 Cijati
        </div>

        <div>
            <a href="/">Beranda</a>
            <a href="/profil">Profil</a>
            <a href="/jurusan">Jurusan</a>
            <a href="/ekstrakurikuler">Eskul</a>
            <a href="/galeri">Galeri</a>
            <a href="/guru">Guru</a>
            <a href="{{ route('login') }}" class="btn-login">Login Admin</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} SMKN 1 Cijati</p>
    </footer>

</body>
</html>