<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\CadastroController;
use \App\Http\Controllers\ViagemController;
use \App\Http\Controllers\ProdutoController;



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

//Route::get('/','HomeController@index');
Route::get('/',[HomeController::class,'index']);

Route::get('/sobre/{page?}','SobreController');

Route::get('/contato','ContatoController@index');

Route::get('/cadastro','CadastroController@index');

Route::get('/viagem','ViagemController@index');

Route::post('/cadastro',[CadastroController::class,'send']);

Route::post('/viagem',[ViagemController::class,'send']);

Route::get('/produtos',[ProdutoController::class,'index']);


