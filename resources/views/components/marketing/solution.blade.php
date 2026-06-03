<section class="bg-zinc-900/30 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">

            {{-- Text --}}
            <div>
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.solution_label') }}</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    {{ __('marketing.solution_heading') }}
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    {{ __('marketing.solution_subheading') }}
                </p>
                <p class="mt-4 leading-relaxed text-zinc-200">
                    {{ __('marketing.solution_body') }}
                </p>

                <ul class="mt-8 space-y-3">
                    @foreach(__('marketing.solution_benefits') as $benefit)
                        <li class="flex items-center gap-3 text-sm text-zinc-100">
                            <flux:icon.check class="h-4 w-4 shrink-0 text-emerald-500" />
                            {{ $benefit }}
                        </li>
                    @endforeach
                </ul>

                <a
                    href="#kontakt"
                    class="mt-10 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3.5 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100"
                >
                    {{ __('marketing.solution_cta') }}
                    <flux:icon.arrow-right class="h-4 w-4" />
                </a>
            </div>

            {{-- Visual stats --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach(__('marketing.solution_stats') as $stat)
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
                        <div class="text-3xl font-bold text-white">{{ $stat['value'] }}</div>
                        <div class="mt-2 text-sm leading-snug text-zinc-200">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
