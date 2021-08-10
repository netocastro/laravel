<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/**
 * Rotas para a api de clientes clientes
 */

Route::get('/clientes', [ClientesController::class , 'index']);
Route::post('/clientes', [ClientesController::class , 'store']);
Route::get('/clientes/{id}', [ClientesController::class , 'show']);
Route::put('/clientes/{id}', [ClientesController::class , 'update']);
Route::delete('/clientes/{id}', [ClientesController::class , 'destroy']);

/**
 * Rotas para a api de clientes clientes
 */
Route::get('/agenda', [AgendaController::class , 'index']);
Route::post('/agenda', [AgendaController::class , 'store']);
Route::get('/agenda/{id}', [AgendaController::class , 'show']);
Route::put('/agenda/{id}', [AgendaController::class , 'update']);
Route::delete('/agenda/{id}', [AgendaController::class , 'destroy']);

