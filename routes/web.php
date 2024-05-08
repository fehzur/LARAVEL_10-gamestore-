<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->group(function(){
    Route::get('inscription', 'inscription')->name('inscription');
    Route::post('inscription', 'inscriptionSave')->name('inscription.save');

    Route::get('connexion', 'connexion')->name('connexion');
    Route::post('connexion', 'connexionAction')->name('connexion.action');

    Route::get('deconnexion', 'deconnexion')->name('deconnexion');
});



// utilisateur normal
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('accueil', [HomeController::class, 'index'])->name('accueil');
});

//compte admin
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('admin/accueil', [HomeController::class, 'adminHome'])->name('admin/accueil');
});
