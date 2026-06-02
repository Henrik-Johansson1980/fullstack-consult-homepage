@php
$rows = [
    ['aspect' => 'Anpassningsbarhet', 'custom' => 'Obegränsad – byggs exakt för dina behov', 'wordpress' => 'Begränsad av teman och plugins'],
    ['aspect' => 'Prestanda', 'custom' => 'Optimerad kod utan onödig overhead', 'wordpress' => 'Tyngs av plugins och generisk kod'],
    ['aspect' => 'Säkerhet', 'custom' => 'Minimal attackyta, kontrollerad kodbas', 'wordpress' => 'Kräver konstant patchning av plugins'],
    ['aspect' => 'Skalbarhet', 'custom' => 'Arkitekterad för tillväxt från start', 'wordpress' => 'Kan bli komplicerat att skala'],
    ['aspect' => 'Äganderätt', 'custom' => 'Du äger koden fullt ut', 'wordpress' => 'Beroende av tredjeparts-plugins'],
    ['aspect' => 'Underhåll', 'custom' => 'Förutsägbara kostnader, stabil drift', 'wordpress' => 'Plugin-uppdateringar kan bryta sajten'],
    ['aspect' => 'Integrationer', 'custom' => 'Sömlöst mot valfria system', 'wordpress' => 'Begränsas av tillgängliga plugins'],
    ['aspect' => 'Långsiktig kostnad', 'custom' => 'Lägre total ägandekostnad', 'wordpress' => 'Plugin-licenser, säkerhetspatchar, ombyggnader'],
];
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Jämförelse</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Skräddarsydd lösning vs. WordPress
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                Ingen lösning passar alla. Här är en ärlig jämförelse för att hjälpa dig fatta rätt beslut.
            </p>
        </div>

        <div class="mt-16 overflow-hidden rounded-2xl border border-zinc-800">
            {{-- Table header --}}
            <div class="grid grid-cols-3 border-b border-zinc-800 bg-zinc-900 px-6 py-4">
                <div class="text-sm font-semibold text-zinc-200">Aspekt</div>
                <div class="text-sm font-semibold text-white">Skräddarsydd lösning</div>
                <div class="text-sm font-semibold text-zinc-200">WordPress</div>
            </div>

            {{-- Rows --}}
            @foreach($rows as $row)
                <div class="grid grid-cols-3 border-b border-zinc-800/50 px-6 py-4 last:border-0 hover:bg-zinc-900/30">
                    <div class="text-sm font-medium text-zinc-100">{{ $row['aspect'] }}</div>
                    <div class="flex items-start gap-2 text-sm text-zinc-100">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        {{ $row['custom'] }}
                    </div>
                    <div class="flex items-start gap-2 text-sm text-zinc-100">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-zinc-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                        {{ $row['wordpress'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-6 text-center text-sm text-zinc-200">
            WordPress är ett bra verktyg för enkla sajter och bloggar. För komplexa system och tillväxtbolag finns bättre alternativ.
        </p>
    </div>
</section>
