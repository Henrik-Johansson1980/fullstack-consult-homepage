@php
$icons = ['arrow-trending-up', 'clock', 'shield-check'];
$benefits = __('marketing.benefits');
@endphp

<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.benefits_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.benefits_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.benefits_subheading') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
            @foreach($benefits as $index => $benefit)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl border border-zinc-800 bg-zinc-900">
                        <flux:icon :name="$icons[$index]" class="h-6 w-6 text-white" />
                    </div>
                    <h3 class="mb-3 text-lg font-semibold text-white">{{ $benefit['title'] }}</h3>
                    <p class="leading-relaxed text-zinc-200">{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
