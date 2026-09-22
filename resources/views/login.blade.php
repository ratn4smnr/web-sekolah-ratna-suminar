<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMK Negeri 1 Cijati</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-blue-700 mb-2">
            SMK Negeri 1 Cijati
        </h1>
        <p class="text-center text-gray-500 mb-6">Login Admin</p>

        {{-- Tampilkan error kalau login gagal --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required autofocus>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <button type="submit"
                    class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-800 transition">
                Login
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('home') }}"