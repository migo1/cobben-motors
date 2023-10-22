<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', function () {
    
return Inertia::render('LandingPage/Index', [
        'name' => 'miGo',
    ]);

});

// Route::get('/second-link', fn () => 'Second link')->name('second');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
