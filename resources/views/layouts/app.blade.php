<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="{{ __('Fundora yra tarptautinė nekilnojamojo turto investicijų tarpininkavimo įmonės prekės ženklas,
                                                    kuri sujungia investuotojus su aukštos kokybės turto galimybėmis visame pasaulyje.') }}">
    <meta name="keywords" content="fundora, fundora global, fundoraglobal">

    @hasSection('pageTitle')
        <title>@yield('pageTitle') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <link rel="icon" href="{{ asset('images/logo.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (config('app.env') == 'production' && is_file('build/manifest.json'))
        <link href="{{ asset('build/assets/app-pEydJdkK.css') }}" rel="stylesheet">
        <script src="{{ asset('build/assets/app-eMHK6VFw.js') }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack('styles')
    @stack('scripts')
</head>

<body class="min-h-screen min-w-100 bg-secondary-color pt-20">
    @include('layouts.partials.header')
    @include('layouts.partials.session_messages')
    @yield('content')
    @include('layouts.partials.footer')
</body>

</html>
