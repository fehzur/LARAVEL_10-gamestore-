<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;

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

Route::controller(AuthController::class)->group(function(){
    Route::get('inscription', 'inscription')->name('inscription');
    Route::post('inscription', 'inscriptionSave')->name('inscription.save');

    Route::get('/', 'connexion')->name('connexion');
    Route::post('connexion', 'connexionAction')->name('connexion.action');

    Route::get('deconnexion', 'deconnexion')->name('deconnexion');
});



// utilisateur normal
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('accueil', [HomeController::class, 'index'])->name('accueil');
});
Route::get('games/{id}', [HomeController::class,'userShow'])->name('games');

Route::get('resultat', [HomeController::class, 'search'])->name('search');

//compte admin
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('admin/accueil', [HomeController::class, 'adminHome'])->name('admin/accueil');

    Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin/profile');
    Route::post('admin/traitement', [AdminController::class, 'updateAdmin']);

    Route::get('admin/game', [GameController::class, 'index'])->name('admin/game');
    Route::get('admin/game/ajout', [GameController::class, 'create'])->name('admin/game/ajout');
    Route::post('/admin/game/store', [GameController::class, 'store'])->name('admin/game/store');
    Route::get('admin/game/afficher/{id}', [GameController::class,'show'])->name('admin/game/afficher');
    Route::get('admin/game/modifier/{id}', [GameController::class, 'edit'])->name('admin/game/modifier');
    Route::put('/admin/game/modifier/{id}', [GameController::class, 'update'])->name('admin/game/modifier');
    Route::delete('/admin/game/destroy/{id}', [GameController::class, 'destroy'])->name('admin/game/destroy');

    
});

// failback
Route::fallback(function() {
    return view('404');
});
Route::get('admin/game/search', [GameController::class, 'search'])->name('admin.game.search');
