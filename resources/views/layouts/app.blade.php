<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (config('app.env') == 'production' && file_exists(public_path('build/manifest.json')))
        <link href="{{ public_path('build/assets/app-CeaRPtlx.css') }}" rel="preconnect">
        <script src="{{ public_path('build/assets/app-eMHK6VFw.js') }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack('styles')
    @stack('scripts')
</head>

<body>
    @yield('content')
    @include('layouts.partials.footer')
</body>

</html>
