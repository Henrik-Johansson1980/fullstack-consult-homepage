<!DOCTYPE html>
<html lang="sv" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Henrik – Skräddarsydda webblösningar för växande företag' }}</title>
    <meta name="description" content="{{ $description ?? 'Jag hjälper företag att gå från begränsande standardlösningar till skräddarsydda webbsystem som sparar tid, minskar administration och skapar utrymme för tillväxt.' }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Henrik – Skräddarsydda webblösningar för växande företag' }}">
    <meta property="og:description" content="{{ $description ?? 'Jag hjälper företag att gå från begränsande standardlösningar till skräddarsydda webbsystem som sparar tid, minskar administration och skapar utrymme för tillväxt.' }}">
    <meta property="og:locale" content="sv_SE">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Henrik – Skräddarsydda webblösningar för växande företag' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Jag hjälper företag att gå från begränsande standardlösningar till skräddarsydda webbsystem.' }}">

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
            'name'        => 'Henrik – Webbutvecklare',
            'description' => 'Skräddarsydda webblösningar för växande företag',
            'url'         => url('/'),
            'serviceType' => 'Webbutveckling',
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
