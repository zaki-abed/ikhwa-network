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
    return redirect('/ar');
});

Route::group(['prefix' => '{locale}', 'as' => 'site.'], function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::get('/careers', [SiteController::class, 'careers'])->name('careers');
    Route::get('/partners', [SiteController::class, 'partners'])->name('partners');
    Route::get('/terms-and-conditions', [SiteController::class, 'terms'])->name('terms');
    Route::get('/privacy-policy', [SiteController::class, 'privacy'])->name('privacy');
});

