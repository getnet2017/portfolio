<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body class="bg-gray-100 text-gray-800"
    style="margin:0; padding:0; display:flex; flex-direction:column; min-height:100vh;">

    <nav class="p-4 bg-white shadow flex justify-between sticky top-0 z-50">
        <div class="nav-left">
            <a href="#imageModal">
                <img src="{{ asset('image/photo.jpg') }}" alt="My Photo" class="profile-image">
            </a>
            <a href="/" class="font-bold">PERSONAL INFORMATION</a>
        </div>

        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact.show') }}">Contact</a>
        </div>
    </nav>

    <main class="p-8" style="flex: 1;">
        @yield('content')
    </main>

    <div id="imageModal">
        <a href="#" style="position:sticky; top:1rem; right:1rem; font-size:2rem; color:white;">&times;</a>
        <img id="modalImage" src="{{ asset('image/photo.jpg') }}" alt="Full Photo">
    </div>

    <!-- Sticky Footer Always at Bottom -->
    <footer class="text-sm text-gray-700 py-4 border-t"
        style="background-color:rgb(119, 179, 240); text-align: center; width: 100%;">
        <p>&copy; {{ date('Y') }} Getnet Amare All rights reserved.</p>
    </footer>

</body>

</html>