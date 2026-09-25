@extends('admin.layouts.app', ['title' => 'Ajouter une moto - Admin TSM Motors'])

@section('header')
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
            Nouvelle moto
        </p>

        <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
            Ajouter une moto
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
            Créez une nouvelle fiche moto avec ses informations et ses images.
        </p>
    </div>
@endsection

@section('content')
    <section class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.motos.store') }}" enctype="multipart/form-data">
            @include('admin.motos.partials.form', [
                'moto' => $moto,
                'brands' => $brands,
                'categories' => $categories,
                'statuses' => $statuses,
                'conditions' => $conditions,
                'submitLabel' => 'Créer la moto',
            ])
        </form>
    </section>
@endsection
