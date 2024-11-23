<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;


/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return redirect('/ar/site');
});


Route::group(['prefix' => '{locale}/site', 'as' => 'site.'], function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/services', [SiteController::class, 'services'])->name('services');
    Route::get('/partners', [SiteController::class, 'partners'])->name('partners');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//     Route::get('/users', [AdminController::class, 'users'])->name('users');
//     Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
// });
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

