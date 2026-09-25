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

<body class="bg-tsm-dark font-sans text-white antialiased">
    <x-nav />

    <main>
        <section class="relative isolate overflow-hidden bg-tsm-dark">
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-35"
                style="background-image: url('{{ asset('images/Showroom.webp') }}');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-tsm-dark via-tsm-navy/95 to-tsm-blue/45"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_74%_22%,rgba(245,181,27,0.25),transparent_27%),radial-gradient(circle_at_18%_8%,rgba(18,63,131,0.62),transparent_34%)]"></div>
            <div class="absolute bottom-0 left-0 h-32 w-full bg-gradient-to-t from-tsm-dark to-transparent"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-12">
                <a
                    href="{{ route('motos.index') }}"
                    class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-bold text-white/70 transition hover:border-tsm-yellow hover:text-tsm-yellow">
                    <span>←</span>
                    Retour au catalogue
                </a>

                <div class="mt-8 grid gap-8 lg:grid-cols-[1.08fr_0.92fr] lg:items-center">
                    <div class="relative overflow-hidden rounded-[1.8rem] bg-tsm-light text-tsm-dark shadow-2xl shadow-black/30">
                        <div class="absolute left-5 top-5 z-20 flex flex-wrap gap-2">
                            @if ($moto->condition)
                                <span class="rounded-full bg-tsm-navy px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-white">
                                    {{ $moto->condition }}
                                </span>
                            @endif

                            @if ($moto->is_featured)
                                <span class="rounded-full bg-tsm-yellow px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-tsm-dark">
                                    Vedette
                                </span>
                            @endif
                        </div>

                        <div class="relative flex min-h-[360px] items-center justify-center overflow-hidden bg-gradient-to-br from-white via-slate-100 to-slate-200 sm:min-h-[520px]">
                            <div class="absolute h-72 w-72 rounded-full bg-tsm-yellow/25 blur-3xl"></div>
                            <div class="absolute inset-x-12 bottom-10 h-px bg-gradient-to-r from-transparent via-tsm-gold/50 to-transparent"></div>

                            <img
                                src="{{ $moto->image ? Storage::url($moto->image) : asset('images/hero-moto.png') }}"
                                alt="{{ $moto->name }}"
                                class="relative z-10 h-full max-h-[560px] w-full object-contain p-8 drop-shadow-2xl sm:p-12">
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-wrap items-center gap-2 text-[11px] font-extrabold uppercase tracking-[0.24em] text-tsm-yellow">
                            <span>{{ $moto->brand?->name ?? 'TSM Motors' }}</span>
                            <span class="text-white/35">/</span>
                            <span>{{ $moto->category?->name ?? 'Catalogue' }}</span>
                        </div>

                        <h1 class="font-heading mt-4 text-5xl font-extrabold uppercase leading-[0.9] tracking-tight text-white sm:text-6xl lg:text-7xl">
                            {{ $moto->name }}
                        </h1>

                        <p class="mt-5 max-w-2xl text-sm leading-7 text-white/68 sm:text-base">
                            {{ $moto->description ? Str::limit($moto->description, 190) : 'Une moto sélectionnée par TSM Motors pour les passionnés qui veulent du style, de la fiabilité et une présence immédiate sur la route.' }}
                        </p>

                        <div class="mt-7 overflow-hidden rounded-[1.5rem] border border-white/10 bg-tsm-navy/85 shadow-2xl shadow-black/20 backdrop-blur-xl">
                            <div class="border-b border-white/10 px-5 py-4">
                                <p class="text-xs font-extrabold uppercase tracking-[0.24em] text-tsm-yellow">Prix showroom</p>
                            </div>

                            <div class="flex flex-col gap-4 p-5 sm:flex-row sm:items-end sm:justify-between">
                                <p class="font-heading text-5xl font-extrabold uppercase text-white">
                                    {{ $moto->price ? number_format((float) $moto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                </p>

                                <a
                                    href="{{ route('contact.create') }}"
                                    class="inline-flex justify-center rounded-full bg-tsm-yellow px-6 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark shadow-lg shadow-tsm-yellow/20 transition hover:bg-tsm-gold">
                                    Demander plus d'infos
                                </a>
                            </div>
                        </div>

                        <div class="mt-5 grid grid-cols-3 gap-3">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/45">Année</p>
                                <p class="mt-1 font-heading text-2xl font-extrabold text-white">{{ $moto->year ?? '-' }}</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/45">CC</p>
                                <p class="mt-1 font-heading text-2xl font-extrabold text-white">{{ $moto->engine_cc ?? '-' }}</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/45">Km</p>
                                <p class="mt-1 font-heading text-2xl font-extrabold text-white">
                                    {{ $moto->mileage ? number_format($moto->mileage, 0, ',', ' ') : '-' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-tsm-dark py-14">
            <div class="absolute -left-40 top-28 h-80 w-80 rounded-full bg-tsm-yellow/10 blur-[110px]"></div>
            <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-tsm-blue/25 to-transparent"></div>

            <div class="relative mx-auto grid max-w-7xl gap-7 px-4 sm:px-6 lg:grid-cols-[1fr_340px] lg:px-8">
                <div class="space-y-7">
                    <section class="overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 p-5 shadow-2xl shadow-black/20 backdrop-blur-xl sm:p-6">
                        <div class="border-b border-white/10 pb-4">
                            <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">Fiche technique</p>
                            <h2 class="font-heading mt-1 text-4xl font-extrabold uppercase text-white">Spécifications</h2>
                        </div>

                        <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Marque</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->brand?->name ?? 'Non définie' }}</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Catégorie</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->category?->name ?? 'Non définie' }}</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Année</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->year ?? 'Non définie' }}</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Cylindrée</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->engine_cc ? $moto->engine_cc . ' cc' : 'Non définie' }}</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Kilométrage</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->mileage ? number_format($moto->mileage, 0, ',', ' ') . ' km' : 'Non défini' }}</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-tsm-dark/70 p-5">
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Condition</p>
                                <p class="mt-2 text-lg font-bold text-white">{{ $moto->condition ?? 'Non définie' }}</p>
                            </div>
                        </div>
                    </section>

                    <section class="overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 p-5 shadow-2xl shadow-black/20 backdrop-blur-xl sm:p-6">
                        <div class="border-b border-white/10 pb-4">
                            <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">Présentation</p>
                            <h2 class="font-heading mt-1 text-4xl font-extrabold uppercase text-white">Description</h2>
                        </div>

                        <div class="mt-5 max-w-none text-sm leading-7 text-white/65 sm:text-base">
                            @if ($moto->description)
                                {!! nl2br(e($moto->description)) !!}
                            @else
                                Cette fiche n'a pas encore de description détaillée. Contactez TSM Motors pour connaître les disponibilités, les options et les conditions.
                            @endif
                        </div>
                    </section>
                </div>

                <aside class="h-fit overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 p-5 shadow-2xl shadow-black/20 backdrop-blur-xl lg:sticky lg:top-24">
                    <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">
                        Intéressé ?
                    </p>

                    <h2 class="font-heading mt-2 text-4xl font-extrabold uppercase leading-none text-white">
                        Parlez avec TSM Motors.
                    </h2>

                    <p class="mt-4 text-sm leading-6 text-white/60">
                        Nous pouvons confirmer la disponibilité, préparer une visite showroom et vous orienter vers le bon modèle.
                    </p>

                    <div class="mt-6 grid gap-3">
                        <a
                            href="{{ route('contact.create') }}"
                            class="inline-flex min-h-12 items-center justify-center rounded-full bg-tsm-yellow px-5 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark shadow-lg shadow-tsm-yellow/20 transition hover:bg-tsm-gold">
                            Contacter le showroom
                        </a>

                        <a
                            href="{{ route('motos.index') }}"
                            class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/15 px-5 py-3 text-sm font-bold uppercase tracking-wide text-white/70 transition hover:border-tsm-yellow hover:bg-white/5 hover:text-tsm-yellow">
                            Voir d'autres motos
                        </a>
                    </div>

                    <div class="mt-6 border-t border-white/10 pt-5">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/40">Showroom</p>
                        <p class="mt-2 text-sm font-semibold text-white">Agadir, Maroc</p>
                        <p class="mt-1 text-sm text-white/55">Essai, conseil, maintenance et accessoires.</p>
                    </div>
                </aside>
            </div>
        </section>

        @if ($relatedMotos->isNotEmpty())
            <section class="relative overflow-hidden bg-tsm-navy py-14">
                <div class="absolute -right-40 top-10 h-80 w-80 rounded-full bg-tsm-yellow/10 blur-[110px]"></div>

                <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                        <div>
                            <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow">
                                Suggestions
                            </p>

                            <h2 class="font-heading mt-2 text-4xl font-extrabold uppercase text-white sm:text-5xl">
                                Motos similaires
                            </h2>
                        </div>

                        <a href="{{ route('motos.index') }}" class="inline-flex w-fit items-center gap-2 rounded-full border border-white/15 px-5 py-2.5 text-sm font-bold text-white transition hover:border-tsm-yellow hover:text-tsm-yellow">
                            Voir tout le catalogue
                            <span>→</span>
                        </a>
                    </div>

                    <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($relatedMotos as $relatedMoto)
                            <a
                                href="{{ route('motos.show', $relatedMoto->slug) }}"
                                class="group relative overflow-hidden rounded-[1.6rem] bg-tsm-light text-tsm-dark shadow-2xl shadow-black/20 transition duration-300 hover:-translate-y-1 hover:shadow-tsm-yellow/10">
                                <div class="relative flex h-52 items-center justify-center overflow-hidden bg-gradient-to-br from-white via-slate-100 to-slate-200">
                                    <div class="absolute h-36 w-36 rounded-full bg-tsm-yellow/25 blur-3xl transition duration-500 group-hover:scale-125"></div>

                                    <img
                                        src="{{ $relatedMoto->image ? Storage::url($relatedMoto->image) : asset('images/hero-moto.png') }}"
                                        alt="{{ $relatedMoto->name }}"
                                        class="relative z-10 h-full w-full object-contain p-6 transition duration-500 group-hover:scale-110">
                                </div>

                                <div class="p-5">
                                    <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-tsm-gold">
                                        {{ $relatedMoto->brand?->name ?? 'TSM Motors' }}
                                    </p>

                                    <h3 class="font-heading mt-2 min-h-[3rem] text-3xl font-extrabold uppercase leading-none text-tsm-dark transition group-hover:text-tsm-blue">
                                        {{ $relatedMoto->name }}
                                    </h3>

                                    <p class="mt-4 font-heading text-3xl font-extrabold text-tsm-navy">
                                        {{ $relatedMoto->price ? number_format((float) $relatedMoto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>

    <x-footer />
</body>

</html>
