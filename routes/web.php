<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuickResponseCodeController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ShortlinkController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)
    ->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::resource('/shortlinks', ShortlinkController::class)
        ->except('show');

    Route::resource('/quick-response-codes', QuickResponseCodeController::class)
        ->except('show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{shortlink:alias}/password', [RedirectController::class, 'password'])
    ->name('shortlinks.password');

Route::post('/{shortlink:alias}/password', [RedirectController::class, 'confirm'])
    ->name('shortlinks.confirm');

Route::get('/{shortlink:alias}', [RedirectController::class, 'redirect'])
    ->name('shortlinks.redirect');
