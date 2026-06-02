@php
$services = [
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />',
        'title' => 'Företagswebbplatser',
        'description' => 'Snabba, säkra och konverteringsoptimerade sajter byggda för att generera leads och stärka ditt varumärke.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />',
        'title' => 'Kundportaler',
        'description' => 'Säkra portaler där dina kunder kan logga in, hantera beställningar, ladda ner dokument och kommunicera med dig.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />',
        'title' => 'Bokningssystem',
        'description' => 'Skräddarsydda bokningslösningar med kalenderintegration, automatiska påminnelser och betalning.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />',
        'title' => 'Integrationer & API',
        'description' => 'Koppla ihop dina befintliga system. Förmed data automatiskt mellan CRM, e-handel, ekonomisystem och mer.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
        'title' => 'Interna affärssystem',
        'description' => 'Digitalisera interna processer med skräddarsydda verktyg för projekthantering, rapportering och administration.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />',
        'title' => 'Medlemssystem',
        'description' => 'Hantera medlemmar, abonnemang, betalningar och exklusivt innehåll i en säker och skalbar lösning.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />',
        'title' => 'Migrering från WordPress',
        'description' => 'Flytta din befintliga site till en modern, skalbar plattform utan att förlora innehåll, SEO-ranking eller funktionalitet.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
        'title' => 'CRM & Automatisering',
        'description' => 'Skräddarsydda CRM-lösningar och automatiserade arbetsflöden som sparar timmar och minskar risken för mänskliga fel.',
    ],
];
@endphp

<section id="tjanster" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Tjänster</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Vad kan jag hjälpa dig med?
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                Från enkla webbplatser till komplexa affärssystem – jag bygger lösningar som löser verkliga problem.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($services as $service)
                <div class="group rounded-2xl border border-zinc-800 bg-zinc-900/50 p-6 transition-all hover:border-zinc-700 hover:bg-zinc-900">
                    <div class="mb-4 flex h-9 w-9 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900 transition-colors group-hover:border-zinc-700">
                        <svg class="h-4 w-4 text-zinc-200 transition-colors group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $service['icon'] !!}
                        </svg>
                    </div>
                    <h3 class="mb-2 text-sm font-semibold text-white">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-100">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="#kontakt" class="inline-flex items-center gap-2 rounded-lg border border-zinc-700 px-6 py-3.5 text-sm font-semibold text-white transition-colors hover:border-zinc-500 hover:bg-zinc-900">
                Berätta om ditt projekt
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
