<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MotoController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Guest Admin
        |--------------------------------------------------------------------------
        */

        Route::middleware('guest:admin')->group(function () {

            Route::get('/login', [AuthController::class, 'create'])
                ->name('login');

            Route::post('/login', [AuthController::class, 'store'])
                ->name('login.store');
        });

        /*
        |--------------------------------------------------------------------------
        | Authenticated Admin
        |--------------------------------------------------------------------------
        */

        Route::middleware('auth:admin')->group(function () {

            Route::get('/', [DashboardController::class, 'index'])
                ->name('dashboard');

            Route::post('/logout', [AuthController::class, 'destroy'])
                ->name('logout');

            Route::resource('brands', BrandController::class)->except('show');
            Route::resource('categories', CategoryController::class)->except('show');
            Route::resource('motos', MotoController::class)->except('show');
            Route::delete('/motos/{moto}/image', [MotoController::class, 'destroyImage'])
                ->name('motos.image.destroy');
        });
    });
