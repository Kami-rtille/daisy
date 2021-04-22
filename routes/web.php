<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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
Route::get('/herbarium/{search}', [FirstController::class, 'herbarium']);

Route::get('/', [FirstController::class, 'index']);
Route::get('/article/{id}', [FirstController::class, 'article']);
Route::get('/article/{id}', [FirstController::class, 'article'])->where('id','[0-9]+');

Route::get("/photos/create", [FirstController::class, "create"])->middleware("auth");
Route::post("/photos/store", [FirstController::class, "store"])->middleware("auth");

Route::get("/users/{id}", [FirstController::class, "users"]);
Route::get("/changesuivi/{id}", [FirstController::class, "changesuivi"])->where("id", "[0-9]+")->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
