<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\{
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

Route::get('/', function () {

    return Inertia::render('LandingPage/Index');

})->name('landing_page');


Route::get('our_cars', function () {

    return Inertia::render('LandingPage/OurCars');

})->name('our_cars');

Route::get('car_details', function() {
    return Inertia::render('LandingPage/CarDetail');
})->name('car_details');
