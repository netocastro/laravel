<?php

use App\Http\Controllers\Web\Post;
use App\Http\Controllers\Web\View;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['namespace' => 'Web'],  function ()
{
    Route::get('/',[View::class, 'home'])->name('view.home');
    Route::get('registrarUsuario',[View::class, 'registrarUsuario'])->name('view.registrarUsuario');
    Route::get('listaDeProcedimentos',[View::class, 'listaDeProcedimentos'])->name('view.listaDeProcedimentos');
    Route::get('listaDeClientes',[View::class, 'listaDeClientes'])->name('view.listaDeClientes');
    Route::get('agendarProcedimento',[View::class, 'agendarProcedimento'])->name('view.agendarProcedimento');
    Route::get('procedimentosAgendados',[View::class, 'procedimentosAgendados'])->name('view.procedimentosAgendados');
   
    /**
     * POST
     */
    Route::post('registrandoUsuario', [Post::class,'registrandoUsuario'])->name('post.registrandoUsuario');
    Route::post('agendandoProcedimento', [Post::class,'agendandoProcedimento'])->name('post.agendandoProcedimento');
});
 

