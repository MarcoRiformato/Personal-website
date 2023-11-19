<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BookingsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard'); 

Route::get('/prenota', [BookingsController::class, 'Book'])->name('book');

Route::get('/sviluppo', function () {
    return Inertia::render('Sviluppo');
})->name('sviluppo');

Route::get('/seo', function () {
    return Inertia::render('Seo');
})->name('seo');

Route::get('/cro', function () {
    return Inertia::render('Cro');
})->name('cro');
