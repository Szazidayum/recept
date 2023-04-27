<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptController;
use App\Models\Kategoria;
use Illuminate\Support\Facades\Route;

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

Route::get('/api/kategorias', [KategoriaController::class,'index']);
Route::get('/api/kategoria/{id}', [KategoriaController::class,'show']);
Route::post('/api/kategorias', [KategoriaController::class,'store']);
Route::put('/api/kategoria/{id}', [KategoriaController::class,'update']);
Route::delete('/api/kategoria/{id}', [KategoriaController::class,'destroy']);

Route::get('/api/recepts', [ReceptController::class,'index']);
Route::get('/api/receptsWithCategories', [ReceptController::class,'kategoriaval']);
Route::get('/api/receptsByCategory/{id}', [ReceptController::class,'kategoriaSzures']);
Route::get('/api/recept/{id}', [ReceptController::class,'show']);
Route::post('/api/recepts', [ReceptController::class,'store']);
Route::put('/api/recept/{id}', [ReceptController::class,'update']);
Route::delete('/api/recept/{id}', [ReceptController::class,'destroy']);