<?php

use App\Http\Controllers\ParrainageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('users',UserController::class)
    ->only(['index','store'])
    ->Middleware(['auth','verified']);

Route::resource('parrainages', ParrainageController::class)
    ->only(['index', 'store', 'create', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
