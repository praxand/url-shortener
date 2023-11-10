<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuickResponseCodeController;
use App\Http\Controllers\ShortlinkController;
use App\Models\Shortlink;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

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

Route::get('/{shortlink}', function ($shortlink) {
    $url = config('app.url') . '/' . $shortlink;
    
    $link = Shortlink::where('short_link', $url)->firstOrFail();

    return redirect()->away($link->original_link);
});
