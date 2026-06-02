@php
$steps = [
    [
        'number' => '01',
        'title' => 'Behovsanalys',
        'description' => 'Vi börjar med ett kostnadsfritt samtal där vi går igenom din verksamhet, dina mål och dina nuvarande utmaningar. Jag ställer rätt frågor för att förstå vad som faktiskt behöver lösas – inte bara symtomen.',
        'deliverable' => 'Sammanfattning & förslag',
    ],
    [
        'number' => '02',
        'title' => 'Design & planering',
        'description' => 'Baserat på analysen tar jag fram en teknisk plan, en sitemap och enkla wireframes. Vi stämmer av och justerar innan en enda rad kod skrivs. Inga överraskningar längs vägen.',
        'deliverable' => 'Teknisk spec & wireframes',
    ],
    [
        'number' => '03',
        'title' => 'Utveckling',
        'description' => 'Jag bygger i sprintar med regelbundna demos, så du kan följa med och ge feedback löpande. Koden är testad, dokumenterad och redo för produktion.',
        'deliverable' => 'Fungerande applikation',
    ],
    [
        'number' => '04',
        'title' => 'Lansering & support',
        'description' => 'Driftsättning på din infrastruktur, genomgång och utbildning av systemet. Jag är tillgänglig efter lansering för frågor, buggar och vidareutveckling.',
        'deliverable' => 'Produktionsklar lösning',
    ],
];
@endphp

<section id="process" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Process</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Hur vi arbetar tillsammans
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                En transparent process där du alltid vet var vi är och vad som händer härnäst.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($steps as $step)
                <div class="relative">
                    {{-- Connector line (not on last) --}}
                    @if(!$loop->last)
                        <div class="absolute left-8 top-8 hidden h-px w-[calc(100%+2rem)] bg-zinc-800 lg:block"></div>
                    @endif

                    <div class="relative rounded-2xl border border-zinc-800 bg-zinc-900/50 p-6">
                        <div class="mb-4 text-2xl font-bold text-zinc-100">{{ $step['number'] }}</div>
                        <h3 class="mb-3 text-base font-semibold text-white">{{ $step['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-zinc-200">{{ $step['description'] }}</p>
                        <div class="mt-4 inline-flex items-center gap-1.5 rounded-full border border-zinc-800 px-3 py-1 text-xs text-zinc-100">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $step['deliverable'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
