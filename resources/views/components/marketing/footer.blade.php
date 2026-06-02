<footer class="border-t border-zinc-800 bg-zinc-950">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="lg:col-span-2">
                <a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-white">
                    Henrik<span class="text-zinc-100">.</span>
                </a>
                <p class="mt-4 max-w-sm text-sm leading-relaxed text-zinc-200">
                    Skräddarsydda webblösningar för växande företag. Jag hjälper dig gå från begränsande standardlösningar till system som passar din verksamhet.
                </p>
                <div class="mt-6 flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    <span class="text-sm text-zinc-200">Tillgänglig för nya uppdrag</span>
                </div>
            </div>

            {{-- Nav --}}
            <div>
                <h3 class="text-sm font-semibold text-white">Sidor</h3>
                <ul class="mt-4 space-y-3">
                    <li><a href="#tjanster" class="text-sm text-zinc-200 transition-colors hover:text-white">Tjänster</a></li>
                    <li><a href="#process" class="text-sm text-zinc-200 transition-colors hover:text-white">Process</a></li>
                    <li><a href="#om-mig" class="text-sm text-zinc-200 transition-colors hover:text-white">Om mig</a></li>
                    <li><a href="#faq" class="text-sm text-zinc-200 transition-colors hover:text-white">FAQ</a></li>
                    <li><a href="#kontakt" class="text-sm text-zinc-200 transition-colors hover:text-white">Kontakt</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-sm font-semibold text-white">Kontakt</h3>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="mailto:din@epost.se" class="text-sm text-zinc-200 transition-colors hover:text-white">
                            din@epost.se
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/ditt-profil" target="_blank" rel="noopener" class="text-sm text-zinc-200 transition-colors hover:text-white">
                            LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/ditt-konto" target="_blank" rel="noopener" class="text-sm text-zinc-200 transition-colors hover:text-white">
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-start justify-between gap-4 border-t border-zinc-800 pt-8 sm:flex-row sm:items-center">
            <p class="text-sm text-zinc-100">
                &copy; {{ date('Y') }} Henrik. Alla rättigheter förbehållna.
            </p>
            <p class="text-sm text-zinc-200">
                Byggd med Laravel & kärlek för bra kod.
            </p>
        </div>
    </div>
</footer>
