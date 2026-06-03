<section id="kontakt" class="bg-zinc-900/20 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-16 lg:grid-cols-2">

            {{-- Left: info --}}
            <div class="lg:sticky lg:top-32">
                <p class="mb-4 text-sm font-medium uppercase tracking-widest text-zinc-100">{{ __('marketing.contact_label') }}</p>
                <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    {{ __('marketing.contact_heading') }}
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-zinc-200">
                    {{ __('marketing.contact_subheading') }}
                </p>

                <div class="mt-10 space-y-4">
                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <flux:icon.envelope class="h-4 w-4 text-zinc-200" />
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">{{ __('marketing.contact_email_label') }}</p>
                            <a href="mailto:din@epost.se" class="text-sm text-white transition-colors hover:text-zinc-300">din@epost.se</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <flux:icon.clock class="h-4 w-4 text-zinc-200" />
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">{{ __('marketing.contact_time_label') }}</p>
                            <p class="text-sm text-white">{{ __('marketing.contact_time_value') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-xl border border-zinc-800 bg-zinc-900/50 p-4">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-800 bg-zinc-900">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-zinc-100">{{ __('marketing.contact_status_label') }}</p>
                            <p class="text-sm text-white">{{ __('marketing.contact_status_value') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: form --}}
            <div>
                @if(session('contact_success'))
                    <div class="rounded-2xl border border-emerald-800 bg-emerald-950/50 p-8 text-center">
                        <flux:icon.check-circle class="mx-auto mb-4 h-12 w-12 text-emerald-500" />
                        <h3 class="mb-2 text-lg font-semibold text-white">{{ __('marketing.contact_success_heading') }}</h3>
                        <p class="text-sm text-zinc-200">{{ __('marketing.contact_success_body') }}</p>
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
                                    {{ __('marketing.contact_field_name') }} <span class="text-zinc-100">*</span>
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
                                    {{ __('marketing.contact_field_email') }} <span class="text-zinc-100">*</span>
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
                                    {{ __('marketing.contact_field_company') }} <span class="text-zinc-100">{{ __('marketing.contact_field_company_opt') }}</span>
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
                                    {{ __('marketing.contact_field_budget') }} <span class="text-zinc-100">{{ __('marketing.contact_field_budget_opt') }}</span>
                                </label>
                                <select
                                    id="budget"
                                    name="budget"
                                    class="w-full rounded-lg border border-zinc-700 bg-zinc-800/50 px-4 py-2.5 text-sm text-white transition-colors focus:border-zinc-500 focus:outline-none focus:ring-1 focus:ring-zinc-500"
                                >
                                    <option value="">{{ __('marketing.contact_budget_placeholder') }}</option>
                                    <option value="under_10k" @selected(old('budget') === 'under_10k')>{{ __('marketing.contact_budget_under_10k') }}</option>
                                    <option value="10k_50k" @selected(old('budget') === '10k_50k')>{{ __('marketing.contact_budget_10k_50k') }}</option>
                                    <option value="50k_100k" @selected(old('budget') === '50k_100k')>{{ __('marketing.contact_budget_50k_100k') }}</option>
                                    <option value="over_100k" @selected(old('budget') === 'over_100k')>{{ __('marketing.contact_budget_over_100k') }}</option>
                                    <option value="not_sure" @selected(old('budget') === 'not_sure')>{{ __('marketing.contact_budget_not_sure') }}</option>
                                </select>
                            </div>

                            {{-- Message --}}
                            <div class="sm:col-span-2">
                                <label for="message" class="mb-1.5 block text-sm font-medium text-zinc-100">
                                    {{ __('marketing.contact_field_message') }} <span class="text-zinc-100">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    placeholder="{{ __('marketing.contact_message_placeholder') }}"
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
                            {{ __('marketing.contact_submit') }}
                        </button>

                        <p class="mt-4 text-center text-xs text-zinc-200">
                            {{ __('marketing.contact_privacy') }}
                        </p>
                    </form>
                @endif
            </div>
        </div>
    </div>
</section>
