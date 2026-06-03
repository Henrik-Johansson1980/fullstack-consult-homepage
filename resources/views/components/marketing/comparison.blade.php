@php
$rows = __('marketing.comparison_rows');
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.comparison_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.comparison_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.comparison_subheading') }}
            </p>
        </div>

        <div class="mt-16 overflow-hidden rounded-2xl border border-zinc-800">
            {{-- Table header --}}
            <div class="grid grid-cols-3 border-b border-zinc-800 bg-zinc-900 px-6 py-4">
                <div class="text-sm font-semibold text-zinc-200">{{ __('marketing.comparison_col_aspect') }}</div>
                <div class="text-sm font-semibold text-white">{{ __('marketing.comparison_col_custom') }}</div>
                <div class="text-sm font-semibold text-zinc-200">{{ __('marketing.comparison_col_wp') }}</div>
            </div>

            {{-- Rows --}}
            @foreach($rows as $row)
                <div class="grid grid-cols-3 border-b border-zinc-800/50 px-6 py-4 last:border-0 hover:bg-zinc-900/30">
                    <div class="text-sm font-medium text-zinc-100">{{ $row['aspect'] }}</div>
                    <div class="flex items-start gap-2 text-sm text-zinc-100">
                        <flux:icon.check class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500" />
                        {{ $row['custom'] }}
                    </div>
                    <div class="flex items-start gap-2 text-sm text-zinc-100">
                        <flux:icon.minus class="mt-0.5 h-4 w-4 shrink-0 text-zinc-200" />
                        {{ $row['wordpress'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-6 text-center text-sm text-zinc-200">
            {{ __('marketing.comparison_footer') }}
        </p>
    </div>
</section>
