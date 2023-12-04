<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\{
    RolesController,
    HomeController,
    LandingPageController,
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

Route::get('/', [LandingPageController::class, 'home'])->name('landing_page');


Route::get('our_cars', [LandingPageController::class, 'our_cars'])->name('our_cars');
Route::get('our_cars/{car}', [LandingPageController::class, 'car'])->name('car_select');
Route::get('car_brand_models', [LandingPageController::class, 'getBrandModels'])->name('car_brand_models');


// Route::get('car_details', function() {
//     return Inertia::render('LandingPage/CarDetail');
// })->name('car_details');
