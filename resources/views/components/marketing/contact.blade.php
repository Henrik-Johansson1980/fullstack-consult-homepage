<section id="kontakt" class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-16 lg:grid-cols-2">

            {{-- Left: info --}}
            <div class="lg:sticky lg:top-32">
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">Kontakt</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Redo att ta nästa steg?
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    Berätta om ditt projekt och dina utmaningar. Jag svarar inom 24 timmar och erbjuder ett kostnadsfritt första samtal.
                </p>

                <div class="mt-10 space-y-4">
                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <svg class="h-4 w-4 text-zinc-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">E-post</p>
                            <a href="mailto:din@epost.se" class="text-sm text-white transition-colors hover:text-zinc-300">din@epost.se</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <svg class="h-4 w-4 text-zinc-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">Svarstid</p>
                            <p class="text-sm text-white">Inom 24 timmar på vardagar</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">Status</p>
                            <p class="text-sm text-white">Tillgänglig för nya uppdrag</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: form --}}
            <div>
                @if(session('contact_success'))
                    <div class="rounded-2xl border border-emerald-800 bg-emerald-950/50 p-8 text-center">
                        <svg class="mx-auto mb-4 h-12 w-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mb-2 text-lg font-semibold text-white">Tack för ditt meddelande!</h3>
                        <p class="text-sm text-zinc-200">Jag återkommer inom 24 timmar.</p>
                    </div>
                @else
                    <form
                        method="POST"
                        action="{{ route('contact.store') }}"
                        class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8"
                    >
                        @csrf

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            {{-- Name --}}
                            <div>
                                <label for="name" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    Namn <span class="text-zinc-100">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    placeholder="Anna Andersson"
                                    class="w-full rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white placeholder-zinc-600 transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500 @error('name') border-red-700 @enderror"
                                >
                                @error('name')
                                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    E-post <span class="text-zinc-100">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="anna@foretag.se"
                                    class="w-full rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white placeholder-zinc-600 transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500 @error('email') border-red-700 @enderror"
                                >
                                @error('email')
                                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Company --}}
                            <div class="sm:col-span-2">
                                <label for="company" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    Företag <span class="text-zinc-100">(valfritt)</span>
                                </label>
                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Ditt Företag AB"
                                    class="w-full rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white placeholder-zinc-600 transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500"
                                >
                            </div>

                            {{-- Budget --}}
                            <div class="sm:col-span-2">
                                <label for="budget" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    Ungefärlig budget <span class="text-zinc-100">(valfritt)</span>
                                </label>
                                <select
                                    id="budget"
                                    name="budget"
                                    class="w-full rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500"
                                >
                                    <option value="">Välj budgetintervall</option>
                                    <option value="under_10k" @selected(old('budget') === 'under_10k')>Under 10 000 kr</option>
                                    <option value="10k_50k" @selected(old('budget') === '10k_50k')>10 000 – 50 000 kr</option>
                                    <option value="50k_100k" @selected(old('budget') === '50k_100k')>50 000 – 100 000 kr</option>
                                    <option value="over_100k" @selected(old('budget') === 'over_100k')>Över 100 000 kr</option>
                                    <option value="not_sure" @selected(old('budget') === 'not_sure')>Vet inte än</option>
                                </select>
                            </div>

                            {{-- Message --}}
                            <div class="sm:col-span-2">
                                <label for="message" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    Berätta om ditt projekt <span class="text-zinc-100">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    placeholder="Beskriv dina nuvarande utmaningar och vad du vill uppnå..."
                                    class="w-full resize-none rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white placeholder-zinc-600 transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500 @error('message') border-red-700 @enderror"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="mt-6 w-full rounded-lg bg-white px-6 py-3.5 text-sm font-semibold text-zinc-900 transition-colors hover:bg-zinc-100"
                        >
                            Skicka meddelande
                        </button>

                        <p class="mt-4 text-center text-xs text-zinc-200">
                            Dina uppgifter hanteras konfidentiellt och delas aldrig med tredje part.
                        </p>
                    </form>
                @endif
            </div>
        </div>
    </div>
</section>
