<footer
    id="contact"
    class="border-t border-tsm-border bg-tsm-dark">

    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>

                <h3 class="font-heading text-xl font-bold text-white">
                    <img src="{{asset('images/logo.png')}}" alt="Logo" sizes="" srcset="">
                </h3>

                <p class="mt-4 max-w-xs text-sm leading-6 text-tsm-muted">
                    Votre showroom Suzuki, atelier, location et accessoires à Agadir.
                </p>

            </div>


            {{-- Navigation --}}
            <div>

                <h4 class="font-semibold text-white">
                    Navigation
                </h4>

                <div class="mt-4 flex flex-col gap-3 text-sm text-tsm-muted">

                    <a href="{{ route('home') }}#home" class="hover:text-white">
                        Accueil
                    </a>

                    <a href="{{ route('motos.index') }}" class="hover:text-white">
                        Motos
                    </a>

                    <a href="{{ route('home') }}#marques" class="hover:text-white">
                        Marques
                    </a>

                    <a href="{{ route('home') }}#about" class="hover:text-white">
                        À propos
                    </a>

                    <a href="{{ route('contact.create') }}" class="hover:text-white">
                        Contact
                    </a>

                </div>

            </div>


            {{-- Contact --}}
            <div>

                <h4 class="font-semibold text-white">
                    Contact
                </h4>

                <div class="mt-4 space-y-3 text-sm text-tsm-muted">

                    <p>
                        Agadir, Maroc
                    </p>

                    <p>
                        +212 6 89 49 75 06
                        <br>
                        +212 6 84 60 25 60
                    </p>

                    <p>
                        contact@tsmmotors.ma
                    </p>

                </div>

            </div>


            {{-- Social --}}
            <div>

                <h4 class="font-semibold text-white">
                    Suivez-nous
                </h4>

                <p class="mt-4 text-sm text-tsm-muted">
                    Retrouvez TSM Motors sur les réseaux sociaux.
                </p>

                <div class="mt-5 flex gap-3">

                    <a
                        href="https://www.instagram.com/tsm_motors_agadir/"
                        traget="_blank"
                        class="flex h-10 w-10 items-center justify-center rounded-lg
                           border border-tsm-border text-sm text-white
                           transition hover:border-tsm-yellow
                           hover:bg-tsm-yellow">
                        IG
                    </a>

                    <a
                        href="https://web.facebook.com/people/TSM-Motors-Agadir/61584669695694/"
                        target="_blank"
                        class="flex h-10 w-10 items-center justify-center rounded-lg
                           border border-tsm-border text-sm text-white
                           transition hover:border-tsm-yellow
                           hover:bg-tsm-yellow">
                        FB
                    </a>

                </div>

            </div>

        </div>


        <div
            class="mt-10 flex flex-col justify-between gap-4 border-t
               border-tsm-border pt-6 text-sm text-tsm-muted
               sm:flex-row">

            <p>
                © {{ date('Y') }} TSM Motors Agadir. Tous droits réservés.
            </p>

            <p>
                Agadir, Maroc
            </p>

        </div>

    </div>

</footer>