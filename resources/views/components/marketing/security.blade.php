@php
$securityPoints = [
    [
        'title' => 'Minimal attackyta',
        'description' => 'Inga onödiga plugins, inga externa beroenden. Varje del av systemet är kontrollerad kod som vi känner till i detalj.',
    ],
    [
        'title' => 'Rollbaserade behörigheter',
        'description' => 'Varje användare ser exakt det de ska se – inget mer. Behörigheter är inbyggda i arkitekturen, inte påklistrade i efterhand.',
    ],
    [
        'title' => 'Skydd av kunddata',
        'description' => 'Krypterad dataöverföring, säker autentisering och GDPR-medveten datalagring som standard – inte som tillägg.',
    ],
    [
        'title' => 'Loggning & övervakning',
        'description' => 'Fullständiga audit trails och realtidsövervakning. Du vet alltid vad som händer i systemet och kan agera snabbt vid avvikelser.',
    ],
    [
        'title' => 'Kontrollerad kodbas',
        'description' => 'Du äger koden. Inga svarta lådor, inga plötsliga ändringar från tredjepart som kan bryta ditt system.',
    ],
    [
        'title' => 'Backup & återhämtning',
        'description' => 'Automatiserade backuprutiner och dokumenterade återhämtningsplaner som minimerar driftstopp vid eventuella incidenter.',
    ],
];
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-16 lg:grid-cols-2">

            {{-- Text side --}}
            <div class="lg:sticky lg:top-32">
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Säkerhet</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Säkerhet som är inbyggd från start
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    När verksamheten växer blir säkerhet en affärsfråga, inte bara en teknisk fråga.
                </p>
                <p class="mt-4 leading-relaxed text-zinc-200">
                    Ett dataintrång kostar inte bara pengar – det kostar förtroende. Jag bygger system där säkerhet är en grundsten, inte något som läggs till i efterhand.
                </p>

                <div class="mt-8 rounded-xl border border-zinc-800 bg-zinc-900 p-6">
                    <p class="text-sm text-zinc-200">
                        <span class="font-semibold text-white">En vanlig WordPress-site</span> kör i genomsnitt 20+ plugins, varav många sällan uppdateras. Varje plugin är en potentiell inkörsport. En skräddarsydd lösning har inga onödiga delar.
                    </p>
                </div>
            </div>

            {{-- Points --}}
            <div class="space-y-4">
                @foreach($securityPoints as $index => $point)
                    <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-zinc-700 bg-zinc-900 text-xs font-semibold text-zinc-200">
                                {{ $index + 1 }}
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-white">{{ $point['title'] }}</h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-zinc-200">{{ $point['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
