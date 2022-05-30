<?php

use Illuminate\Support\Facades\Route;
/*
use \App\Http\Controllers\Site\HomeController;
use \App\Http\Controllers\ContatoController;
use \App\Http\Controllers\ProdutoController;
*/

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
//Route::get('/',[HomeController::class,'index']);
/*
 * 1 - Apresentar projeto do blog que será implementado

2 - Muda pasta dos controladores do site

3 - Mudar pastas das views do site

4 - Criar apelidos para todas as rotas
 */

Route::get('/','Site\HomeController@index')->name('site.home');
Route::get('/sobre/{page?}','Site\SobreController')->name('site.sobre');
Route::get('/contato','Site\ContatoController@index')->name('site.contato');
Route::post('/contato','Site\ContatoController@send')->name('site.contato');
Route::put('/contato','Site\ContatoController@contact')->name('site.contato');

Route::get('/painel','Painel\HomeController')->name('painel.home');
Route::get('/painel/blog','Painel\BlogController@index')->name('painel.blog');
Route::get('/painel/blog/novo','Painel\BlogController@novo')->name('painel.blog.novo');
Route::post('/painel/blog/novo','Painel\BlogController@cadastrar')->name('painel.blog.novo');
Route::get('/painel/blog/edita/{id}','Painel\BlogController@editar')->name('painel.blog.edita');
Route::put('/painel/blog/edita/{id}','Painel\BlogController@atualizar')->name('painel.blog.edita');
Route::get('/painel/blog/delete/{id}','Painel\BlogController@delete')->name('painel.blog.delete');

Route::get('/painel/contato','Painel\ContatoController@index')->name('painel.contato');
Route::get('/painel/contato/exibe/{id}','Painel\ContatoController@show')->name('painel.contato.show');
Route::get('/painel/contato/delete/{id}','Painel\ContatoController@delete')->name('painel.contato.delete');


