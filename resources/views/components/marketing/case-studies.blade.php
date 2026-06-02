@php
$cases = [
    [
        'industry' => 'E-handel',
        'title' => 'Migrering från WooCommerce till skräddarsytt system',
        'description' => 'Företaget hade vuxit ur sin WordPress-lösning och behövde hantera komplexa B2B-prissättningar, automatisk lagerstyrning och integration mot sitt affärssystem.',
        'results' => ['60% snabbare sidladdning', 'Automatiserad orderhantering', 'Integration mot Fortnox'],
        'placeholder' => true,
    ],
    [
        'industry' => 'Tjänsteföretag',
        'title' => 'Kundportal med boknings- och fakturasystem',
        'description' => 'Konsultbolaget behövde en portal där kunder kunde boka möten, se sina projekt, godkänna offerter och ladda ner fakturor – allt på ett ställe.',
        'results' => ['80% färre supportärenden', 'Helautomatisk fakturering', 'Nöjdare kunder'],
        'placeholder' => true,
    ],
    [
        'industry' => 'Fastigheter',
        'title' => 'Hyresgästportal med autmatiserade processer',
        'description' => 'Fastighetsbolaget hanterade allt manuellt i e-post och kalkylblad. Vi byggde en portal för hyresgäster, felanmälningar, kontrakt och automatiserade påminnelser.',
        'results' => ['12 timmars/vecka sparad administration', 'Digital kontraktshantering', 'Realtidsövervakning'],
        'placeholder' => true,
    ],
];
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Case studies</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Projekt jag är stolt över
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                Verkliga problem, verkliga lösningar och mätbara resultat.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-6 lg:grid-cols-3">
            @foreach($cases as $case)
                <div class="flex flex-col rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8">
                    <div class="mb-4 inline-flex self-start rounded-full border border-zinc-800 bg-zinc-900 px-3 py-1 text-xs font-medium text-zinc-200">
                        {{ $case['industry'] }}
                    </div>
                    <h3 class="mb-3 text-base font-semibold text-white">{{ $case['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-200">{{ $case['description'] }}</p>

                    <div class="mt-6 space-y-2">
                        @foreach($case['results'] as $result)
                            <div class="flex items-center gap-2 text-sm text-zinc-100">
                                <svg class="h-3.5 w-3.5 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $result }}
                            </div>
                        @endforeach
                    </div>

                    @if($case['placeholder'])
                        <p class="mt-4 text-xs text-zinc-100">Anonymiserat case</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
