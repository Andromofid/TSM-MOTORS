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

<body class="bg-tsm-dark text-tsm-light antialiased">
    <x-nav />

    <main>
        <section class="relative overflow-hidden border-b border-tsm-border">
            <div class="pointer-events-none absolute -right-28 -top-28 h-80 w-80 rounded-full bg-tsm-yellow/20 blur-[110px] lg:h-[520px] lg:w-[520px]"></div>
            <div class="pointer-events-none absolute bottom-0 left-10 h-72 w-72 rounded-full bg-white/5 blur-[100px]"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="max-w-3xl">
                    <span class="inline-flex rounded-full border border-tsm-yellow/30 bg-tsm-yellow/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-tsm-yellow">
                        Catalogue TSM Motors
                    </span>

                    <h1 class="font-heading mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Trouvez la moto qui vous appelle.
                    </h1>

                    <p class="mt-5 max-w-2xl text-base leading-7 text-tsm-muted sm:text-lg">
                        Filtrez les modèles disponibles par marque, catégorie, condition et budget. Le garage est calme, les machines attendent.
                    </p>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
            <div class="rounded-2xl border border-tsm-border bg-tsm-surface shadow-2xl shadow-black/20">

                {{-- Mobile filter dropdown --}}
                <details class="group lg:hidden">
                    <summary
                        class="flex cursor-pointer list-none items-center justify-between gap-4 px-4 py-4">

                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-tsm-yellow/10 text-tsm-yellow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.8"
                                    stroke="currentColor"
                                    class="h-5 w-5">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M10.5 6h9m-15 6h15m-12 6h12" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-bold text-white">
                                    Filtrer les motos
                                </p>

                                <p class="text-xs text-tsm-muted">
                                    Marque, catégorie, prix...
                                </p>
                            </div>
                        </div>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-5 w-5 text-tsm-muted transition-transform duration-200 group-open:rotate-180">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </summary>

                    <div class="border-t border-tsm-border p-4">
                        @include('components.moto-filters')
                    </div>
                </details>


                {{-- Desktop filters --}}
                <div class="hidden p-6 lg:block">
                    @include('components.moto-filters')
                </div>

            </div>

            <div class="mt-8 flex flex-col justify-between gap-3 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-tsm-yellow">
                        Résultats
                    </p>

                    <h2 class="font-heading mt-2 text-2xl font-bold text-white">
                        {{ $motos->total() }} moto(s) trouvée(s)
                    </h2>
                </div>

                <p class="text-sm text-tsm-muted">
                    Page {{ $motos->currentPage() }} sur {{ $motos->lastPage() }}
                </p>
            </div>

            @if ($motos->isNotEmpty())
            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($motos as $moto)
                <article class="group overflow-hidden rounded-3xl border border-tsm-border bg-tsm-surface transition duration-300 hover:-translate-y-1 hover:border-tsm-yellow/70 hover:shadow-2xl hover:shadow-tsm-yellow/10">
                    <div class="relative flex h-64 items-center justify-center overflow-hidden bg-tsm-dark">
                        <div class="absolute h-36 w-36 rounded-full bg-tsm-yellow/15 blur-3xl transition group-hover:bg-tsm-yellow/25"></div>

                        <a href="{{ route('motos.show', $moto->slug) }}" class="relative z-10 h-full w-full">
                            <img
                                src="{{ $moto->image ? Storage::url($moto->image) : asset('images/hero-moto.png') }}"
                                alt="{{ $moto->name }}"
                                class="h-full w-full object-contain p-6 transition duration-500 group-hover:scale-105">
                        </a>

                        @if ($moto->condition)
                        <span class="absolute left-4 top-4 rounded-full border border-white/10 bg-tsm-surface/90 px-3 py-1 text-xs font-bold text-white backdrop-blur">
                            {{ $moto->condition }}
                        </span>
                        @endif

                        @if ($moto->is_featured)
                        <span class="absolute right-4 top-4 rounded-full bg-tsm-yellow px-3 py-1 text-xs font-bold text-white">
                            Vedette
                        </span>
                        @endif
                    </div>

                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-2 text-xs font-bold uppercase tracking-[0.16em] text-tsm-yellow">
                            <span>{{ $moto->brand?->name ?? 'Marque' }}</span>
                            <span class="text-tsm-muted">/</span>
                            <span>{{ $moto->category?->name ?? 'Catégorie' }}</span>
                        </div>

                        <a href="{{ route('motos.show', $moto->slug) }}" class="group/title">
                            <h3 class="font-heading mt-3 text-xl font-bold text-white transition group-hover/title:text-tsm-yellow">
                                {{ $moto->name }}
                            </h3>
                        </a>

                        <div class="mt-5 grid grid-cols-3 gap-3 rounded-2xl border border-tsm-border bg-tsm-dark/50 p-3 text-center">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-tsm-muted">Année</p>
                                <p class="mt-1 text-sm font-semibold text-white">{{ $moto->year ?? '-' }}</p>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-tsm-muted">CC</p>
                                <p class="mt-1 text-sm font-semibold text-white">{{ $moto->engine_cc ?? '-' }}</p>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-tsm-muted">Km</p>
                                <p class="mt-1 text-sm font-semibold text-white">
                                    {{ $moto->mileage ? number_format($moto->mileage, 0, ',', ' ') : '-' }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-5 flex items-center justify-between gap-4">
                            <div>
                                <p class="text-xs text-tsm-muted">Prix</p>
                                <p class="font-heading text-xl font-bold text-white">
                                    {{ $moto->price ? number_format((float) $moto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                </p>
                            </div>

                            <a
                                href="{{ route('motos.show', $moto->slug) }}"
                                class="rounded-xl border border-tsm-border px-4 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
                                Voir détails
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
            <div class="mt-8 rounded-3xl border border-tsm-border bg-tsm-surface px-6 py-16 text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-tsm-yellow/10 font-heading text-2xl font-bold text-tsm-yellow">
                    M
                </div>

                <h3 class="font-heading mt-6 text-2xl font-bold text-white">
                    Aucune moto trouvée
                </h3>

                <p class="mx-auto mt-3 max-w-md text-sm leading-6 text-tsm-muted">
                    Essayez d'élargir les filtres ou de revenir au catalogue complet.
                </p>

                <a
                    href="{{ route('motos.index') }}"
                    class="mt-6 inline-flex rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                    Voir tout le catalogue
                </a>
            </div>
            @endif
        </section>
    </main>

    <x-footer />
</body>

</html>
