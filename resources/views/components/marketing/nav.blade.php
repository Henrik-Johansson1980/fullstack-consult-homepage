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
            <a href="#tjanster" class="text-sm text-zinc-200 transition-colors hover:text-white">Tjänster</a>
            <a href="#process" class="text-sm text-zinc-200 transition-colors hover:text-white">Process</a>
            <a href="#om-mig" class="text-sm text-zinc-200 transition-colors hover:text-white">Om mig</a>
            <a href="#faq" class="text-sm text-zinc-200 transition-colors hover:text-white">FAQ</a>
        </div>

        {{-- CTA + mobile toggle --}}
        <div class="flex items-center gap-4">
            <a
                href="#kontakt"
                class="hidden rounded-lg bg-white px-4 py-2 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100 lg:inline-flex"
            >
                Boka samtal
            </a>

            <button
                @click="open = !open"
                class="flex h-9 w-9 items-center justify-center rounded-lg border border-zinc-800 text-zinc-200 transition-colors hover:text-white lg:hidden"
                aria-label="Öppna meny"
            >
                <svg x-show="!open" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
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
            <a @click="open = false" href="#tjanster" class="text-sm text-zinc-200 transition-colors hover:text-white">Tjänster</a>
            <a @click="open = false" href="#process" class="text-sm text-zinc-200 transition-colors hover:text-white">Process</a>
            <a @click="open = false" href="#om-mig" class="text-sm text-zinc-200 transition-colors hover:text-white">Om mig</a>
            <a @click="open = false" href="#faq" class="text-sm text-zinc-200 transition-colors hover:text-white">FAQ</a>
            <a
                href="#kontakt"
                class="mt-2 inline-flex justify-center rounded-lg bg-white px-4 py-2.5 text-sm font-semibold text-zinc-900"
            >
                Boka samtal
            </a>
        </div>
    </div>
</header>
