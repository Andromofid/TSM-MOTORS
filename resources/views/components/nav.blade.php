<header class="sticky top-0 z-50 border-b border-white/5 bg-tsm-dark/95 backdrop-blur-lg">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">

            <img src="{{asset('images/logo.png')}}" alt="TSM Motors Logo" class="h-16" srcset="">

        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden items-center gap-8 text-sm font-medium md:flex">

            <a
                href="{{ route('home') }}#home"
                class="{{ request()->routeIs('home') ? 'text-white' : 'text-tsm-muted' }} transition hover:text-tsm-yellow">
                Accueil
            </a>

            <a
                href="{{ route('motos.index') }}"
                class="{{ request()->routeIs('motos.index') ? 'text-white' : 'text-tsm-muted' }} transition hover:text-white">
                Motos
            </a>

            <a
                href="{{ route('home') }}#marques"
                class=" text-tsm-muted transition hover:text-white">
                Marques
            </a>

            <a
                href="{{ route('home') }}#about"
                class=" text-tsm-muted transition hover:text-white">
                À propos
            </a>

            <a
                href="{{ route('contact.create') }}"
                class="{{ request()->routeIs('contact.create') ? 'text-white' : 'text-tsm-muted' }} transition hover:text-white">
                Contact
            </a>

        </nav>

        <div class="flex items-center gap-3">

            <a
                href="{{ route('motos.index') }}"
                class="hidden rounded-lg bg-tsm-yellow px-5 py-2.5 text-sm font-semibold text-white transition
                   hover:bg-tsm-gold md:inline-flex">
                Voir les motos
            </a>

            {{-- Mobile menu button --}}
            <button
                id="mobileMenuButton"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-lg border border-tsm-border text-white md:hidden"
                aria-label="Ouvrir le menu">
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

    </div>

    {{-- Mobile Navigation --}}
    <div
        id="mobileMenu"
        class="hidden border-t border-tsm-border bg-tsm-surface md:hidden">

        <nav class="flex flex-col gap-1 px-4 py-4">

            <a href="{{ route('home') }}#home" class="rounded-lg px-4 py-3 hover:bg-tsm-blue">
                Accueil
            </a>

            <a href="{{ route('motos.index') }}" class="rounded-lg px-4 py-3 hover:bg-tsm-blue">
                Motos
            </a>

            <a href="{{ route('home') }}#marques" class="rounded-lg px-4 py-3 hover:bg-tsm-blue">
                Marques
            </a>

            <a href="{{ route('home') }}#about" class="rounded-lg px-4 py-3 hover:bg-tsm-blue">
                À propos
            </a>

            <a href="{{ route('contact.create') }}" class="rounded-lg px-4 py-3 hover:bg-tsm-blue">
                Contact
            </a>

        </nav>

    </div>

</header>

<script>
    const menuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
</script>