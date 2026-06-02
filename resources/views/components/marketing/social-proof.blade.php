<section class="border-y border-zinc-800/50 bg-zinc-900/30 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="mb-8 text-center text-sm font-medium uppercase tracking-widest text-zinc-200">
            Anlitad av företag inom
        </p>
        <div class="flex flex-wrap items-center justify-center gap-x-12 gap-y-6">
            @foreach(['E-handel', 'Fastigheter', 'Konsulttjänster', 'Hälsa & Välmående', 'Utbildning', 'Logistik'] as $industry)
                <span class="text-base font-medium text-zinc-200 transition-colors hover:text-zinc-400">
                    {{ $industry }}
                </span>
            @endforeach
        </div>
    </div>
</section>
