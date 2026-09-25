<form method="GET" action="{{ route('motos.index') }}" class="space-y-4">

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">

        {{-- Search --}}
        <div>
            <label
                for="q"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Recherche
            </label>

            <input
                id="q"
                name="q"
                type="search"
                value="{{ request('q') }}"
                placeholder="Nom, modèle, mot-clé..."
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Brand --}}
        <div>
            <label
                for="brand"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Marque
            </label>

            <select
                id="brand"
                name="brand"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

                <option value="">Toutes</option>

                @foreach ($brands as $brand)
                <option
                    value="{{ $brand->id }}"
                    @selected((string) request('brand')===(string) $brand->id)>
                    {{ $brand->name }}
                </option>
                @endforeach

            </select>
        </div>


        {{-- Category --}}
        <div>
            <label
                for="category"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Catégorie
            </label>

            <select
                id="category"
                name="category"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

                <option value="">Toutes</option>

                @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected((string) request('category')===(string) $category->id)>
                    {{ $category->name }}
                </option>
                @endforeach

            </select>
        </div>


        {{-- Condition --}}
        <div>
            <label
                for="condition"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Condition
            </label>

            <select
                id="condition"
                name="condition"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

                <option value="">Toutes</option>

                @foreach ($conditions as $condition)
                <option
                    value="{{ $condition }}"
                    @selected(request('condition')===$condition)>
                    {{ $condition }}
                </option>
                @endforeach

            </select>
        </div>

    </div>


    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">

        {{-- Min price --}}
        <div>
            <label
                for="min_price"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Prix min
            </label>

            <input
                id="min_price"
                name="min_price"
                type="number"
                min="0"
                value="{{ request('min_price') }}"
                placeholder="Ex: 20000"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Max price --}}
        <div>
            <label
                for="max_price"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Prix max
            </label>

            <input
                id="max_price"
                name="max_price"
                type="number"
                min="0"
                value="{{ request('max_price') }}"
                placeholder="Ex: 120000"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/35 focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Sort --}}
        <div class="sm:col-span-2 lg:col-span-1">
            <label
                for="sort"
                class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-tsm-yellow">
                Trier par
            </label>

            <select
                id="sort"
                name="sort"
                class="mt-2 block w-full rounded-2xl border border-white/10 bg-tsm-dark/80 px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

                <option value="">Nouveautés</option>
                <option value="price_asc" @selected(request('sort')==='price_asc' )>
                    Prix croissant
                </option>
                <option value="price_desc" @selected(request('sort')==='price_desc' )>
                    Prix décroissant
                </option>
                <option value="year_desc" @selected(request('sort')==='year_desc' )>
                    Année récente
                </option>

            </select>
        </div>

    </div>


    {{-- Actions --}}
    <div class="grid gap-3 border-t border-white/10 pt-4 sm:grid-cols-2 lg:grid-cols-1">

        <button
            type="submit"
            class="inline-flex min-h-12 items-center justify-center rounded-full bg-tsm-yellow px-5 py-3 text-sm font-extrabold uppercase tracking-wide text-tsm-dark shadow-lg shadow-tsm-yellow/20 transition hover:bg-tsm-gold">
            Filtrer
        </button>

        <a
            href="{{ route('motos.index') }}"
            class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/15 px-5 py-3 text-sm font-bold uppercase tracking-wide text-white/70 transition hover:border-tsm-yellow hover:bg-white/5 hover:text-tsm-yellow">
            Réinitialiser
        </a>

    </div>

</form>
