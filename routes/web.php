<?php

use Illuminate\Support\Facades\Route;

//Importando el controllador ArticuloController
use App\Http\Controllers\ArticuloController;

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

Route::get('/', function () {
    return view('auth.login');
});

# Rutas
Route::get('/articulos', [ArticuloController::class, 'index']);
Route::get('/articulos/create', [ArticuloController::class, 'create']);
Route::post('/articulos', [ArticuloController::class, 'store']);
Route::get('/articulos/{id}/edit', [ArticuloController::class, 'edit']);
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']);
# end mis rutas

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
