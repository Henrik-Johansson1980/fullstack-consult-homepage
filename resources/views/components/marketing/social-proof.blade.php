<section class="border-y border-zinc-800/50 bg-zinc-900/30 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="mb-8 text-center text-sm font-medium uppercase tracking-widest text-zinc-200">
            {{ __('marketing.social_proof_intro') }}
        </p>
        <div class="flex flex-wrap items-center justify-center gap-x-12 gap-y-6">
            @foreach(__('marketing.social_proof_industries') as $industry)
                <span class="text-base font-medium text-zinc-200 transition-colors hover:text-zinc-400">
                    {{ $industry }}
                </span>
            @endforeach
        </div>
    </div>
</section>
