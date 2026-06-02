@php
$questions = [
    [
        'q' => 'Hur lång tid tar det att bygga en lösning?',
        'a' => 'Det beror helt på projektets komplexitet. En enklare företagswebbplats tar 2–4 veckor. Ett mer komplext system som en kundportal eller affärssystem tar vanligtvis 6–16 veckor. Jag ger alltid en realistisk tidsuppskattning efter behovsanalysen – inga överraskningar.',
    ],
    [
        'q' => 'Vad kostar det?',
        'a' => 'Priset varierar baserat på projektets omfång och komplexitet. Enklare sajter börjar runt 30 000–50 000 kr. Mer komplexa system som portaler och affärssystem kostar vanligtvis 80 000–250 000 kr+. Jag arbetar med fast pris baserat på en tydlig spec – inga overheadkostnader.',
    ],
    [
        'q' => 'Vad händer när projektet är klart?',
        'a' => 'Du får tillgång till all källkod, dokumentation och infrastruktur. Jag erbjuder support och underhållsavtal för löpande uppdateringar, säkerhetspatchar och vidareutveckling. Du är aldrig låst – koden är din.',
    ],
    [
        'q' => 'Kan du integrera mot system vi redan använder?',
        'a' => 'Absolut. Jag har byggt integrationer mot Fortnox, Visma, HubSpot, Stripe, Klarna, BankID, olika CRM-system och e-handelssystem. Om ditt system har ett API kan vi integrera mot det.',
    ],
    [
        'q' => 'Varför inte bara använda WordPress?',
        'a' => 'WordPress är utmärkt för enkla sajter och bloggar. Men för komplexa affärssystem, kundportaler eller applikationer med specifika krav blir det snabbt en begränsning. Skräddarsydda lösningar är snabbare, säkrare och kan växa utan tekniska kompromisser.',
    ],
    [
        'q' => 'Jobbar du ensam eller med ett team?',
        'a' => 'Jag är en frilansande utvecklare som arbetar direkt med dig – ingen mellannivå, ingen telefonkedja. För större projekt samarbetar jag med ett nätverk av specialister inom design och DevOps vid behov.',
    ],
    [
        'q' => 'Hur ser supportprocessen ut efter lansering?',
        'a' => 'Jag erbjuder support via e-post och telefon. Akuta buggar hanteras inom 24 timmar. För löpande support och vidareutveckling erbjuder jag månadsavtal med prioriterad tillgänglighet.',
    ],
    [
        'q' => 'Kan du ta över ett befintligt projekt?',
        'a' => 'Ja, det händer ofta. Jag granskar koden, dokumenterar arkitekturen och ger en ärlig bedömning av nuläget och möjligheterna. Ibland räcker det med förbättringar, ibland rekommenderar jag en omskrivning – jag är transparent om vilket som ger bäst värde.',
    ],
];
@endphp

<section id="faq" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">FAQ</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Vanliga frågor
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                Hittar du inte svaret? Hör av dig – jag svarar alltid.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-3xl space-y-2" x-data="{ open: null }">
            @foreach($questions as $i => $item)
                <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 overflow-hidden">
                    <button
                        @click="open = open === {{ $i }} ? null : {{ $i }}"
                        class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-zinc-900"
                    >
                        <span class="text-sm font-semibold text-white">{{ $item['q'] }}</span>
                        <svg
                            :class="open === {{ $i }} ? 'rotate-45' : ''"
                            class="h-4 w-4 shrink-0 text-zinc-200 transition-transform"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div
                        x-show="open === {{ $i }}"
                        x-collapse
                        class="px-6 pb-5"
                    >
                        <p class="text-sm leading-relaxed text-zinc-200">{{ $item['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
