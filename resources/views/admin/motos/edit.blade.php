@extends('admin.layouts.app', ['title' => 'Modifier une moto - Admin TSM Motors'])

@section('header')
<div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-tsm-yellow">
            Modification
        </p>

        <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
            {{ $moto->name }}
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-tsm-muted">
            Mettez à jour la fiche moto et gérez ses images.
        </p>
    </div>

    <a
        href="{{ route('admin.motos.index') }}"
        class="inline-flex w-fit items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-yellow">
        Retour aux motos
    </a>
</div>
@endsection

@section('content')
<div class="grid gap-8 lg:grid-cols-[1fr_360px]">
    <section class="rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.motos.update', $moto) }}" enctype="multipart/form-data">
            @method('PUT')

            @include('admin.motos.partials.form', [
            'moto' => $moto,
            'brands' => $brands,
            'categories' => $categories,
            'statuses' => $statuses,
            'conditions' => $conditions,
            'submitLabel' => 'Enregistrer les changements',
            ])
        </form>
    </section>

    <aside class="h-fit rounded-3xl border border-tsm-border bg-tsm-surface p-6 shadow-xl shadow-black/10">
        <h2 class="font-heading text-xl font-bold text-white">
            Image actuelle
        </h2>

        <p class="mt-2 text-sm leading-6 text-tsm-muted">
            Supprimez l'image si vous ne souhaitez plus l'afficher.
        </p>

        @if ($moto->image !== null )
        <div class="mt-6 grid gap-4">

            <div class="overflow-hidden rounded-2xl border border-tsm-border bg-tsm-dark">
                <img
                    src="{{Storage::url($moto->image)}}"
                    alt="{{ $moto->name }}"
                    class="h-40 w-full object-cover">

                <form method="POST" action="{{ route('admin.motos.image.destroy', $moto) }}" class="p-3">
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        onclick="return confirm('Supprimer cette image ?')"
                        class="w-full rounded-lg border border-tsm-border px-4 py-2 text-sm font-semibold text-tsm-muted transition hover:border-tsm-yellow hover:bg-tsm-yellow hover:text-white">
                        Supprimer l'image
                    </button>
                </form>
            </div>

        </div>
        @else
        <div class="mt-6 rounded-2xl border border-tsm-border bg-tsm-dark px-5 py-8 text-center">
            <p class="text-sm text-tsm-muted">
                Aucune image ajoutée pour cette moto.
            </p>
        </div>
        @endif
    </aside>
</div>
@endsection
