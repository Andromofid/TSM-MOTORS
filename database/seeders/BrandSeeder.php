<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'VOGE',
                'slug' => 'voge',
                'logo' => null,
            ],
            [
                'name' => 'Benelli',
                'slug' => 'benelli',
                'logo' => null,
            ],
            [
                'name' => 'Austin',
                'slug' => 'austin',
                'logo' => null,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::updateOrCreate(
                ['slug' => $brand['slug']],
                $brand
            );
        }
    }
}
