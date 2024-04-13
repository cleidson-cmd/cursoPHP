<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\VeiculoController;
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
//essa rota ja cria todas possibilidades com esse /veiculos podendo excluir as rotas a baixo desde que tenham o memso nome
//tendo como diferença o verbo : get, post, etc.. e parametros
route::apiResource("/veiculos", VeiculoController::class);

//acessando o metodo hello na classe HelloController
Route::get('/cadastrarCliente',[VeiculoController::class, "cadastrarCliente"] );

Route::get('/municipios',[VeiculoController::class, "municipios"] );

Route::get('/collection',[VeiculoController::class, "aprendendoCollection"] );

Route::get('/index',[VeiculoController::class, "index"] );

Route::get('/show/{id}',[VeiculoController::class, "show"] );

Route::get('/store',[VeiculoController::class, "store"] );//post

Route::get('/update/{id}',[VeiculoController::class, "update"] );

Route::get('/destroy/{id}',[VeiculoController::class, "destroy"] );

Route::get('/veiculos/{id}',[HelloController::class, "visualizarVeiculo"] );

Route::get('/veiculos',[HelloController::class, "listarVeiculos"] );

Route::get('/{nome}',[HelloController::class, "hello"] );

Route::get('/{nome}/{valor}',[HelloController::class, "criacao"] );

Route::get('/{id}/{nome}/{valor}',[HelloController::class, "atualizacao"] );




/* Route::get('/', function () {
    return view('welcome');
}); */

/* //o php ler sempre de cima para baixo nesse caso a prinmeira
//rota que atender a condição passada ele entra
Route::get('/hello/{nome}', function ($nome) {
    $nomes = ['nome1','nome2','nome3','nome4','nome5',];
      //dd(compact("nome", "nomes"));

    //passando valores para a view obs: a vw precisa ser ex: nomevw.blade.php deve ter essa extenção
   // return view('hello', ["nome" => $nome, "nomes" => $nomes]);
   return view('hello', compact("nome", "nomes"));
});

Route::get('/{nome}', function ($nome) {
    return "Olá, {$nome}";
});


Route::get('/{nome}/{sobrenome?}', function ($nome, $sobrenome = 'valor padrão') {
    return "Olá, {$nome},  {$sobrenome}";
});
 */
