<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - TSM Motors Agadir</title>

    <meta
        name="description"
        content="Contactez TSM Motors Agadir pour une moto, une disponibilité showroom ou une demande d'information.">

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
            <div class="pointer-events-none absolute -right-28 -top-28 h-96 w-96 rounded-full bg-tsm-yellow/20 blur-[120px] lg:h-[560px] lg:w-[560px]"></div>
            <div class="pointer-events-none absolute bottom-0 left-8 h-72 w-72 rounded-full bg-white/5 blur-[100px]"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="max-w-3xl">
                    <span class="inline-flex rounded-full border border-tsm-yellow/30 bg-tsm-yellow/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-tsm-yellow">
                        Contact TSM Motors
                    </span>

                    <h1 class="font-heading mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Parlons de votre prochaine moto.
                    </h1>

                    <p class="mt-5 max-w-2xl text-base leading-7 text-tsm-muted sm:text-lg">
                        Une question sur un modèle, une disponibilité ou une visite showroom ? Envoyez-nous un message, on vous répond rapidement.
                    </p>
                </div>
            </div>
        </section>

        <section class="mx-auto grid max-w-7xl gap-8 px-4 py-10 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-16">
            <aside class="space-y-5">
                <div class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-tsm-yellow">
                        Showroom
                    </p>

                    <h2 class="font-heading mt-3 text-2xl font-bold text-white">
                        TSM Motors Agadir
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-tsm-muted">
                        Venez découvrir nos motos directement au showroom ou contactez-nous pour préparer votre visite.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <div class="rounded-2xl border border-tsm-border bg-tsm-surface p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Adresse</p>
                        <p class="mt-2 font-semibold text-white">Agadir, Maroc</p>
                    </div>

                    <div class="rounded-2xl border border-tsm-border bg-tsm-surface p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Téléphone</p>
                        <p class="mt-2 font-semibold text-white">+212 6 89 49 75 06</p>
                        <p class="mt-2 font-semibold text-white">+212 6 84 60 25 60</p>
                    </div>

                    <div class="rounded-2xl border border-tsm-border bg-tsm-surface p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Téléphone Fixe</p>
                        <p class="mt-2 font-semibold text-white">+212 5 22 89 72 57</p>
             
                    </div>

                    <div class="rounded-2xl border border-tsm-border bg-tsm-surface p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Email</p>
                        <p class="mt-2 font-semibold text-white">contact@tsmmotors.ma</p>
                    </div>

                    <div class="rounded-2xl border border-tsm-border bg-tsm-surface p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">Réponse</p>
                        <p class="mt-2 font-semibold text-white">Sous 24h ouvrées</p>
                    </div>
                </div>
            </aside>

            <section class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-2xl shadow-black/20 sm:p-8">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-tsm-yellow">
                            Message
                        </p>

                        <h2 class="font-heading mt-2 text-3xl font-bold text-white">
                            Envoyez votre demande
                        </h2>
                    </div>
                </div>

                @if (session('success'))
                    <div class="mt-6 rounded-2xl border border-green-600/30 bg-green-600/10 px-5 py-4 text-sm font-semibold text-green-400">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="mt-6 space-y-5">
                    @csrf

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-white">
                                Nom complet
                            </label>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                required
                                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                placeholder="Votre nom">

                            @error('name')
                                <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-white">
                                Email
                            </label>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                placeholder="vous@email.com">

                            @error('email')
                                <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-white">
                                Téléphone
                            </label>

                            <input
                                id="phone"
                                name="phone"
                                type="text"
                                value="{{ old('phone') }}"
                                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                placeholder="+212 6...">

                            @error('phone')
                                <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-white">
                                Sujet
                            </label>

                            <input
                                id="subject"
                                name="subject"
                                type="text"
                                value="{{ old('subject') }}"
                                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                placeholder="Disponibilité, prix, visite...">

                            @error('subject')
                                <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-white">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            required
                            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                            placeholder="Dites-nous ce que vous recherchez...">{{ old('message') }}</textarea>

                        @error('message')
                            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-xs leading-5 text-tsm-muted">
                            Vos informations servent uniquement à répondre à votre demande.
                        </p>

                        <button
                            type="submit"
                            class="inline-flex justify-center rounded-xl bg-tsm-yellow px-6 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                            Envoyer le message
                        </button>
                    </div>
                </form>
            </section>
        </section>
    </main>

    <x-footer />
</body>

</html>
