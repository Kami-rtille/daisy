<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SocialiteController;

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

Route::get('/herbarium', [FirstController::class, 'herbarium']);
Route::get('/herbarium/{id}', [FirstController::class, 'ficheHerbier'])->where('id','[0-9]+');

Route::get('/', [FirstController::class, 'index']);
Route::get('/article/{id}', [FirstController::class, 'article']);
Route::get('/article/{id}', [FirstController::class, 'article'])->where('id','[0-9]+');

Route::get("/photos/create", [FirstController::class, "create"])->middleware("auth");
Route::post("/photos/store", [FirstController::class, "store"])->middleware("auth");

Route::get("/users/{id}", [FirstController::class, "users"]);
Route::get("/changesuivi/{id}", [FirstController::class, "changesuivi"])->where("id", "[0-9]+")->middleware("auth");


# Socialite URLs

// La page où on présente les liens de redirection vers les providers
Route::get("/loginregister", [SocialiteController::class, "loginregister"]);

// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class, "redirect"])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class, "callback"])->name('socialite.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
