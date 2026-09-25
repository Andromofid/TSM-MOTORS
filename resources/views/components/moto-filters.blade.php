<form method="GET" action="{{ route('motos.index') }}">

    <div class="grid gap-4 lg:grid-cols-[1.4fr_1fr_1fr_1fr]">

        {{-- Search --}}
        <div>
            <label
                for="q"
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Recherche
            </label>

            <input
                id="q"
                name="q"
                type="search"
                value="{{ request('q') }}"
                placeholder="Nom, modèle, mot-clé..."
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Brand --}}
        <div>
            <label
                for="brand"
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Marque
            </label>

            <select
                id="brand"
                name="brand"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

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
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Catégorie
            </label>

            <select
                id="category"
                name="category"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

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
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Condition
            </label>

            <select
                id="condition"
                name="condition"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

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


    <div class="mt-4 grid gap-4 md:grid-cols-3 lg:grid-cols-[1fr_1fr_1fr_auto]">

        {{-- Min price --}}
        <div>
            <label
                for="min_price"
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Prix min
            </label>

            <input
                id="min_price"
                name="min_price"
                type="number"
                min="0"
                value="{{ request('min_price') }}"
                placeholder="Ex: 20000"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Max price --}}
        <div>
            <label
                for="max_price"
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Prix max
            </label>

            <input
                id="max_price"
                name="max_price"
                type="number"
                min="0"
                value="{{ request('max_price') }}"
                placeholder="Ex: 120000"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition placeholder:text-tsm-muted focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">
        </div>


        {{-- Sort --}}
        <div>
            <label
                for="sort"
                class="text-xs font-bold uppercase tracking-[0.18em] text-tsm-muted">
                Trier par
            </label>

            <select
                id="sort"
                name="sort"
                class="mt-2 block w-full rounded-xl border border-tsm-border bg-tsm-dark px-4 py-3 text-sm text-white outline-none transition focus:border-tsm-yellow focus:ring-2 focus:ring-tsm-yellow/20">

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


        {{-- Actions --}}
        <div class="flex items-end gap-3">

            <button
                type="submit"
                class="inline-flex min-h-12 flex-1 items-center justify-center rounded-xl bg-tsm-yellow px-5 py-3 text-sm font-bold text-white transition hover:bg-tsm-gold">
                Filtrer
            </button>

            <a
                href="{{ route('motos.index') }}"
                class="inline-flex min-h-12 items-center justify-center rounded-xl border border-tsm-border px-5 py-3 text-sm font-semibold text-tsm-muted transition hover:border-tsm-yellow hover:bg-tsm-blue hover:text-white">
                Reset
            </a>

        </div>

    </div>

</form>