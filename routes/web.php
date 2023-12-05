<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\{
    CarBrandController,
    CarController,
    CarModelController,
    RolesController,
    HomeController,
    UserController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('admin-login', function () {
    return Inertia::render('Login');
})->name('adminLogin');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('roles', RolesController::class);
    Route::prefix('roles')->group(function () {
        Route::get('permissions/{id}', [RolesController::class, 'show'])->name('roles.ajax.permissions');
    });

    Route::resource('users', UserController::class);
    // Route::prefix('users')->group(function () {
    //     Route::get('export/toexcel', [UserController::class, 'export'])->name('users.export');
    //     Route::post('import/toexcel', [UserController::class, 'import'])->name('users.import');
    // });
    Route::resource('car_brands', CarBrandController::class);
    Route::resource('car_models', CarModelController::class);
    Route::post('upload-logo', [CarBrandController::class, 'uploadLogo'])->name('car_brands.upload_logo');
    Route::resource('cars', CarController::class);
    Route::get('car_brand_models', [CarController::class, 'getBrandModels'])->name('cars.car_brand_models');
    Route::post('upload-thumbnail', [CarController::class, 'uploadThumbnail'])->name('cars.upload_thumbnail');
    Route::post('upload-temp-cars', [CarController::class, 'uploadTempCars'])->name('cars.upload_temp_cars');
    Route::post('temp-cars-revert', [CarController::class, 'revertImage'])->name('cars.revert_image');
    Route::post(('brand-image-revert'), [CarBrandController::class, 'revertImage'])->name('car_brands.revert_image');

});
