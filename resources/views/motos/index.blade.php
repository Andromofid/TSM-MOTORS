<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogue motos - TSM Motors Agadir</title>

    <meta
        name="description"
        content="Explorez le catalogue TSM Motors Agadir avec filtres par marque, catégorie, condition et prix.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-heading {
            font-family: 'Barlow Condensed', sans-serif;
        }
    </style>
</head>

<body class="bg-tsm-dark font-sans text-white antialiased">
    <x-nav />

    <main>
        <section class="relative isolate overflow-hidden bg-tsm-dark">
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-45"
                style="background-image: url('{{ asset('images/Showroom.webp') }}');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-tsm-dark via-tsm-navy/90 to-tsm-blue/45"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_20%,rgba(245,181,27,0.24),transparent_26%),radial-gradient(circle_at_16%_8%,rgba(18,63,131,0.55),transparent_34%)]"></div>
            <div class="absolute bottom-0 left-0 h-32 w-full bg-gradient-to-t from-tsm-dark to-transparent"></div>

            <div class="relative mx-auto grid min-h-[420px] max-w-7xl items-center gap-8 px-4 py-14 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
                <div class="max-w-2xl">
                    <p class="inline-flex items-center gap-3 border-l-4 border-tsm-yellow bg-tsm-dark/45 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow backdrop-blur-md">
                        Catalogue TSM Motors
                    </p>

                    <h1 class="font-heading mt-6 text-5xl font-extrabold uppercase leading-[0.9] tracking-tight text-white sm:text-6xl lg:text-7xl">
                        Trouvez la moto
                        <span class="block text-tsm-yellow">qui vous appelle.</span>
                    </h1>

                    <p class="mt-5 max-w-xl text-sm leading-7 text-white/70 sm:text-base">
                        Filtrez les modèles disponibles par marque, catégorie, condition et budget. Les machines sont prêtes, le showroom vous attend.
                    </p>
                </div>

            </div>
        </section>

        <section class="relative z-10 -mt-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 shadow-2xl shadow-black/25 backdrop-blur-xl">
                    <details class="group lg:hidden">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-tsm-yellow text-tsm-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9m-15 6h15m-12 6h12" />
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-extrabold uppercase tracking-wide text-white">Filtrer les motos</p>
                                    <p class="text-xs text-white/55">Marque, catégorie, prix...</p>
                                </div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 text-white/60 transition-transform duration-200 group-open:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </summary>

                        <div class="border-t border-white/10 p-5">
                            @include('components.moto-filters')
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-tsm-dark pb-14 pt-10">
            <div class="absolute -left-40 top-28 h-80 w-80 rounded-full bg-tsm-yellow/10 blur-[110px]"></div>
            <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-tsm-blue/25 to-transparent"></div>

            <div class="relative sticky mx-auto grid max-w-7xl gap-7 px-4 sm:px-6 lg:grid-cols-[320px_1fr] lg:px-8">
                <aside class="hidden lg:block self-start">
                    <div
                        class="sticky top-24
               overflow-hidden
               rounded-[1.6rem]
               border border-white/10
               bg-tsm-navy/90
               p-5
               shadow-2xl shadow-black/20
               backdrop-blur-xl">
                        <div class="border-b border-white/10 pb-4">
                            <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">
                                Recherche avancée
                            </p>

                            <h2 class="font-heading mt-1 text-3xl font-extrabold uppercase text-white">
                                Affiner le catalogue
                            </h2>

                            <p class="mt-2 text-sm leading-6 text-white/55">
                                Sélectionnez vos critères et trouvez rapidement la moto adaptée à votre route.
                            </p>
                        </div>

                        <div class="mt-5">
                            @include('components.moto-filters')
                        </div>
                    </div>
                </aside>

                <div>
                    <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                        <div>
                            <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow">Résultats</p>
                            <h2 class="font-heading mt-2 text-4xl font-extrabold uppercase text-white sm:text-5xl">
                                {{ $motos->total() }} moto(s) trouvée(s)
                            </h2>
                        </div>

                        <div class="rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white/65">
                            Page {{ $motos->currentPage() }} sur {{ $motos->lastPage() }}
                        </div>
                    </div>

                    @if ($motos->isNotEmpty())
                    <div class="mt-8 grid gap-5 sm:grid-cols-2 xl:grid-cols-2">
                        @foreach ($motos as $moto)
                        <article class="group relative overflow-hidden rounded-[1.6rem] bg-tsm-light text-tsm-dark shadow-2xl shadow-black/20 transition duration-300 hover:-translate-y-1 hover:shadow-tsm-yellow/10">
                            <div class="absolute right-0 top-0 z-20 flex gap-2">
                                @if ($moto->condition)
                                <span class="rounded-bl-2xl bg-tsm-navy px-3 py-2 text-[10px] font-extrabold uppercase tracking-[0.18em] text-white">
                                    {{ $moto->condition }}
                                </span>
                                @endif

                                @if ($moto->is_featured)
                                <span class="rounded-bl-2xl bg-tsm-yellow px-3 py-2 text-[10px] font-extrabold uppercase tracking-[0.18em] text-tsm-dark">
                                    Vedette
                                </span>
                                @endif
                            </div>

                            <div class="relative flex h-56 items-center justify-center overflow-hidden bg-gradient-to-br from-white via-slate-100 to-slate-200">
                                <div class="absolute h-40 w-40 rounded-full bg-tsm-yellow/25 blur-3xl transition duration-500 group-hover:scale-125"></div>

                                <a href="{{ route('motos.show', $moto->slug) }}" class="relative z-10 h-full w-full">
                                    <img
                                        src="{{ $moto->image ? Storage::url($moto->image) : asset('images/hero-moto.png') }}"
                                        alt="{{ $moto->name }}"
                                        class="h-full w-full object-contain p-6 transition duration-500 group-hover:scale-110">
                                </a>
                            </div>

                            <div class="p-5">
                                <div class="flex flex-wrap items-center gap-2 text-[11px] font-extrabold uppercase tracking-[0.22em] text-tsm-gold">
                                    <span>{{ $moto->brand?->name ?? 'Marque' }}</span>
                                    <span class="text-tsm-muted">/</span>
                                    <span>{{ $moto->category?->name ?? 'Catégorie' }}</span>
                                </div>

                                <a href="{{ route('motos.show', $moto->slug) }}" class="group/title">
                                    <h3 class="font-heading mt-2 min-h-[3rem] text-3xl font-extrabold uppercase leading-none text-tsm-dark transition group-hover/title:text-tsm-blue">
                                        {{ $moto->name }}
                                    </h3>
                                </a>

                                <div class="mt-5 grid grid-cols-3 gap-2 border-y border-slate-200 py-3 text-center">
                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">Année</p>
                                        <p class="mt-1 text-sm font-extrabold text-tsm-dark">{{ $moto->year ?? '-' }}</p>
                                    </div>

                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">CC</p>
                                        <p class="mt-1 text-sm font-extrabold text-tsm-dark">{{ $moto->engine_cc ?? '-' }}</p>
                                    </div>

                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">Km</p>
                                        <p class="mt-1 text-sm font-extrabold text-tsm-dark">
                                            {{ $moto->mileage ? number_format($moto->mileage, 0, ',', ' ') : '-' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-5 flex items-center justify-between gap-4">
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-wider text-tsm-muted">Prix</p>
                                        <p class="font-heading text-3xl font-extrabold text-tsm-navy">
                                            {{ $moto->price ? number_format((float) $moto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                        </p>
                                    </div>

                                    <a
                                        href="{{ route('motos.show', $moto->slug) }}"
                                        class="rounded-full bg-tsm-navy px-5 py-3 text-xs font-extrabold uppercase tracking-wide text-white transition hover:bg-tsm-yellow hover:text-tsm-dark">
                                        Voir la fiche
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $motos->onEachSide(1)->links('pagination.moto-lab') }}
                    </div>
                    @else
                    <div class="mt-8 overflow-hidden rounded-[1.8rem] border border-white/10 bg-tsm-navy/80 px-6 py-14 text-center shadow-2xl shadow-black/20">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-tsm-yellow font-heading text-3xl font-extrabold text-tsm-dark">
                            0
                        </div>

                        <h3 class="font-heading mt-6 text-4xl font-extrabold uppercase text-white">
                            Aucune moto trouvée
                        </h3>

                        <p class="mx-auto mt-3 max-w-md text-sm leading-6 text-white/60">
                            Essayez d'élargir les filtres ou de revenir au catalogue complet.
                        </p>

                        <a
                            href="{{ route('motos.index') }}"
                            class="mt-6 inline-flex rounded-full bg-tsm-yellow px-6 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark transition hover:bg-tsm-gold">
                            Voir tout le catalogue
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</body>

</html>