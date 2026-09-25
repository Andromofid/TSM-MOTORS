@extends('admin.layouts.app', ['title' => 'Catégories - Admin TSM Motors'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
                Catalogue
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Catégories
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
                Gérez les catégories utilisées pour organiser les motos.
            </p>
        </div>

        <a
            href="{{ route('admin.categories.create') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
            Ajouter une catégorie
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
                    Liste des catégories
                </h2>

                <p class="mt-1 text-sm text-tsm-muted">
                    {{ $categories->total() }} catégorie(s) enregistrée(s).
                </p>
            </div>
        </div>

        @if ($categories->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-tsm-border">
                    <thead class="bg-tsm-dark/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Catégorie
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Slug
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Motos
                            </th>
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-tsm-border">
                        @foreach ($categories as $category)
                            <tr class="transition hover:bg-tsm-blue">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-tsm-yellow/10 font-heading text-sm font-bold text-tsm-yellow">
                                            {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($category->name, 0, 2)) }}
                                        </div>

                                        <div>
                                            <div class="font-semibold text-white">
                                                {{ $category->name }}
                                            </div>

                                            <div class="mt-1 text-xs text-tsm-muted">
                                                Créée le {{ $category->created_at?->format('d/m/Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-tsm-muted">
                                    {{ $category->slug }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span class="rounded-full bg-tsm-yellow/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-tsm-yellow">
                                        {{ $category->motos_count }} moto(s)
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex justify-end gap-3">
                                        <a
                                            href="{{ route('admin.categories.edit', $category) }}"
                                            class="rounded-lg border border-tsm-border px-4 py-2 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
                                            Modifier
                                        </a>

                                        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Supprimer cette catégorie ? Les motos associées resteront dans le catalogue.')"
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
                {{ $categories->links() }}
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-tsm-yellow/10 font-heading font-bold text-tsm-yellow">
                    C
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune catégorie enregistrée
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-tsm-muted">
                    Ajoutez votre première catégorie pour classer les motos du catalogue.
                </p>

                <a
                    href="{{ route('admin.categories.create') }}"
                    class="mt-6 inline-flex items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                    Ajouter une catégorie
                </a>
            </div>
        @endif
    </section>
@endsection
