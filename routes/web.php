<?php

use App\Http\Controllers\Auth\ConnexionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ParrainageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GestionMenuController;

Route::get('/', function () {
    return view("htmlprojetweb.HomePage");
});

// Route vers la page de parrainage




// routes pour menu*
/*Route::get('menu', function () {
    return view('htmlprojetweb.Menu_page');
})->name('menu');*/
// Route pour afficher le formulaire de connexion
//Route::get('/connexion', [ConnexionController::class, 'showLoginForm'])->name('login');



// Route pour afficher le formulaire de connexion
Route::get('/connexion', [AuthenticatedSessionController::class, 'create'])->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('/connexion', [AuthenticatedSessionController::class, 'store']);

//use App\Http\Controllers\Auth\LoginController;

/*Route::post('connexion', [ConnexionController::class, 'login'])->name('login');*/


//afficher le menu pour les utilisateurs
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');


Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/Inscription', function(){
    return view('htmlprojetweb.inscription');
})->name('Inscription');
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//afficher la page de gestion du menu
//Route::get('gestionmenu',[GestionMenuController::class,'index'])->name('gestionmenu');

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


Route::post('/menu/ajouter', [MenuController::class, 'ajouterPlat'])->name('ajouter-plat');
//Route::post('menu/ajouter', [MenuController::class, 'store'])->name('menu.store');
Route::put('/menu/modifier/{id}', [MenuController::class, 'modifierPlat'])->name('modifier-plat');
Route::get('/menu/supprimer/{id}', [MenuController::class,  'supprimerPlat'])->name('supprimer-plat');
Route::get('/menugestion', [MenuController::class, 'showGestionMenu'])->name('gestion-menu');


use App\Http\Controllers\CartController;

Route::post('/add-to-cart/{id_Produit}', [CartController::class, 'addToCart'])->name('addToCart');








require __DIR__.'/auth.php';
