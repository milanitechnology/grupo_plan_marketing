<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EletroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/eletrodomesticos', [EletroController::class, 'getAll']);
Route::get('/eletrodomesticos/{id}', [EletroController::class, 'get']);
Route::post('/eletrodomesticos', [EletroController::class, 'store']);
Route::put('/eletrodomesticos/{id}', [EletroController::class, 'update']);
Route::delete('/eletrodomesticos/{id}', [EletroController::class, 'destroy']);
