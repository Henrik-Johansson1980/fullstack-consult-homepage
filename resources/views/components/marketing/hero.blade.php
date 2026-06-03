<section id="hero" class="relative flex min-h-screen items-center pt-20">

    {{-- Gradient orbs --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -right-64 -top-64 h-[600px] w-[600px] rounded-full bg-blue-500/5 blur-3xl"></div>
        <div class="absolute -bottom-32 left-1/4 h-[400px] w-[400px] rounded-full bg-indigo-500/5 blur-3xl"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_bottom,transparent_60%,theme(colors.zinc.950))]"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">

        {{-- Badge --}}
        <div class="mb-8 inline-flex items-center gap-2.5 rounded-full border border-zinc-800 bg-zinc-900/60 px-4 py-1.5 text-sm text-zinc-200 backdrop-blur-sm">
            <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
            {{ __('marketing.hero_badge') }}
        </div>

        {{-- Headline --}}
        <h1 class="max-w-4xl text-5xl font-semibold leading-tight tracking-tight text-white sm:text-6xl lg:text-7xl">
            {{ __('marketing.hero_headline_1') }}
            <span class="text-zinc-100"> {{ __('marketing.hero_headline_2') }}</span>
        </h1>

        {{-- Subheadline --}}
        <p class="mt-8 max-w-2xl text-lg leading-relaxed text-zinc-200 lg:text-xl">
            {{ __('marketing.hero_subheadline') }}
        </p>

        {{-- CTAs --}}
        <div class="mt-10 flex flex-col gap-4 sm:flex-row">
            <a
                href="#kontakt"
                class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-6 py-3.5 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100"
            >
                {{ __('marketing.hero_cta_primary') }}
                <flux:icon.arrow-right class="h-4 w-4" />
            </a>
            <a
                href="#process"
                class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-700 px-6 py-3.5 text-sm font-semibold text-white transition-colors hover:border-zinc-500 hover:bg-zinc-900"
            >
                {{ __('marketing.hero_cta_secondary') }}
            </a>
        </div>

        {{-- Trust signals --}}
        <div class="mt-16 flex flex-wrap items-center gap-x-8 gap-y-4">
            <div class="flex items-center gap-2 text-sm text-zinc-100">
                <flux:icon.shield-check class="h-4 w-4 text-zinc-200" />
                {{ __('marketing.hero_trust_gdpr') }}
            </div>
            <div class="flex items-center gap-2 text-sm text-zinc-100">
                <flux:icon.bolt class="h-4 w-4 text-zinc-200" />
                {{ __('marketing.hero_trust_fast') }}
            </div>
            <div class="flex items-center gap-2 text-sm text-zinc-100">
                <flux:icon.lifebuoy class="h-4 w-4 text-zinc-200" />
                {{ __('marketing.hero_trust_support') }}
            </div>
        </div>
    </div>
</section>
