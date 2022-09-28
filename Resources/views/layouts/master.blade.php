<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('Favicon.png') }}" />

  <title> @yield('title') @hasSection('title') | @endif {{ config('app.name', 'Figuil') }}</title>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Scripts -->
  @routes
  @viteReactRefresh
  @vite('resources/js/main.jsx')
</head>
<body class="font-sans ">
    <x-showcase::navbar />

    {{-- <div id="root"></div> --}}
    <main>
        @yield('content')
    </main>

    <x-showcase::footer />

</body>
</html>
