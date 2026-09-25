<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Scooter',
                'slug' => 'scooter',
            ],
            [
                'name' => 'Maxi Scooter',
                'slug' => 'maxi-scooter',
            ],
            [
                'name' => 'Scooter Électrique',
                'slug' => 'scooter-electrique',
            ],
            [
                'name' => 'Naked / Roadster',
                'slug' => 'naked-roadster',
            ],
            [
                'name' => 'Sportive',
                'slug' => 'sportive',
            ],
            [
                'name' => 'Trail / Adventure',
                'slug' => 'trail-adventure',
            ],
            [
                'name' => 'Rally / Enduro',
                'slug' => 'rally-enduro',
            ],
            [
                'name' => 'Touring',
                'slug' => 'touring',
            ],
            [
                'name' => 'Cruiser',
                'slug' => 'cruiser',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
