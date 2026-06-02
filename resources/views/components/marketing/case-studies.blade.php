@php
$cases = __('marketing.cases');
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.cases_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.cases_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.cases_subheading') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-6 lg:grid-cols-3">
            @foreach($cases as $case)
                <div class="flex flex-col rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8">
                    <div class="mb-4 inline-flex self-start rounded-full border border-zinc-800 bg-zinc-900 px-3 py-1 text-xs font-medium text-zinc-200">
                        {{ $case['industry'] }}
                    </div>
                    <h3 class="mb-3 text-base font-semibold text-white">{{ $case['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-zinc-200">{{ $case['description'] }}</p>

                    <div class="mt-6 space-y-2">
                        @foreach($case['results'] as $result)
                            <div class="flex items-center gap-2 text-sm text-zinc-100">
                                <svg class="h-3.5 w-3.5 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $result }}
                            </div>
                        @endforeach
                    </div>

                    <p class="mt-4 text-xs text-zinc-100">{{ __('marketing.cases_anonymous') }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
