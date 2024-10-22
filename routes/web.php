<?php

use App\Http\Controllers\Auth\ConnexionController;
use App\Http\Controllers\ParrainageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view("htmlprojetweb.inscription");
});

// Route pour afficher le formulaire de connexion
//Route::get('/connexion', [ConnexionController::class, 'showLoginForm'])->name('login');



// Route pour afficher le formulaire de connexion
//Route::get('/connexion', [AuthenticatedSessionController::class, 'create'])->name('login');

// Route pour traiter la soumission du formulaire de connexion
//Route::post('/connexion', [AuthenticatedSessionController::class, 'store']);

//use App\Http\Controllers\Auth\LoginController;

Route::post('connexion', [ConnexionController::class, 'login'])->name('login');


Route::post('/register', [RegisteredUserController::class, 'store']);
 
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
