@php
$icons = [
    'globe-alt',
    'lock-closed',
    'calendar',
    'bolt',
    'building-office',
    'users',
    'arrow-path',
    'chart-bar',
];
$services = __('marketing.services');
@endphp

<section id="tjanster" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.services_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.services_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.services_subheading') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($services as $index => $service)
                <div class="group rounded-2xl border border-zinc-800 bg-zinc-900/50 p-6 transition-all hover:border-zinc-700 hover:bg-zinc-900">
                    <div class="mb-4 flex h-9 w-9 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900 transition-colors group-hover:border-zinc-700">
                        <flux:icon :name="$icons[$index]" class="h-4 w-4 text-zinc-200 transition-colors group-hover:text-white" />
                    </div>
                    <h3 class="mb-2 text-sm font-semibold text-white">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-100">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="#kontakt" class="inline-flex items-center gap-2 rounded-lg border border-zinc-700 px-6 py-3.5 text-sm font-semibold text-white transition-colors hover:border-zinc-500 hover:bg-zinc-900">
                {{ __('marketing.services_cta') }}
                <flux:icon.arrow-right class="h-4 w-4" />
            </a>
        </div>
    </div>
</section>
