@extends('admin.layouts.app', ['title' => 'Ajouter une marque - Admin TSM Motors'])

@section('header')
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
            Nouvelle marque
        </p>

        <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
            Ajouter une marque
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
            Créez une marque pour organiser les motos du catalogue.
        </p>
    </div>
@endsection

@section('content')
    <section class="mx-auto max-w-3xl rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.brands.store') }}">
            @include('admin.brands.partials.form', [
                'brand' => $brand,
                'submitLabel' => 'Créer la marque',
            ])
        </form>
    </section>
@endsection
