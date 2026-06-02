@php
$benefits = [
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />',
        'title' => 'Tillväxt utan tekniska begränsningar',
        'description' => 'Din lösning är byggd för att växa med dig. Lägg till funktioner, användare och integrationer utan att behöva börja om från scratch.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />',
        'title' => 'Tid tillbaka i din vardag',
        'description' => 'Automatiserade arbetsflöden och integrerade system eliminerar manuellt arbete och minskar risken för fel. Fokusera på det som driver verksamheten framåt.',
    ],
    [
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />',
        'title' => 'Stabil drift du kan lita på',
        'description' => 'Ingen rädsla för att uppdateringar ska bryta sajten. Inga Plugin-konflikter. En stabil, testad kodbas som fungerar dygnet runt.',
    ],
];
@endphp

<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Fördelar</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                Vad du faktiskt får
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                Tekniken är medlet. Resultaten är målet.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
            @foreach($benefits as $benefit)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl border border-zinc-800 bg-zinc-900">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $benefit['icon'] !!}
                        </svg>
                    </div>
                    <h3 class="mb-3 text-lg font-semibold text-white">{{ $benefit['title'] }}</h3>
                    <p class="leading-relaxed text-zinc-200">{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
