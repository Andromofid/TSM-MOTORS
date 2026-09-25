<header class="sticky top-0 z-50 border-b border-white/10 bg-tsm-navy/95 shadow-lg shadow-black/10 backdrop-blur-xl">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="TSM Motors Logo" class="h-12 w-auto bg-white rounded-full" />
        </a>

        <nav class="hidden items-center gap-7 text-[13px] font-bold uppercase tracking-[0.16em] text-white/75 lg:flex">
            <a href="{{ route('home') }}#home" class="relative py-6 text-white after:absolute after:inset-x-0 after:bottom-4 after:h-0.5 after:bg-tsm-yellow">Accueil</a>
            <a href="{{ route('motos.index') }}" class="py-6 transition hover:text-tsm-yellow">Motos</a>
            <a href="{{ route('home') }}#accessoires" class="py-6 transition hover:text-tsm-yellow">Accessoires</a>
            <a href="{{ route('contact.create') }}" class="py-6 transition hover:text-tsm-yellow">Contact</a>
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('contact.create') }}" class="hidden rounded-full bg-tsm-yellow px-5 py-2.5 text-sm font-extrabold uppercase tracking-wide text-tsm-dark shadow-lg shadow-tsm-yellow/20 transition hover:bg-tsm-gold md:inline-flex">
                Réserver un essai
            </a>

            <button
                id="homeMenuButton"
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white lg:hidden"
                aria-label="Ouvrir le menu">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="homeMobileMenu" class="hidden border-t border-white/10 bg-tsm-navy lg:hidden">
        <nav class="mx-auto grid max-w-7xl grid-cols-2 gap-2 px-4 py-4 text-sm font-bold uppercase tracking-wide text-white/80 sm:px-6">
            <a href="{{ route('home') }}#home" class="rounded-xl bg-white/5 px-4 py-3 text-white">Accueil</a>
            <a href="{{ route('motos.index') }}" class="rounded-xl px-4 py-3 hover:bg-white/5">Motos</a>
            <a href="{{ route('home') }}#accessoires" class="rounded-xl px-4 py-3 hover:bg-white/5">Accessoires</a>
            <a href="{{ route('contact.create') }}" class="rounded-xl bg-tsm-yellow px-4 py-3 text-tsm-dark">Contact</a>
        </nav>
    </div>
</header>