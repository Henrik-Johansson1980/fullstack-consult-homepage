@php
$icons = [
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />',
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />',
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />',
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />',
];
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
                        <svg class="h-5 w-5 text-zinc-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $icons[$index] !!}
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold text-white">{{ $problem['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-200">{{ $problem['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
