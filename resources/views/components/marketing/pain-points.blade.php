@php
$icons = ['exclamation-triangle', 'clock', 'chat-bubble-left-right', 'shield-check'];
$problems = __('marketing.pain_points');
@endphp

<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.pain_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.pain_subheading') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-6 sm:grid-cols-2">
            @foreach($problems as $index => $problem)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8 transition-colors hover:border-zinc-700">
                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                        <flux:icon :name="$icons[$index]" class="h-5 w-5 text-zinc-200" />
                    </div>
                    <h3 class="mb-2 text-base font-semibold text-white">{{ $problem['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-200">{{ $problem['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
