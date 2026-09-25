<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin TSM Motors' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-tsm-dark font-sans text-tsm-light antialiased">
    <div class="min-h-screen">
        <header class="sticky top-0 z-40 border-b border-tsm-border bg-tsm-dark/95 backdrop-blur">
            <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{asset('images/logo.png')}}" alt="TSM Motors Logo" class="h-16" srcset="">
                </a>

                <nav class="hidden items-center gap-2 md:flex">
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.dashboard') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                        Dashboard
                    </a>

                    <a
                        href="{{ route('admin.motos.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.motos.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                        Motos
                    </a>

                    <a
                        href="{{ route('admin.brands.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.brands.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                        Marques
                    </a>

                    <a
                        href="{{ route('admin.categories.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.categories.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                        Catégories
                    </a>
                </nav>

                <div class="flex items-center gap-4">
                    <span class="hidden text-sm text-tsm-muted sm:inline">
                        {{ Auth::guard('admin')->user()?->name }}
                    </span>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="rounded-lg border border-tsm-border px-4 py-2 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>

            <nav class="mx-auto flex max-w-7xl gap-2 overflow-x-auto border-t border-tsm-border px-4 py-3 sm:px-6 md:hidden lg:px-8">
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.dashboard') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.motos.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.motos.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                    Motos
                </a>

                <a
                    href="{{ route('admin.brands.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.brands.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                    Marques
                </a>

                <a
                    href="{{ route('admin.categories.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.categories.*') ? 'bg-tsm-yellow text-white' : 'text-tsm-muted hover:bg-tsm-blue hover:text-white' }}">
                    Catégories
                </a>
            </nav>
        </header>

        @hasSection('header')
        <section class="border-b border-tsm-border bg-tsm-surface">
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </section>
        @endif

        <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>
</body>

</html>
