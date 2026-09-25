@extends('admin.layouts.app', ['title' => 'Modifier une marque - Admin TSM Motors'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
                Modification
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                {{ $brand->name }}
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
                Mettez à jour les informations de cette marque.
            </p>
        </div>

        <a
            href="{{ route('admin.brands.index') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
            Retour aux marques
        </a>
    </div>
@endsection

@section('content')
    <section class="mx-auto max-w-3xl rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.brands.update', $brand) }}">
            @method('PUT')

            @include('admin.brands.partials.form', [
                'brand' => $brand,
                'submitLabel' => 'Enregistrer les changements',
            ])
        </form>
    </section>
@endsection
