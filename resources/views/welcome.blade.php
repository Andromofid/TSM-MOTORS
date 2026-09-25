<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TSM Motors Agadir</title>

    <meta
        name="description"
        content="Découvrez les motos Suzuki, l'atelier, la location et les accessoires chez TSM Motors Agadir.">

    {{-- Fonts --}}
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
        h4,
        .font-heading {
            font-family: 'Barlow Condensed', sans-serif;
        }
    </style>
</head>

<body class="bg-tsm-dark font-sans text-white antialiased">
    <x-nav/>

    <main>
        <section
            id="home"
            class="relative isolate overflow-hidden bg-tsm-dark">

            {{-- Background image --}}
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/Showroom.webp') }}');">
            </div>

            {{-- Dark overlays --}}
            <div class="absolute inset-0 bg-tsm-dark/70"></div>

            <div
                class="absolute inset-0
               bg-[radial-gradient(circle_at_center,rgba(18,63,131,0.22),transparent_45%)]">
            </div>

            <div
                class="absolute inset-0
               bg-gradient-to-b
               from-tsm-dark/35
               via-tsm-dark/45
               to-tsm-dark/90">
            </div>

            {{-- Main content --}}
            <div
                class="relative z-10 mx-auto flex
               min-h-[620px]
               max-w-5xl
               flex-col
               items-center
               justify-center
               px-4
               py-16
               text-center
               sm:px-6
               lg:min-h-[680px]
               lg:px-8">

                {{-- Eyebrow --}}
                <p
                    class="inline-flex items-center gap-3
                   border-l-4 border-tsm-yellow
                   bg-tsm-dark/45
                   px-4 py-2
                   text-[10px]
                   font-extrabold
                   uppercase
                   tracking-[0.28em]
                   text-tsm-yellow
                   backdrop-blur-md
                   sm:text-xs
                   sm:tracking-[0.32em]">
                    TSM Motors Agadir
                </p>

                {{-- Heading --}}
                <h1
                    class="font-heading
                   mt-6
                   max-w-4xl
                   text-5xl
                   font-extrabold
                   uppercase
                   leading-[0.9]
                   tracking-tight
                   text-white
                   sm:text-6xl
                   md:text-7xl
                   lg:text-8xl">
                    La puissance

                    <span class="block text-tsm-yellow">
                        à l'état pur.
                    </span>
                </h1>

                {{-- Subtitle --}}
                <p
                    class="mt-5 text-base
                   font-semibold
                   text-white/95
                   sm:text-lg
                   lg:text-xl">
                    Revendeur Officiel Suzuki à Agadir
                </p>

                {{-- Description --}}
                <p
                    class="mt-4 max-w-2xl
                   text-sm
                   leading-7
                   text-white/70
                   sm:text-base">
                    Vente de motos, atelier de maintenance, location et accessoires
                    dans un showroom pensé pour les passionnés de deux roues.
                </p>

                {{-- Search bar --}}
                <form
                    action="{{ route('motos.index') }}"
                    method="GET"
                    class="mt-8 w-full max-w-3xl">
                    <div
                        class="flex flex-col
                       gap-2
                       rounded-2xl
                       border border-white/15
                       bg-white/95
                       p-2
                       shadow-2xl
                       backdrop-blur-md
                       sm:flex-row
                       sm:rounded-full">

                        <div class="relative flex-1">

                            {{-- Search icon --}}
                            <svg
                                class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-tsm-muted"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m21 21-4.35-4.35m1.35-5.65A7 7 0 1 1 4 11a7 7 0 0 1 14 0Z" />
                            </svg>

                            <input
                                type="text"
                                name="q"
                                placeholder="Rechercher une moto, marque ou modèle..."
                                class="w-full
                               rounded-xl
                               border-0
                               bg-transparent
                               py-3.5
                               pl-12
                               pr-4
                               text-sm
                               text-tsm-dark
                               placeholder:text-tsm-muted
                               focus:outline-none
                               focus:ring-0
                               sm:rounded-full">
                        </div>

                        <button
                            type="submit"
                            class="inline-flex
                           items-center
                           justify-center
                           rounded-xl
                           bg-tsm-yellow
                           px-7
                           py-3.5
                           text-sm
                           font-extrabold
                           uppercase
                           tracking-wide
                           text-tsm-dark
                           shadow-lg
                           shadow-tsm-yellow/20
                           transition
                           hover:bg-tsm-gold
                           sm:rounded-full">
                            Rechercher
                        </button>

                    </div>
                </form>

                {{-- Buttons --}}
                <div
                    class="mt-5 flex
                   flex-col
                   gap-3
                   sm:flex-row">
                    <a
                        href="#motos"
                        class="inline-flex
                       items-center
                       justify-center
                       rounded-full
                       bg-tsm-yellow
                       px-7
                       py-3
                       text-xs
                       font-extrabold
                       uppercase
                       tracking-wide
                       text-tsm-dark
                       transition
                       hover:bg-tsm-gold
                       sm:text-sm">
                        Découvrir la gamme
                    </a>

                    <a
                        href="{{ route('contact.create') }}"
                        class="inline-flex
                       items-center
                       justify-center
                       rounded-full
                       border border-white/30
                       bg-tsm-dark/35
                       px-7
                       py-3
                       text-xs
                       font-bold
                       text-white
                       backdrop-blur
                       transition
                       hover:border-tsm-yellow
                       hover:text-tsm-yellow
                       sm:text-sm">
                        Contacter le showroom
                    </a>
                </div>
            </div>

        </section>

        <section id="marques" class="border-y border-white/10 bg-tsm-dark">
            <div class="mx-auto flex max-w-7xl flex-col gap-5 px-4 py-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
                <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow lg:w-44">
                    Marques au showroom
                </p>

                <div class="flex flex-wrap items-center gap-x-10 gap-y-3">
                    @foreach ($brands as $brand)
                    <span class="font-heading text-2xl font-extrabold uppercase tracking-wide text-white/80">
                        {{ $brand->name }}
                    </span>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="motos" class="relative overflow-hidden bg-tsm-navy py-14">
            <div class="absolute -left-40 top-16 h-80 w-80 rounded-full bg-tsm-yellow/10 blur-[110px]"></div>
            <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-tsm-blue/35 to-transparent"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow">Sélection showroom</p>
                        <h2 class="font-heading mt-2 text-4xl font-extrabold uppercase text-white sm:text-5xl">
                            Nos Motos Vedettes
                        </h2>
                    </div>

                    <a href="{{ route('motos.index') }}" class="inline-flex w-fit items-center gap-2 rounded-full border border-white/15 px-5 py-2.5 text-sm font-bold text-white transition hover:border-tsm-yellow hover:text-tsm-yellow">
                        Voir toutes les motos
                        <span>→</span>
                    </a>
                </div>

                @if($motos->isEmpty())
                <div class="mt-8 rounded-3xl border border-white/10 bg-white/5 px-6 py-12 text-center text-white/70">
                    Aucune moto disponible pour le moment.
                </div>
                @else
                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($motos as $moto)
                    <article class="group relative overflow-hidden rounded-[1.6rem] bg-tsm-light text-tsm-dark shadow-2xl shadow-black/20 transition duration-300 hover:-translate-y-1 hover:shadow-tsm-yellow/10">
                        <div class="absolute right-0 top-0 z-20 rounded-bl-2xl bg-tsm-yellow px-3 py-2 text-[10px] font-extrabold uppercase tracking-[0.18em] text-tsm-dark">
                            Disponible
                        </div>

                        <div class="relative flex h-48 items-center justify-center overflow-hidden bg-gradient-to-br from-white via-slate-100 to-slate-200">
                            <div class="absolute h-36 w-36 rounded-full bg-tsm-yellow/25 blur-3xl transition group-hover:scale-125"></div>

                            <a href="{{ route('motos.show', $moto->slug) }}" class="relative z-10 h-full w-full">
                                <img
                                    src="{{ $moto->image ? Storage::url($moto->image) : asset('images/hero-moto.png') }}"
                                    alt="{{ $moto->name }}"
                                    class="h-full w-full object-contain p-5 transition duration-500 group-hover:scale-110">
                            </a>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-tsm-gold">
                                {{ $moto->brand?->name ?? 'Suzuki' }}
                            </p>

                            <a href="{{ route('motos.show', $moto->slug) }}">
                                <h3 class="font-heading mt-1 min-h-[3rem] text-2xl font-extrabold uppercase leading-none text-tsm-dark transition group-hover:text-tsm-blue">
                                    {{ $moto->name }}
                                </h3>
                            </a>

                            <div class="mt-4 grid grid-cols-3 gap-2 border-y border-slate-200 py-3 text-center">
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">Année</p>
                                    <p class="mt-1 text-xs font-extrabold">{{ $moto->year ?? '-' }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">CC</p>
                                    <p class="mt-1 text-xs font-extrabold">{{ $moto->engine_cc ?? '-' }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-tsm-muted">Cat.</p>
                                    <p class="mt-1 truncate text-xs font-extrabold">{{ $moto->category?->name ?? '-' }}</p>
                                </div>
                            </div>

                            <div class="mt-4 flex items-center justify-between gap-3">
                                <p class="font-heading text-2xl font-extrabold text-tsm-navy">
                                    {{ $moto->price ? number_format((float) $moto->price, 0, ',', ' ') . ' DH' : 'Sur demande' }}
                                </p>

                                <a href="{{ route('motos.show', $moto->slug) }}" class="rounded-full bg-tsm-navy px-4 py-2 text-xs font-extrabold uppercase text-white transition hover:bg-tsm-yellow hover:text-tsm-dark">
                                    Voir la fiche
                                </a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                @endif
            </div>
        </section>

        <section id="services" class="bg-tsm-dark py-14">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow">Expertise TSM</p>
                        <h2 class="font-heading mt-2 text-4xl font-extrabold uppercase text-white sm:text-5xl">
                            Nos Services d'Expertise
                        </h2>
                    </div>
                    <p class="max-w-lg text-sm leading-6 text-white/60">
                        Un accompagnement complet avant, pendant et après l'achat de votre moto.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <a href="{{ route('motos.index') }}" class="group relative min-h-[260px] overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-surface">
                        <img src="{{ asset('images/hero-moto1.png') }}" alt="Vente moto TSM Motors" class="absolute inset-0 h-full w-full object-cover opacity-75 transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-tsm-dark via-tsm-dark/55 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-5">
                            <span class="block h-1 w-10 bg-tsm-yellow"></span>
                            <h3 class="font-heading mt-4 text-3xl font-extrabold uppercase text-white">Vente</h3>
                            <p class="mt-2 text-sm text-white/65">Motos et conseils showroom.</p>
                        </div>
                    </a>

                    <a href="{{ route('contact.create') }}" class="group relative min-h-[260px] overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-surface">
                        <img src="{{ asset('images/Showroom.webp') }}" alt="Atelier TSM Motors" class="absolute inset-0 h-full w-full object-cover opacity-70 transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-tsm-dark via-tsm-dark/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-5">
                            <span class="block h-1 w-10 bg-tsm-yellow"></span>
                            <h3 class="font-heading mt-4 text-3xl font-extrabold uppercase text-white">Atelier</h3>
                            <p class="mt-2 text-sm text-white/65">Maintenance et entretien.</p>
                        </div>
                    </a>

                    <a id="location" href="{{ route('contact.create') }}" class="group relative min-h-[260px] overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-surface">
                        <img src="{{ asset('images/hero-moto.png') }}" alt="Location moto TSM Motors" class="absolute inset-0 h-full w-full object-cover opacity-70 transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-tsm-dark via-tsm-dark/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-5">
                            <span class="block h-1 w-10 bg-tsm-yellow"></span>
                            <h3 class="font-heading mt-4 text-3xl font-extrabold uppercase text-white">Location</h3>
                            <p class="mt-2 text-sm text-white/65">Réservez votre expérience.</p>
                        </div>
                    </a>

                    <a id="accessoires" href="{{ route('contact.create') }}" class="group relative min-h-[260px] overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-surface">
                        <img src="{{ asset('images/hero-moto1.png') }}" alt="Accessoires moto TSM Motors" class="absolute inset-0 h-full w-full object-cover opacity-70 transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-tsm-dark via-tsm-dark/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-5">
                            <span class="block h-1 w-10 bg-tsm-yellow"></span>
                            <h3 class="font-heading mt-4 text-3xl font-extrabold uppercase text-white">Accessoires</h3>
                            <p class="mt-2 text-sm text-white/65">Équipements et pièces.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-tsm-navy py-12">
            <div class="absolute inset-y-0 right-0 w-1/2 bg-tsm-blue/40"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="border-l border-white/10 pl-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-tsm-yellow text-tsm-dark">
                            <span class="font-heading text-xl font-extrabold">01</span>
                        </div>
                        <h3 class="font-heading text-2xl font-extrabold uppercase text-white">Revendeur Suzuki officiel</h3>
                        <p class="mt-2 text-sm leading-6 text-white/60">Un point de vente Suzuki à Agadir avec accompagnement personnalisé.</p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-tsm-yellow text-tsm-dark">
                            <span class="font-heading text-xl font-extrabold">02</span>
                        </div>
                        <h3 class="font-heading text-2xl font-extrabold uppercase text-white">Équipe expérimentée</h3>
                        <p class="mt-2 text-sm leading-6 text-white/60">Des conseils clairs pour choisir la moto adaptée à votre usage.</p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-tsm-yellow text-tsm-dark">
                            <span class="font-heading text-xl font-extrabold">03</span>
                        </div>
                        <h3 class="font-heading text-2xl font-extrabold uppercase text-white">Atelier & entretien</h3>
                        <p class="mt-2 text-sm leading-6 text-white/60">Diagnostic, maintenance et préparation dans notre atelier.</p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-tsm-yellow text-tsm-dark">
                            <span class="font-heading text-xl font-extrabold">04</span>
                        </div>
                        <h3 class="font-heading text-2xl font-extrabold uppercase text-white">Showroom à Agadir</h3>
                        <p class="mt-2 text-sm leading-6 text-white/60">Un espace moderne pour découvrir motos, accessoires et services.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="bg-tsm-light py-14 text-tsm-dark">
            <div class="mx-auto grid max-w-7xl items-center gap-8 px-4 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">
                <div class="relative">
                    <div class="absolute -left-4 -top-4 h-28 w-28 rounded-3xl bg-tsm-yellow"></div>
                    <div class="relative overflow-hidden rounded-[1.8rem] shadow-card-hover">
                        <img
                            src="{{ asset('images/Showroom.webp') }}"
                            alt="Showroom TSM Motors Agadir"
                            class="h-[360px] w-full object-cover sm:h-[430px]">
                    </div>
                    <div class="absolute bottom-5 right-5 rounded-2xl bg-tsm-navy px-5 py-4 text-white shadow-2xl">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-tsm-yellow">Agadir</p>
                        <p class="font-heading text-3xl font-extrabold uppercase">Showroom</p>
                    </div>
                </div>

                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-gold">
                        À propos de notre showroom
                    </p>
                    <h2 class="font-heading mt-3 text-5xl font-extrabold uppercase leading-none text-tsm-navy sm:text-6xl">
                        Votre partenaire moto de confiance à Agadir
                    </h2>
                    <p class="mt-5 text-base leading-7 text-tsm-muted">
                        TSM Motors accompagne ses clients dans le choix, l'entretien et l'expérience de leur moto. Notre showroom réunit vente, atelier, location et accessoires dans une ambiance premium.
                    </p>
                    <p class="mt-4 text-sm leading-7 text-tsm-muted">
                        Passez nous voir pour découvrir les motos Suzuki, préparer un essai ou obtenir un conseil atelier adapté à votre usage.
                    </p>

                    <a href="{{ route('contact.create') }}" class="mt-7 inline-flex rounded-full bg-tsm-navy px-7 py-3 text-sm font-extrabold uppercase tracking-wide text-white transition hover:bg-tsm-blue">
                        En savoir plus
                    </a>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-tsm-dark">
            <div class="absolute inset-0">
                <img src="{{ asset('images/hero-moto1.png') }}" alt="Expérience Suzuki TSM Motors" class="h-full w-full object-cover opacity-55">
                <div class="absolute inset-0 bg-gradient-to-r from-tsm-dark via-tsm-navy/85 to-tsm-blue/45"></div>
            </div>

            <div class="relative mx-auto flex min-h-[360px] max-w-7xl items-center px-4 py-14 sm:px-6 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow">Expérience Suzuki</p>
                    <h2 class="font-heading mt-3 text-5xl font-extrabold uppercase leading-none text-white sm:text-6xl">
                        Prêt à vivre
                        <span class="block text-tsm-yellow">l'expérience Suzuki ?</span>
                    </h2>
                    <a href="{{ route('contact.create') }}" class="mt-7 inline-flex rounded-full bg-tsm-yellow px-7 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark transition hover:bg-tsm-gold">
                        Contacter le showroom
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 bg-tsm-dark">
        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-5">
                <div class="lg:col-span-2">
                    <img src="{{ asset('images/logo.png') }}" alt="TSM Motors Logo" class="h-14 w-auto">
                    <p class="mt-4 max-w-sm text-sm leading-6 text-white/60">
                        TSM Motors Agadir, revendeur Suzuki, showroom moto, atelier, location et accessoires.
                    </p>
                </div>

                <div>
                    <h4 class="font-heading text-xl font-extrabold uppercase text-white">Navigation</h4>
                    <div class="mt-4 flex flex-col gap-2 text-sm text-white/60">
                        <a href="{{ route('home') }}#home" class="hover:text-tsm-yellow">Accueil</a>
                        <a href="{{ route('motos.index') }}" class="hover:text-tsm-yellow">Motos</a>
                        <a href="{{ route('home') }}#services" class="hover:text-tsm-yellow">Services</a>
                        <a href="{{ route('contact.create') }}" class="hover:text-tsm-yellow">Contact</a>
                    </div>
                </div>

                <div>
                    <h4 class="font-heading text-xl font-extrabold uppercase text-white">Services</h4>
                    <div class="mt-4 flex flex-col gap-2 text-sm text-white/60">
                        <a href="{{ route('motos.index') }}" class="hover:text-tsm-yellow">Motos Suzuki</a>
                        <a href="{{ route('home') }}#services" class="hover:text-tsm-yellow">Atelier</a>
                        <a href="{{ route('home') }}#location" class="hover:text-tsm-yellow">Location</a>
                        <a href="{{ route('home') }}#accessoires" class="hover:text-tsm-yellow">Accessoires</a>
                    </div>
                </div>

                <div>
                    <h4 class="font-heading text-xl font-extrabold uppercase text-white">Contact</h4>
                    <div class="mt-4 space-y-2 text-sm text-white/60">
                        <p>Agadir, Maroc</p>
                        <p>+212 6 89 49 75 06<br>+212 6 84 60 25 60</p>
                        <p>contact@tsmmotors.ma</p>
                    </div>

                    <div class="mt-4 flex gap-2">
                        <a href="https://www.instagram.com/tsm_motors_agadir/" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-xs font-bold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow hover:text-tsm-dark">
                            IG
                        </a>
                        <a href="https://web.facebook.com/people/TSM-Motors-Agadir/61584669695694/" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-xs font-bold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow hover:text-tsm-dark">
                            FB
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex flex-col justify-between gap-3 border-t border-white/10 pt-5 text-xs text-white/45 sm:flex-row">
                <p>© {{ date('Y') }} TSM Motors Agadir. Tous droits réservés.</p>
                <p>Agadir, Maroc</p>
            </div>
        </div>
    </footer>

    <script>
        const homeMenuButton = document.getElementById('homeMenuButton');
        const homeMobileMenu = document.getElementById('homeMobileMenu');

        homeMenuButton?.addEventListener('click', () => {
            homeMobileMenu?.classList.toggle('hidden');
        });

        homeMobileMenu?.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                homeMobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>

</html>