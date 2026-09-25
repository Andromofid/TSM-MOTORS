@extends('admin.layouts.app', ['title' => 'Dashboard admin - TSM Motors'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
                Tableau de bord
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Bienvenue, {{ Auth::guard('admin')->user()?->name }}
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
                Suivez rapidement l'état du catalogue TSM Motors et les dernières motos ajoutées.
            </p>
        </div>

        <a
            href="{{ route('home') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
            Voir le site
        </a>
    </div>
@endsection

@section('content')
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($stats as $stat)
            <article class="rounded-2xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10">
                <p class="text-sm font-semibold text-tsm-muted">
                    {{ $stat['label'] }}
                </p>

                <p class="mt-4 font-heading text-4xl font-extrabold text-white">
                    {{ $stat['value'] }}
                </p>

                <p class="mt-2 text-sm text-tsm-muted">
                    {{ $stat['hint'] }}
                </p>
            </article>
        @endforeach
    </div>

    <section class="mt-8 overflow-hidden rounded-3xl border border-tsm-border bg-tsm-surface">
        <div class="flex flex-col justify-between gap-4 border-b border-tsm-border px-6 py-5 sm:flex-row sm:items-center">
            <div>
                <h2 class="font-heading text-xl font-bold text-white">
                    Dernières motos
                </h2>

                <p class="mt-1 text-sm text-tsm-muted">
                    Les 5 dernières entrées du catalogue.
                </p>
            </div>

            <span class="w-fit rounded-full bg-tsm-yellow/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-tsm-yellow">
                Catalogue
            </span>
        </div>

        @if ($recentMotos->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-tsm-border">
                    <thead class="bg-tsm-dark/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Moto
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Marque
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Catégorie
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Prix
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Statut
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-tsm-border">
                        @foreach ($recentMotos as $moto)
                            <tr class="transition hover:bg-tsm-blue">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="font-semibold text-white">
                                        {{ $moto->name }}
                                    </div>

                                    <div class="mt-1 text-sm text-tsm-muted">
                                        {{ $moto->year ?? 'Année non définie' }}
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-tsm-muted">
                                    {{ $moto->brand?->name ?? 'Non définie' }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-tsm-muted">
                                    {{ $moto->category?->name ?? 'Non définie' }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-semibold text-white">
                                    @if ($moto->price)
                                        {{ number_format((float) $moto->price, 0, ',', ' ') }} DH
                                    @else
                                        Sur demande
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span class="rounded-full bg-tsm-yellow/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-tsm-yellow">
                                        {{ $moto->status }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-tsm-yellow/10 text-tsm-yellow">
                    M
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune moto pour le moment
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-tsm-muted">
                    Le tableau de bord est prêt. Les dernières motos apparaîtront ici dès que le catalogue sera alimenté.
                </p>
            </div>
        @endif
    </section>
@endsection

