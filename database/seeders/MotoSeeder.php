<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Moto;
use Illuminate\Database\Seeder;

class MotoSeeder extends Seeder
{
    public function run(): void
    {
        $voge = Brand::where('slug', 'voge')->firstOrFail();

        $categories = Category::query()
            ->pluck('id', 'slug');

        $motos = [

            /*
            |--------------------------------------------------------------------------
            | VOGE 625 R
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE 625 R',
                'slug' => 'voge-625-r',

                'brand_id' => $voge->id,
                'category_id' => $categories['naked-roadster'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 581,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Roadster sportif VOGE équipé d’un moteur bicylindre de 581 cm³. La 625 R offre un style moderne, une position de conduite dynamique et de bonnes performances pour la ville comme pour les sorties routières.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE 525 DSX
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE 525 DSX',
                'slug' => 'voge-525-dsx',

                'brand_id' => $voge->id,
                'category_id' => $categories['trail-adventure'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 494,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Trail polyvalent VOGE conçu pour la route et l’aventure. La 525 DSX combine confort, maniabilité et moteur bicylindre de 494 cm³ pour les trajets quotidiens comme pour les longues distances.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE 625 DSX
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE 625 DSX',
                'slug' => 'voge-625-dsx',

                'brand_id' => $voge->id,
                'category_id' => $categories['trail-adventure'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 581,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Trail adventure VOGE équipé d’un bicylindre de 581 cm³. La 625 DSX est pensée pour les longues distances, le voyage et une utilisation polyvalente entre route et pistes.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE 900 DSX
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE 900 DSX',
                'slug' => 'voge-900-dsx',

                'brand_id' => $voge->id,
                'category_id' => $categories['trail-adventure'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 895,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Grand trail VOGE destiné au voyage et aux longues distances. Son moteur bicylindre de 895 cm³ offre puissance, confort et polyvalence pour une utilisation routière et adventure.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE DS 450X
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE DS 450X',
                'slug' => 'voge-ds-450x',

                'brand_id' => $voge->id,
                'category_id' => $categories['trail-adventure'],

                'year' => 2026,
                'price' => null,

                /*
                 * Exact engine specification needs confirmation.
                 */
                'engine_cc' => null,

                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Moto VOGE de type trail / adventure pensée pour une utilisation polyvalente sur route et hors des grands axes.',

                'is_featured' => false,

                /*
                 * Keep it draft until the exact specification is confirmed.
                 */
                'status' => 'draft',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE SR16 200
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE SR16 200',
                'slug' => 'voge-sr16-200',

                'brand_id' => $voge->id,
                'category_id' => $categories['scooter'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 174,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Scooter urbain VOGE équipé d’un moteur monocylindre de 174 cm³, d’une transmission automatique CVT et d’un système ABS. Il est conçu pour les déplacements quotidiens en ville.',

                'is_featured' => false,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE SR450X
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE SR450X',
                'slug' => 'voge-sr450x',

                'brand_id' => $voge->id,
                'category_id' => $categories['maxi-scooter'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 398,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Maxi scooter adventure VOGE combinant le confort d’un scooter et le style d’une moto trail. Son moteur bicylindre de 398 cm³ le rend adapté à la ville, aux voies rapides et aux longs trajets.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE RR660
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE RR660',
                'slug' => 'voge-rr660',

                'brand_id' => $voge->id,
                'category_id' => $categories['sportive'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 663,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Moto sportive VOGE équipée d’un moteur quatre cylindres d’environ 663 cm³. Son carénage aérodynamique, son châssis et sa position de conduite sont orientés vers une conduite sportive.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE DS800 Rally
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE DS800 Rally',
                'slug' => 'voge-ds800-rally',

                'brand_id' => $voge->id,
                'category_id' => $categories['rally-enduro'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 798,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Trail Rally VOGE équipé d’un moteur bicylindre de 798 cm³. La DS800 Rally est conçue pour les longues distances et les terrains difficiles avec une orientation adventure et tout-terrain.',

                'is_featured' => true,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE 300 Rally
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE 300 Rally',
                'slug' => 'voge-300-rally',

                'brand_id' => $voge->id,
                'category_id' => $categories['rally-enduro'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 292,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Moto légère orientée rally et adventure équipée d’un moteur monocylindre de 292 cm³. Elle convient à une utilisation mixte route et tout-terrain.',

                'is_featured' => false,
                'status' => 'published',
            ],

            /*
            |--------------------------------------------------------------------------
            | VOGE SR3 250
            |--------------------------------------------------------------------------
            */

            [
                'name' => 'VOGE SR3 250',
                'slug' => 'voge-sr3-250',

                'brand_id' => $voge->id,
                'category_id' => $categories['maxi-scooter'],

                'year' => 2026,
                'price' => null,

                'engine_cc' => 244,
                'mileage' => 0,

                'condition' => 'new',

                'description' => 'Maxi scooter VOGE de 244 cm³ conçu pour les déplacements urbains et périurbains. Il combine confort, protection et transmission automatique pour un usage quotidien.',

                'is_featured' => false,
                'status' => 'published',
            ],
        ];

        foreach ($motos as $moto) {
            Moto::updateOrCreate(
                ['slug' => $moto['slug']],
                $moto
            );
        }
    }
}
