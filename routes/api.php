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

/**
 * API de Rotas para classe Clientes
 */

Route::get('/clientes', [ClientesController::class , 'index']);
Route::post('/clientes', [ClientesController::class , 'store']);
Route::get('/clientes/{id}', [ClientesController::class , 'show']);
Route::put('/clientes/{id}', [ClientesController::class , 'update']);
Route::delete('/clientes/{id}', [ClientesController::class , 'destroy']);

/**
 * API de Rotas para classe Agenda
 * (referente ao resumo da aplicação, ou seja, quando o cliente efetua a compra do serviço)
 */

Route::get('/agenda', [AgendaController::class , 'index']);
Route::post('/agenda', [AgendaController::class , 'store']);
Route::get('/agenda/{id}', [AgendaController::class , 'show']);
Route::put('/agenda/{id}', [AgendaController::class , 'update']);
Route::delete('/agenda/{id}', [AgendaController::class , 'destroy']);
