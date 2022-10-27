<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use  App\Http\Controllers\CarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrar-caminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
//deletar

Route::delete('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'ApagarBancoCaminhao'])->name('apagar-caminhao');
//alterar caminhao
Route::get('/alterar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'MostrarAltrearCaminhao'])->name('alterar-caminhao');
Route::put('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'AlterarBancoCaminhao'])->name('alterar-banco-caminhao');




Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-carros',[CarrosController::class,'MostrarEditarCarros'])->name('editar-carros');
Route::get('/cadastrar-carros',[CarrosController::class,'FormularioCadastro'])->name('cadastrar-carros');
Route::post('/cadastrar-carros',[CarrosController::class,'SalvarBancoCarros'])->name('salvar-banco-carros');
//deletar
Route::delete('/editar-carros/{registrosCarros}',[CarrosController::class,'ApagarBancoCarros'])->name('apagar-carros');
//alterar carros
Route::get('/alterar-carros/{registrosCarros}',[CarrosController::class,'MotrarAltrearCarros'])->name('alterar-carros');
Route::put('/alterar-carros/{registrosCarros}',[CarrosController::class,'AlterarBancoCarros'])->name('alterar-banco-carros');
