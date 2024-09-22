<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/font.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('style')
    <style>
        @font-face {
            font-family: 'THICCCBOI-reg';
            src: url('../fonts/Webfont/THICCCBOI-Regular.woff2') format('woff2'),
                url('../fonts/TTF/THICCCBOI-Regular.ttf') format('truetype');
        }

        body {
            font-family: 'THICCCBOI-reg';
        }
    </style>

    <title>Socialpulse</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <!-- CDNs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="antialiased bg-black">
    <main class="h-full relative">
        @include('includes.header')

        <div class="background-gradient hidden lg:block"></div>

        @yield('content')

        @if (!request()->routeIs('home'))
            @include('includes.footer')
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="{{ asset('scripts/nav.js') }}"></script>
    @yield('script')
</body>

</html>
