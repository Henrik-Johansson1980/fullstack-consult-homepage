<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? __('marketing.title') }}</title>
    <meta name="description" content="{{ $description ?? __('marketing.description') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? __('marketing.title') }}">
    <meta property="og:description" content="{{ $description ?? __('marketing.description') }}">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? __('marketing.title') }}">
    <meta name="twitter:description" content="{{ $description ?? __('marketing.description') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JSON-LD structured data --}}
    @php
        $structuredData = json_encode([
            '@context'    => 'https://schema.org',
            '@type'       => 'ProfessionalService',
            'name'        => __('marketing.structured_data_name'),
            'description' => __('marketing.structured_data_desc'),
            'url'         => url('/'),
            'serviceType' => __('marketing.structured_data_service'),
            'areaServed'  => 'SE',
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    @endphp
    <script type="application/ld+json">{!! $structuredData !!}</script>
</head>
<body class="bg-zinc-950 text-white antialiased">

    <x-marketing.nav />

    <main>
        @yield('content')
    </main>

    <x-marketing.footer />

</body>
</html>
