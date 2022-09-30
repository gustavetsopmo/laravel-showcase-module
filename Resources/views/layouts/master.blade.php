<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('Favicon.png') }}" />

    <title> @yield('title') @hasSection('title')
            {{ ' | ' }}
        @endif {{ config('app.name', 'Figuil') }}</title>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>

    {{-- @vite('../../../resources/js/main.jsx') --}}

    @vite(['Modules/Showcase/Resources/assets/js/app.js', 'Modules/Showcase/Resources/assets/css/app.css'])
    {{-- <script src="{{ asset('js/showcase.js') }}"></script> --}}
</head>

<body class="font-sans ">
    <x-showcase::navbar />

    {{-- <div id="root"></div> --}}
    <main>
        @yield('content')
    </main>

    <x-showcase::footer />

    <script>
        var lazyLoadInstance = new LazyLoad({
            elements_selector: '.lazy',
        });
    </script>
</body>

</html>
