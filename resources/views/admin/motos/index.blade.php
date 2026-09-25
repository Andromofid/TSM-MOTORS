@extends('admin.layouts.app', ['title' => 'Motos - Admin TSM Motors'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
                Catalogue
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Motos
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
                Gérez les motos, leurs informations, leurs statuts et leurs images.
            </p>
        </div>

        <a
            href="{{ route('admin.motos.create') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
            Ajouter une moto
        </a>
    </div>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-6 rounded-2xl border border-tsm-yellow/30 bg-tsm-yellow/10 px-5 py-4 text-sm font-semibold text-tsm-yellow">
            {{ session('success') }}
        </div>
    @endif

    <section class="overflow-hidden rounded-3xl border border-tsm-border bg-tsm-surface">
        <div class="flex items-center justify-between border-b border-tsm-border px-6 py-5">
            <div>
                <h2 class="font-heading text-xl font-bold text-white">
                    Liste des motos
                </h2>

                <p class="mt-1 text-sm text-tsm-muted">
                    {{ $motos->total() }} moto(s) enregistrée(s).
                </p>
            </div>
        </div>

        @if ($motos->isNotEmpty())
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
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-tsm-border">
                        @foreach ($motos as $moto)

                            <tr class="transition hover:bg-tsm-blue">
                                <td class="min-w-72 px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        @if ($moto->image)
                                            <img src="{{ Storage::url($moto->image) }}" alt="{{ $moto->name }}" class="h-16 w-20 rounded-xl object-cover">
                                        @else
                                            <div class="flex h-16 w-20 items-center justify-center rounded-xl bg-tsm-yellow/10 font-heading text-lg font-bold text-tsm-yellow">
                                                M
                                            </div>
                                        @endif

                                        <div>
                                            <div class="font-semibold text-white">
                                                {{ $moto->name }}
                                            </div>

                                            <div class="mt-1 text-sm text-tsm-muted">
                                                {{ $moto->year ?? 'Année non définie' }}
                                                @if ($moto->is_featured)
                                                    <span class="ml-2 rounded-full bg-tsm-yellow/10 px-2 py-0.5 text-xs font-bold text-tsm-yellow">
                                                        Vedette
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
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
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex justify-end gap-3">
                                        <a
                                            href="{{ route('admin.motos.edit', $moto) }}"
                                            class="rounded-lg border border-tsm-border px-4 py-2 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
                                            Modifier
                                        </a>

                                        <form method="POST" action="{{ route('admin.motos.destroy', $moto) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Supprimer cette moto et ses images ?')"
                                                class="rounded-lg border border-tsm-border px-4 py-2 text-sm font-semibold text-tsm-muted transition hover:border-tsm-yellow hover:bg-tsm-yellow hover:text-white">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="border-t border-tsm-border px-6 py-4">
                {{ $motos->links() }}
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-tsm-yellow/10 font-heading font-bold text-tsm-yellow">
                    M
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune moto enregistrée
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-tsm-muted">
                    Ajoutez votre première moto pour commencer à alimenter le catalogue.
                </p>

                <a
                    href="{{ route('admin.motos.create') }}"
                    class="mt-6 inline-flex items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                    Ajouter une moto
                </a>
            </div>
        @endif
    </section>
@endsection
