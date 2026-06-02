@php
$securityPoints = __('marketing.security_points');
@endphp

<section class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-16 lg:grid-cols-2">

            {{-- Text side --}}
            <div class="lg:sticky lg:top-32">
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.security_label') }}</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    {{ __('marketing.security_heading') }}
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    {{ __('marketing.security_subheading') }}
                </p>
                <p class="mt-4 leading-relaxed text-zinc-200">
                    {{ __('marketing.security_body') }}
                </p>

                <div class="mt-8 rounded-xl border border-zinc-800 bg-zinc-900 p-6">
                    <p class="text-sm text-zinc-200">
                        {!! __('marketing.security_callout') !!}
                    </p>
                </div>
            </div>

            {{-- Points --}}
            <div class="space-y-4">
                @foreach($securityPoints as $index => $point)
                    <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-zinc-700 bg-zinc-900 text-xs font-semibold text-zinc-200">
                                {{ $index + 1 }}
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-white">{{ $point['title'] }}</h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-zinc-200">{{ $point['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
