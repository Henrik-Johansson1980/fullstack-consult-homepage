<header
    x-data="{ open: false }"
    class="fixed inset-x-0 top-0 z-50 border-b border-zinc-800 bg-zinc-950"
>
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-white">
            Henrik<span class="text-zinc-100">.</span>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden items-center gap-8 lg:flex">
            <a href="#tjanster" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_services') }}</a>
            <a href="#process" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_process') }}</a>
            <a href="#om-mig" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_about') }}</a>
            <a href="#faq" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_faq') }}</a>
        </div>

        {{-- CTA + language switcher + mobile toggle --}}
        <div class="flex items-center gap-3">
            {{-- Language switcher --}}
            @php
                use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
                $otherLocale = app()->getLocale() === 'sv' ? 'en' : 'sv';
                $switchUrl = LaravelLocalization::getLocalizedURL($otherLocale, null, [], true);
            @endphp
            <a
                href="{{ $switchUrl }}"
                class="hidden text-xs font-medium text-zinc-200 transition-colors hover:text-white lg:inline-flex items-center gap-1.5 rounded-md border border-zinc-800 px-2.5 py-1.5"
            >
                {{ __('marketing.lang_switch') }}
            </a>

            <a
                href="#kontakt"
                class="hidden rounded-lg bg-white px-4 py-2 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100 lg:inline-flex"
            >
                {{ __('marketing.nav_cta') }}
            </a>

            <button
                @click="open = !open"
                class="flex h-9 w-9 items-center justify-center rounded-lg border border-zinc-800 text-zinc-200 transition-colors hover:text-white lg:hidden"
                aria-label="{{ __('marketing.nav_open_menu') }}"
            >
                <flux:icon.bars-3 x-show="!open" class="h-4 w-4" />
                <flux:icon.x-mark x-show="open" class="h-4 w-4" />
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div
        x-show="open"
        x-transition:enter="transition duration-200 ease-out"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-zinc-800 bg-zinc-950 px-6 pb-6 pt-4 lg:hidden"
    >
        <div class="flex flex-col gap-4">
            <a @click="open = false" href="#tjanster" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_services') }}</a>
            <a @click="open = false" href="#process" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_process') }}</a>
            <a @click="open = false" href="#om-mig" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_about') }}</a>
            <a @click="open = false" href="#faq" class="text-sm text-zinc-200 transition-colors hover:text-white">{{ __('marketing.nav_faq') }}</a>
            <a
                href="{{ $switchUrl }}"
                class="text-sm text-zinc-200 transition-colors hover:text-white"
            >
                {{ __('marketing.lang_switch') }}
            </a>
            <a
                href="#kontakt"
                class="mt-2 inline-flex justify-center rounded-lg bg-white px-4 py-2.5 text-sm font-semibold text-zinc-900"
            >
                {{ __('marketing.nav_cta') }}
            </a>
        </div>
    </div>
</header>
