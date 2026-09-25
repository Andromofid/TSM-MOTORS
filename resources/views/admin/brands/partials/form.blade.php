@csrf

<div class="grid gap-6">
    <div>
        <label for="name" class="block text-sm font-semibold text-white">
            Nom de la marque
        </label>

        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $brand->name) }}"
            required
            autofocus
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ex: Suzuki">

        @error('name')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="slug" class="block text-sm font-semibold text-white">
            Slug
        </label>

        <input
            id="slug"
            name="slug"
            type="text"
            value="{{ old('slug', $brand->slug) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Laissez vide pour générer automatiquement">

        <p class="mt-2 text-xs leading-5 text-tsm-muted">
            Utilisé dans les URLs. Exemple : <span class="font-semibold text-white">suzuki</span>.
        </p>

        @error('slug')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="logo" class="block text-sm font-semibold text-white">
            Logo
        </label>

        <input
            id="logo"
            name="logo"
            type="text"
            value="{{ old('logo', $brand->logo) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="images/brands/benelli.svg ou URL">

        @error('logo')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
    <a
        href="{{ route('admin.brands.index') }}"
        class="inline-flex items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-blue">
        Annuler
    </a>

    <button
        type="submit"
        class="inline-flex items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold focus:outline-none focus:ring-2 focus:ring-tsm-yellow focus:ring-offset-2 focus:ring-offset-tsm-surface">
        {{ $submitLabel }}
    </button>
</div>
