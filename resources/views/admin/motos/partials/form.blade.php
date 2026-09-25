@csrf

<div class="grid gap-6 lg:grid-cols-2">
    <div class="lg:col-span-2">
        <label for="name" class="block text-sm font-semibold text-white">
            Nom de la moto
        </label>

        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $moto->name) }}"
            required
            autofocus
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ex: Suzuki V-Strom 650">

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
            value="{{ old('slug', $moto->slug) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Laissez vide pour générer automatiquement">

        @error('slug')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="status" class="block text-sm font-semibold text-white">
            Statut
        </label>

        <select
            id="status"
            name="status"
            required
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
            @foreach ($statuses as $status)
                <option value="{{ $status }}" @selected(old('status', $moto->status ?: 'published') === $status)>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>

        @error('status')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="brand_id" class="block text-sm font-semibold text-white">
            Marque
        </label>

        <select
            id="brand_id"
            name="brand_id"
            required
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
            <option value="">Choisir une marque</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" @selected((int) old('brand_id', $moto->brand_id) === $brand->id)>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>

        @error('brand_id')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="category_id" class="block text-sm font-semibold text-white">
            Catégorie
        </label>

        <select
            id="category_id"
            name="category_id"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
            <option value="">Sans catégorie</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected((int) old('category_id', $moto->category_id) === $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="year" class="block text-sm font-semibold text-white">
            Année
        </label>

        <input
            id="year"
            name="year"
            type="number"
            value="{{ old('year', $moto->year) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="{{ date('Y') }}">
    </div>

    <div>
        <label for="price" class="block text-sm font-semibold text-white">
            Prix
        </label>

        <input
            id="price"
            name="price"
            type="number"
            step="0.01"
            min="0"
            value="{{ old('price', $moto->price) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ex: 85000">
    </div>

    <div>
        <label for="engine_cc" class="block text-sm font-semibold text-white">
            Cylindrée
        </label>

        <input
            id="engine_cc"
            name="engine_cc"
            type="number"
            min="0"
            value="{{ old('engine_cc', $moto->engine_cc) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ex: 500">
    </div>

    <div>
        <label for="mileage" class="block text-sm font-semibold text-white">
            Kilométrage
        </label>

        <input
            id="mileage"
            name="mileage"
            type="number"
            min="0"
            value="{{ old('mileage', $moto->mileage) }}"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ex: 12000">
    </div>

    <div>
        <label for="condition" class="block text-sm font-semibold text-white">
            Condition
        </label>

        <select
            id="condition"
            name="condition"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
            <option value="">Non définie</option>
            @foreach ($conditions as $condition)
                <option value="{{ $condition }}" @selected(old('condition', $moto->condition) === $condition)>
                    {{ $condition }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="flex items-end">
        <label class="inline-flex items-center gap-3 rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm font-semibold text-white">
            <input
                name="is_featured"
                type="checkbox"
                value="1"
                @checked(old('is_featured', $moto->is_featured))
                class="h-4 w-4 rounded border-tsm-border bg-tsm-dark text-tsm-yellow focus:ring-tsm-yellow">
            Mettre en vedette
        </label>
    </div>

    <div class="lg:col-span-2">
        <label for="description" class="block text-sm font-semibold text-white">
            Description
        </label>

        <textarea
            id="description"
            name="description"
            rows="5"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20"
            placeholder="Ajoutez les détails importants de la moto.">{{ old('description', $moto->description) }}</textarea>
    </div>

    <div class="lg:col-span-2">
        <label for="image" class="block text-sm font-semibold text-white">
            Image
        </label>

        <input
            id="image"
            name="image"
            type="file"
            accept="image/*"
            class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-tsm-muted file:mr-4 file:rounded-lg file:border-0 file:bg-tsm-yellow file:px-4 file:py-2 file:text-sm file:font-bold file:text-white hover:file:bg-tsm-gold">

        <p class="mt-2 text-xs leading-5 text-tsm-muted">
            Ajoutez une seule image. Taille maximale : 4 Mo.
        </p>

        @error('image')
            <p class="mt-2 text-sm text-tsm-yellow">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
    <a
        href="{{ route('admin.motos.index') }}"
        class="inline-flex items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-white transition hover:border-tsm-yellow hover:bg-tsm-blue">
        Annuler
    </a>

    <button
        type="submit"
        class="inline-flex items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold focus:outline-none focus:ring-2 focus:ring-tsm-yellow focus:ring-offset-2 focus:ring-offset-tsm-surface">
        {{ $submitLabel }}
    </button>
</div>
