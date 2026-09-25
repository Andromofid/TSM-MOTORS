<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    public function index(): View
    {
        return view('admin.brands.index', [
            'brands' => Brand::query()
                ->withCount('motos')
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.brands.create', [
            'brand' => new Brand(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Brand::create($this->validatedData($request));

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Marque créée avec succès.');
    }

    public function edit(Brand $brand): View
    {
        return view('admin.brands.edit', [
            'brand' => $brand,
        ]);
    }

    public function update(Request $request, Brand $brand): RedirectResponse
    {
        $brand->update($this->validatedData($request, $brand));

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Marque mise à jour avec succès.');
    }

    public function destroy(Brand $brand): RedirectResponse
    {
        if ($brand->motos()->exists()) {
            return back()->with('error', 'Cette marque contient des motos. Supprimez ou déplacez les motos avant de supprimer la marque.');
        }

        $brand->delete();

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Marque supprimée avec succès.');
    }

    private function validatedData(Request $request, ?Brand $brand = null): array
    {
        $uniqueSlugRule = Rule::unique('brands', 'slug');

        if ($brand?->exists) {
            $uniqueSlugRule->ignore($brand);
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                $uniqueSlugRule,
            ],
            'logo' => ['nullable', 'string', 'max:255'],
        ]);

        $data['slug'] = Str::slug($data['slug'] ?: $data['name']);

        validator($data, [
            'slug' => [
                'required',
                'string',
                'max:255',
                $uniqueSlugRule,
            ],
        ])->validate();

        return $data;
    }
}
