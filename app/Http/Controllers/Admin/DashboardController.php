<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Moto;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'stats' => [
                [
                    'label' => 'Motos',
                    'value' => Moto::count(),
                    'hint' => 'Catalogue total',
                ],
                [
                    'label' => 'Marques',
                    'value' => Brand::count(),
                    'hint' => 'Partenaires affichés',
                ],
                [
                    'label' => 'Catégories',
                    'value' => Category::count(),
                    'hint' => 'Segments disponibles',
                ],
                [
                    'label' => 'En vedette',
                    'value' => Moto::where('is_featured', true)->count(),
                    'hint' => 'Motos mises en avant',
                ],
            ],
            'recentMotos' => Moto::query()
                ->with(['brand', 'category'])
                ->latest()
                ->take(5)
                ->get(),
        ]);
    }
}
