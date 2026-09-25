@extends('admin.layouts.guest', [
'title' => 'Connexion admin - TSM Motors'
])

@section('content')

<div>

    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-tsm-yellow">
        Espace admin
    </p>

    <h1
        class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
        Connexion
    </h1>

    <p class="mt-3 text-sm leading-6 text-tsm-muted">
        Connectez-vous pour accéder au tableau de bord TSM Motors.
    </p>

</div>


<form
    method="POST"
    action="{{ route('admin.login.store') }}"
    class="mt-8 space-y-5">

    @csrf


    {{-- Email --}}
    <div>

        <label
            for="email"
            class="block text-sm font-semibold text-white">
            Adresse email
        </label>

        <div class="relative mt-2">

            <div
                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-tsm-muted">
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M3 7l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="admin@tsmmotors.ma"
                class="block w-full rounded-xl border border-tsm-border
                           bg-tsm-dark py-3 pl-12 pr-4 text-sm text-white
                           outline-none transition
                           placeholder:text-tsm-muted
                           focus:border-tsm-yellow
                           focus:ring-2 focus:ring-tsm-yellow/20">

        </div>

        @error('email')
        <p class="mt-2 text-sm text-tsm-yellow">
            {{ $message }}
        </p>
        @enderror

    </div>


    {{-- Password --}}
    <div>

        <label
            for="password"
            class="block text-sm font-semibold text-white">
            Mot de passe
        </label>

        <div class="relative mt-2">

            <div
                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-tsm-muted">
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M6 10V8a6 6 0 1112 0v2m-9 0h6m-8 0h10a2 2 0 012 2v7H5v-7a2 2 0 012-2z" />
                </svg>
            </div>

            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="current-password"
                placeholder="Votre mot de passe"
                class="block w-full rounded-xl border border-tsm-border
                           bg-tsm-dark py-3 pl-12 pr-4 text-sm text-white
                           outline-none transition
                           placeholder:text-tsm-muted
                           focus:border-tsm-yellow
                           focus:ring-2 focus:ring-tsm-yellow/20">

        </div>

        @error('password')
        <p class="mt-2 text-sm text-tsm-yellow">
            {{ $message }}
        </p>
        @enderror

    </div>


    {{-- Options --}}
    <div class="flex items-center justify-between gap-4">

        <label
            class="inline-flex cursor-pointer items-center gap-3 text-sm text-tsm-muted">

            <input
                name="remember"
                type="checkbox"
                class="h-4 w-4 rounded border-tsm-border bg-tsm-dark
                           text-tsm-yellow focus:ring-tsm-yellow">

            Se souvenir de moi

        </label>


        <a
            href="{{ route('home') }}"
            class="text-sm font-semibold text-white transition hover:text-tsm-yellow">
            Retour au site
        </a>

    </div>


    {{-- Button --}}
    <button
        type="submit"
        class="flex w-full items-center justify-center gap-2 rounded-xl
                   bg-tsm-yellow px-5 py-3 text-sm font-bold text-white
                   transition hover:bg-tsm-gold
                   focus:outline-none focus:ring-2 focus:ring-tsm-yellow
                   focus:ring-offset-2 focus:ring-offset-tsm-surface">
        Se connecter

        <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0-4 4m4-4H3" />
        </svg>

    </button>

</form>

@endsection