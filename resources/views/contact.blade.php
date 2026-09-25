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

<body class="bg-tsm-dark font-sans text-white antialiased">
    <x-nav />

    <main>
        <section class="relative isolate overflow-hidden bg-tsm-dark">
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-35"
                style="background-image: url('{{ asset('images/Showroom.webp') }}');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-tsm-dark via-tsm-navy/95 to-tsm-blue/45"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_76%_20%,rgba(245,181,27,0.25),transparent_27%),radial-gradient(circle_at_18%_8%,rgba(18,63,131,0.62),transparent_34%)]"></div>
            <div class="absolute bottom-0 left-0 h-32 w-full bg-gradient-to-t from-tsm-dark to-transparent"></div>

            <div class="relative mx-auto grid min-h-[430px] max-w-7xl items-center gap-8 px-4 py-14 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
                <div class="max-w-2xl">
                    <p class="inline-flex items-center gap-3 border-l-4 border-tsm-yellow bg-tsm-dark/45 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.32em] text-tsm-yellow backdrop-blur-md">
                        Contact TSM Motors
                    </p>

                    <h1 class="font-heading mt-6 text-5xl font-extrabold uppercase leading-[0.9] tracking-tight text-white sm:text-6xl lg:text-7xl">
                        Parlons de votre
                        <span class="block text-tsm-yellow">prochaine moto.</span>
                    </h1>

                    <p class="mt-5 max-w-xl text-sm leading-7 text-white/70 sm:text-base">
                        Une question sur un modèle, une disponibilité, une location ou une visite showroom ? Envoyez-nous un message, notre équipe vous répond rapidement.
                    </p>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-tsm-dark py-14">
            <div class="absolute -left-40 top-28 h-80 w-80 rounded-full bg-tsm-yellow/10 blur-[110px]"></div>
            <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-tsm-blue/25 to-transparent"></div>

            <div class="relative mx-auto grid max-w-7xl gap-7 px-4 sm:px-6 lg:grid-cols-[340px_1fr] lg:px-8">
                <aside class="space-y-5">
                    <div class="overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 shadow-2xl shadow-black/20 backdrop-blur-xl">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('images/Showroom.webp') }}" alt="Showroom TSM Motors Agadir" class="h-full w-full object-cover opacity-80">
                            <div class="absolute inset-0 bg-gradient-to-t from-tsm-navy via-tsm-navy/35 to-transparent"></div>
                            <div class="absolute bottom-4 left-5">
                                <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">Showroom</p>
                                <h2 class="font-heading mt-1 text-3xl font-extrabold uppercase text-white">TSM Motors Agadir</h2>
                            </div>
                        </div>

                        <div class="p-5">
                            <p class="text-sm leading-6 text-white/60">
                                Venez découvrir nos motos directement au showroom ou contactez-nous pour préparer votre visite.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                        <div class="rounded-2xl border border-white/10 bg-tsm-navy/90 p-5 shadow-xl shadow-black/10">
                            <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Adresse</p>
                            <p class="mt-2 font-semibold text-white">numéro 3, Bloc 118 rue, Agadir 80000</p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-tsm-navy/90 p-5 shadow-xl shadow-black/10">
                            <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Téléphone</p>
                            <p class="mt-2 font-semibold text-white">+212 6 61 24 47 77</p>
                
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-tsm-navy/90 p-5 shadow-xl shadow-black/10">
                            <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Email</p>
                            <p class="mt-2 font-semibold text-white">contact@tsmmotors.ma</p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-tsm-navy/90 p-5 shadow-xl shadow-black/10 sm:col-span-2 lg:col-span-1">
                            <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">Réponse</p>
                            <p class="mt-2 font-semibold text-white">Sous 24h ouvrées</p>
                        </div>
                    </div>
                </aside>

                <section class="overflow-hidden rounded-[1.6rem] border border-white/10 bg-tsm-navy/90 p-5 shadow-2xl shadow-black/20 backdrop-blur-xl sm:p-6">
                    <div class="border-b border-white/10 pb-4">
                        <p class="text-xs font-extrabold uppercase tracking-[0.28em] text-tsm-yellow">
                            Message
                        </p>

                        <h2 class="font-heading mt-1 text-4xl font-extrabold uppercase text-white">
                            Envoyez votre demande
                        </h2>
                    </div>

                    @if (session('success'))
                        <div class="mt-6 rounded-2xl border border-green-400/30 bg-green-500/10 px-5 py-4 text-sm font-semibold text-green-300">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" class="mt-6 space-y-5">
                        @csrf

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                                    Nom complet
                                </label>

                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    required
                                    class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                    placeholder="Votre nom">

                                @error('name')
                                    <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                                    Email
                                </label>

                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    required
                                    class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                    placeholder="vous@email.com">

                                @error('email')
                                    <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="phone" class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                                    Téléphone
                                </label>

                                <input
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    value="{{ old('phone') }}"
                                    class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                    placeholder="+212 6...">

                                @error('phone')
                                    <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="subject" class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                                    Sujet
                                </label>

                                <input
                                    id="subject"
                                    name="subject"
                                    type="text"
                                    value="{{ old('subject') }}"
                                    class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                    placeholder="Disponibilité, prix, visite...">

                                @error('subject')
                                    <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="7"
                                required
                                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
                                placeholder="Dites-nous ce que vous recherchez...">{{ old('message') }}</textarea>

                            @error('message')
                                <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-4 border-t border-white/10 pt-5 sm:flex-row sm:items-center sm:justify-between">
                            <p class="text-xs leading-5 text-white/45">
                                Vos informations servent uniquement à répondre à votre demande.
                            </p>

                            <button
                                type="submit"
                                class="inline-flex min-h-12 items-center justify-center rounded-full bg-tsm-yellow px-7 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark shadow-lg shadow-tsm-yellow/20 transition hover:bg-tsm-gold">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </main>

    <x-footer />
</body>

</html>
