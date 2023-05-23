<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @yield('css')
</head>

<body>
    {{-- header section start here --}}
    @include('layouts.user.partial.header')
    {{-- header section end here --}}


    {{-- container start here --}}
    @yield('content')
    {{-- contianer end here --}}

    {{-- footer start here --}}
    @include('layouts.user.partial.footer')
    {{-- footer end here --}}

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
