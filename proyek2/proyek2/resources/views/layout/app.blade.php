<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="{{ route('main') }}">Halaman Utama</a></li>
            <li><a href="{{ route('schedule') }}">Penjadwalan</a></li>
            <li><a href="{{ route('notifications') }}">Notifikasi</a></li>
            <li><a href="{{ route('profile.edit') }}">Edit Profil</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
