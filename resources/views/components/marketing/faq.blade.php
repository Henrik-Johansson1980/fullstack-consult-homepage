@php
$questions = __('marketing.faq_items');
@endphp

<section id="faq" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.faq_label') }}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('marketing.faq_heading') }}
            </h2>
            <p class="mt-4 text-lg text-zinc-200">
                {{ __('marketing.faq_subheading') }}
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-3xl space-y-2" x-data="{ open: null }">
            @foreach($questions as $i => $item)
                <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 overflow-hidden">
                    <button
                        @click="open = open === {{ $i }} ? null : {{ $i }}"
                        class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-zinc-900"
                    >
                        <span class="text-sm font-semibold text-white">{{ $item['q'] }}</span>
                        <svg
                            :class="open === {{ $i }} ? 'rotate-45' : ''"
                            class="h-4 w-4 shrink-0 text-zinc-200 transition-transform"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div
                        x-show="open === {{ $i }}"
                        x-collapse
                        class="px-6 pb-5"
                    >
                        <p class="text-sm leading-relaxed text-zinc-200">{{ $item['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
