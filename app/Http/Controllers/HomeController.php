<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Moto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::query()
            ->orderBy('name')
            ->get();

        $motos = Moto::query()
            ->with(['brand', 'category'])
            ->where('status', 'published')
            ->where('is_featured', true)
            ->latest()
            ->take(4)
            ->get();

        return view('welcome', compact('brands', 'motos'));
    }

    public function motos(Request $request)
    {
        $brands = Brand::query()
            ->orderBy('name')
            ->get();

        $categories = Category::query()
            ->orderBy('name')
            ->get();

        $conditions = Moto::query()
            ->where('status', 'published')
            ->whereNotNull('condition')
            ->distinct()
            ->orderBy('condition')
            ->pluck('condition');

        $motos = Moto::query()
            ->with(['brand', 'category'])
            ->where('status', 'published')
            ->when($request->filled('q'), function ($query) use ($request) {
                $search = $request->string('q')->trim()->toString();

                $query->where(function ($query) use ($search) {
                    $query
                        ->where('name', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('brand'), function ($query) use ($request) {
                $query->where('brand_id', $request->integer('brand'));
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category_id', $request->integer('category'));
            })
            ->when($request->filled('condition'), function ($query) use ($request) {
                $query->where('condition', $request->string('condition')->toString());
            })
            ->when($request->filled('min_price'), function ($query) use ($request) {
                $query->where('price', '>=', $request->integer('min_price'));
            })
            ->when($request->filled('max_price'), function ($query) use ($request) {
                $query->where('price', '<=', $request->integer('max_price'));
            })
            ->when($request->input('sort') === 'price_asc', fn ($query) => $query->orderBy('price'))
            ->when($request->input('sort') === 'price_desc', fn ($query) => $query->orderByDesc('price'))
            ->when($request->input('sort') === 'year_desc', fn ($query) => $query->orderByDesc('year'))
            ->when(! in_array($request->input('sort'), ['price_asc', 'price_desc', 'year_desc'], true), fn ($query) => $query->latest())
            ->paginate(9)
            ->withQueryString();

        return view('motos.index', compact('brands', 'categories', 'conditions', 'motos'));
    }

    public function showMoto(Moto $moto)
    {
        abort_unless($moto->status === 'published', 404);

        $moto->load(['brand', 'category']);

        $relatedMotos = Moto::query()
            ->with(['brand', 'category'])
            ->where('status', 'published')
            ->whereKeyNot($moto->id)
            ->when($moto->category_id, fn ($query) => $query->where('category_id', $moto->category_id))
            ->latest()
            ->take(3)
            ->get();

        return view('motos.show', compact('moto', 'relatedMotos'));
    }
}
