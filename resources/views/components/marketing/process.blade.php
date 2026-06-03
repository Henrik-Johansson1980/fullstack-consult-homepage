@php
$steps = __('marketing.process_steps');
@endphp

<section id="process" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.process_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.process_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.process_subheading') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($steps as $step)
                <div class="relative flex flex-col">
                    {{-- Connector line (not on last) --}}
                    @if(!$loop->last)
                        <div class="absolute left-8 top-8 hidden h-px w-[calc(100%+2rem)] bg-zinc-800 lg:block"></div>
                    @endif

                    <div class="relative flex h-full flex-col rounded-2xl border border-zinc-800 bg-zinc-900/50 p-6">
                        <div class="mb-4 text-2xl font-bold text-zinc-100">{{ $step['number'] }}</div>
                        <h3 class="mb-3 text-base font-semibold text-white">{{ $step['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-zinc-200">{{ $step['description'] }}</p>
                        <div class="mt-4 inline-flex items-center gap-1.5 rounded-full border border-zinc-800 px-3 py-1 text-xs text-zinc-100">
                            <flux:icon.check-circle class="h-3 w-3" />
                            {{ $step['deliverable'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
