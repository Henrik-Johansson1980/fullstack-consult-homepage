<section class="bg-zinc-900/30 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">

            {{-- Text --}}
            <div>
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Lösningen</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Det finns ett bättre sätt att arbeta
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    En skräddarsydd lösning som passar exakt din verksamhet – inte tvärtom.
                </p>
                <p class="mt-4 leading-relaxed text-zinc-200">
                    Istället för att anpassa din verksamhet efter ett standardsystem bygger jag en lösning som speglar hur du faktiskt arbetar. Det innebär snabbare processer, färre fel och ett system som kan växa i takt med dig.
                </p>

                <ul class="mt-8 space-y-3">
                    @foreach(['Byggd exakt efter dina behov, inte en mall', 'Integrationer mot de system du redan använder', 'Säkerhet och prestanda från grunden', 'Skalbar och lätt att vidareutveckla', 'Du äger koden – inga inlåsningar'] as $benefit)
                        <li class="flex items-center gap-3 text-sm text-zinc-100">
                            <svg class="h-4 w-4 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $benefit }}
                        </li>
                    @endforeach
                </ul>

                <a
                    href="#kontakt"
                    class="mt-10 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3.5 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100"
                >
                    Prata med mig om ditt projekt
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            {{-- Visual stats --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['value' => '10×', 'label' => 'snabbare än WordPress för komplexa system'],
                    ['value' => '0', 'label' => 'onödiga plugins eller tredjepartsberoenden'],
                    ['value' => '100%', 'label' => 'äganderätt till din kod och dina data'],
                    ['value' => '∞', 'label' => 'möjlighet att skala och vidareutveckla'],
                ] as $stat)
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
                        <div class="text-3xl font-bold text-white">{{ $stat['value'] }}</div>
                        <div class="mt-2 text-sm leading-snug text-zinc-200">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
