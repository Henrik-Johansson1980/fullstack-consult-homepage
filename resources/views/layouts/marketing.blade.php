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

    <canvas id="particle-canvas" class="fixed inset-0 w-full h-full pointer-events-none" style="z-index:0"></canvas>

    <div class="relative" style="z-index:1">

    <x-marketing.nav />

    <main>
        @yield('content')
    </main>

    <x-marketing.footer />

    </div>{{-- end relative wrapper --}}

    <script>
    (function () {
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');

        const PARTICLE_COUNT = 110;
        const CONNECTION_DISTANCE = 140;
        const COLORS = [
            [99, 102, 241],   // indigo-500
            [139, 92, 246],   // violet-500
            [59, 130, 246],   // blue-500
            [6, 182, 212],    // cyan-500
            [168, 85, 247],   // purple-500
        ];

        let width, height, particles;

        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        }

        function randomColor() {
            return COLORS[Math.floor(Math.random() * COLORS.length)];
        }

        function createParticle() {
            const [r, g, b] = randomColor();
            return {
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.3,
                vy: (Math.random() - 0.5) * 0.3,
                radius: Math.random() * 1.8 + 0.6,
                r, g, b,
                alpha: Math.random() * 0.5 + 0.5,
            };
        }

        function init() {
            resize();
            particles = Array.from({ length: PARTICLE_COUNT }, createParticle);
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);

            for (let i = 0; i < particles.length; i++) {
                const a = particles[i];

                for (let j = i + 1; j < particles.length; j++) {
                    const b = particles[j];
                    const dx = a.x - b.x;
                    const dy = a.y - b.y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < CONNECTION_DISTANCE) {
                        const lineAlpha = (1 - dist / CONNECTION_DISTANCE) * 0.2;
                        ctx.beginPath();
                        ctx.moveTo(a.x, a.y);
                        ctx.lineTo(b.x, b.y);
                        ctx.strokeStyle = `rgba(${a.r},${a.g},${a.b},${lineAlpha})`;
                        ctx.lineWidth = 0.8;
                        ctx.stroke();
                    }
                }

                ctx.beginPath();
                ctx.arc(a.x, a.y, a.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${a.r},${a.g},${a.b},${a.alpha})`;
                ctx.fill();
            }
        }

        function update() {
            for (const p of particles) {
                p.x += p.vx;
                p.y += p.vy;

                if (p.x < 0) p.x = width;
                if (p.x > width) p.x = 0;
                if (p.y < 0) p.y = height;
                if (p.y > height) p.y = 0;
            }
        }

        function loop() {
            update();
            draw();
            requestAnimationFrame(loop);
        }

        window.addEventListener('resize', () => {
            resize();
            particles = Array.from({ length: PARTICLE_COUNT }, createParticle);
        });

        init();
        loop();
    })();
    </script>

</body>
</html>
