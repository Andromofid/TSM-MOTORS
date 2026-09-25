<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $moto->name }} - TSM Motors Agadir</title>

    <meta
        name="description"
        content="{{ Str::limit($moto->description ?: 'Découvrez cette moto disponible chez TSM Motors Agadir.', 155) }}">

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
            <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-tsm-yellow/20 blur-[120px] lg:h-[620px] lg:w-[620px]"></div>
            <div class="pointer-events-none absolute -bottom-24 left-0 h-72 w-72 rounded-full bg-white/5 blur-[110px]"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-14">
                <a
                    href="{{ route('motos.index') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-tsm-muted transition hover:text-white">
                    <span>←</span>
                    Retour au catalogue
                </a>

                <div class="mt-8 grid gap-8 lg:grid-cols-[1.08fr_0.92fr] lg:items-center">
                    <div class="relative overflow-hidden rounded-[2rem] border border-tsm-border bg-tsm-surface shadow-2xl shadow-black/25">
                        <div class="absolute left-8 top-8 z-20 flex flex-wrap gap-2">
                            @if ($moto->condition)
                                <span class="rounded-full border border-white/10 bg-tsm-dark/80 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white backdrop-blur">
                                    {{ $moto->condition }}
                                </span>
                            @endif

                            @if ($moto->is_featured)
                                <span class="rounded-full bg-tsm-yellow px-4 py-2 text-xs font-bold uppercase tracking-wider text-white">
                                    Vedette
                                </span>
                            @endif
                        </div>

                        <div class="relative flex min-h-[340px] items-center justify-center overflow-hidden bg-tsm-dark sm:min-h-[460px]">
                            <div class="absolute h-56 w-56 rounded-full bg-tsm-yellow/15 blur-3xl sm:h-72 sm:w-72"></div>
                            <div class="absolute inset-x-10 bottom-8 h-px bg-gradient-to-r from-transparent via-tsm-yellow/40 to-transparent"></div>

                            <img
                                src="{{ $moto->image ? Storage::url($moto->image) : asset('images/hero-moto.png') }}"
                                alt="{{ $moto->name }}"
                                class="relative z-10 h-full max-h-[520px] w-full object-contain p-8 sm:p-12">
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-wrap items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-tsm-yellow">
                            <span>{{ $moto->brand?->name ?? 'TSM Motors' }}</span>
                            <span class="text-tsm-muted">/</span>
                            <span>{{ $moto->category?->name ?? 'Catalogue' }}</span>
                        </div>

                        <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                            {{ $moto->name }}
                        </h1>

                        <p class="mt-5 max-w-2xl text-base leading-7 text-tsm-muted">
                            {{ $moto->description ? Str::limit($moto->description, 180) : 'Une moto sélectionnée par TSM Motors pour les passionnés qui veulent du style, de la fiabilité et une présence immédiate sur la route.' }}
                        </p>

                        <div class="mt-8 rounded-3xl border border-tsm-border bg-tsm-surface p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-tsm-muted">
                                Prix
                            </p>

                            <div class="mt-2 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                                <p class="font-heading text-4xl font-extrabold text-white">
                                    {{ $moto->price ? number_format((float) $moto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                </p>

                                <a
                                    href="{{ route('contact.create') }}"
                                    class="inline-flex justify-center rounded-xl bg-tsm-yellow px-6 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                                    Demander plus d'infos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto grid max-w-7xl gap-8 px-4 py-10 sm:px-6 lg:grid-cols-[1fr_360px] lg:px-8 lg:py-16">
            <div class="space-y-8">
                <div class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
                    <h2 class="font-heading text-2xl font-bold text-white">
                        Spécifications
                    </h2>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Marque</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->brand?->name ?? 'Non définie' }}</p>
                        </div>

                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Catégorie</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->category?->name ?? 'Non définie' }}</p>
                        </div>

                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Année</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->year ?? 'Non définie' }}</p>
                        </div>

                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Cylindrée</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->engine_cc ? $moto->engine_cc . ' cc' : 'Non définie' }}</p>
                        </div>

                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Kilométrage</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->mileage ? number_format($moto->mileage, 0, ',', ' ') . ' km' : 'Non défini' }}</p>
                        </div>

                        <div class="rounded-2xl border border-tsm-border bg-tsm-dark/50 p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Condition</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $moto->condition ?? 'Non définie' }}</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
                    <h2 class="font-heading text-2xl font-bold text-white">
                        Description
                    </h2>

                    <div class="mt-5 max-w-none text-sm leading-7 text-tsm-muted sm:text-base">
                        @if ($moto->description)
                            {!! nl2br(e($moto->description)) !!}
                        @else
                            Cette fiche n'a pas encore de description détaillée. Contactez TSM Motors pour connaître les disponibilités, les options et les conditions.
                        @endif
                    </div>
                </div>
            </div>

            <aside class="h-fit rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 lg:sticky lg:top-28">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-tsm-yellow">
                    Intéressé ?
                </p>

                <h2 class="font-heading mt-3 text-2xl font-bold text-white">
                    Parlez avec TSM Motors.
                </h2>

                <p class="mt-3 text-sm leading-6 text-tsm-muted">
                    Nous pouvons confirmer la disponibilité, préparer une visite showroom et vous orienter vers le bon modèle.
                </p>

                <div class="mt-6 space-y-3 text-sm">
                    <a
                        href="{{ route('contact.create') }}"
                        class="flex w-full justify-center rounded-xl bg-tsm-yellow px-5 py-3 font-bold text-white transition hover:bg-tsm-gold">
                        Contacter le showroom
                    </a>

                    <a
                        href="{{ route('motos.index') }}"
                        class="flex w-full justify-center rounded-xl border border-tsm-border px-5 py-3 font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-blue">
                        Voir d'autres motos
                    </a>
                </div>
            </aside>
        </section>

        @if ($relatedMotos->isNotEmpty())
            <section class="mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-8 lg:pb-20">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-tsm-yellow">
                            Suggestions
                        </p>

                        <h2 class="font-heading mt-2 text-3xl font-bold text-white">
                            Motos similaires
                        </h2>
                    </div>

                    <a href="{{ route('motos.index') }}" class="text-sm font-semibold text-tsm-muted transition hover:text-white">
                        Voir tout le catalogue →
                    </a>
                </div>

                <div class="mt-8 grid gap-6 md:grid-cols-3">
                    @foreach ($relatedMotos as $relatedMoto)
                        <a
                            href="{{ route('motos.show', $relatedMoto->slug) }}"
                            class="group overflow-hidden rounded-3xl border border-tsm-border bg-tsm-surface transition duration-300 hover:-translate-y-1 hover:border-tsm-yellow/70">
                            <div class="relative flex h-52 items-center justify-center overflow-hidden bg-tsm-dark">
                                <div class="absolute h-28 w-28 rounded-full bg-tsm-yellow/15 blur-3xl"></div>

                                <img
                                    src="{{ $relatedMoto->image ? Storage::url($relatedMoto->image) : asset('images/hero-moto.png') }}"
                                    alt="{{ $relatedMoto->name }}"
                                    class="relative z-10 h-full w-full object-contain p-6 transition duration-500 group-hover:scale-105">
                            </div>

                            <div class="p-5">
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-tsm-yellow">
                                    {{ $relatedMoto->brand?->name ?? 'TSM Motors' }}
                                </p>

                                <h3 class="font-heading mt-2 text-lg font-bold text-white">
                                    {{ $relatedMoto->name }}
                                </h3>

                                <p class="mt-3 font-heading text-xl font-bold text-white">
                                    {{ $relatedMoto->price ? number_format((float) $relatedMoto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </main>

    <x-footer />
</body>

</html>
