<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	//array_add()
	$array = ['nome'=>'Camila','idade'=>'20'];
	$array = array_add($array,'email','camila@mail.com');
	$array = array_add($array,'amigo','Guilherme');
	//dd($array);

	// array_collapse()
	$array = [['banana','limão'],['vermelho','azul']];
	$array = array_collapse($array);
	//dd($array);

	//array_divide()
	list($key,$value) = array_divide(['nome'=>'Camila','idade'=>'20']);
	//dd($key,$value);

	//array_except()
	$array = ['nome'=>'Camila','idade'=>'20'];
	$array = array_except($array,['nome']);
	//dd($array);

	//base_path()
	$path = base_path('Config');
	//dd($path);

	//database_path()
	$path = database_path();
	//dd($path);

	//public_path()
	$path = public_path();
	//dd($path);

	//storage_path()
	$path = storage_path();
	//dd($path);

	//camel_case()
	$text = "Guilherme esta criando uma nova aula";
	//dd(camel_case($text));

	//snake_case()
	$text = "GuilhermeEstaCriandoUmaNovaAula";
	//dd(snake_case($text));

	//str_limit()
	$text = "Guilherme esta criando uma nova aula";
	//dd(str_limit($text,5));

    return view('welcome');
});

Route::auth();

Route::get('/', ['uses'=>'WelcomeController@index','as'=>'welcome']);

Route::get('/produto', ['uses'=>'ProdutoController@index','as'=>'produto.index']);
Route::get('/produto/adicionar', ['uses'=>'ProdutoController@adicionar','as'=>'produto.adicionar']);
Route::post('/produto/salvar', ['uses'=>'ProdutoController@salvar','as'=>'produto.salvar']);
Route::get('/produto/editar/{id}', ['uses'=>'ProdutoController@editar','as'=>'produto.editar']);
Route::put('/produto/atualizar/{id}', ['uses'=>'ProdutoController@atualizar','as'=>'produto.atualizar']);
Route::get('/produto/deletar/{id}', ['uses'=>'ProdutoController@deletar','as'=>'produto.deletar']);

Route::get('/produto/detalhe/{id}',['uses'=>'ProdutoController@detalhe','as'=>'produto.detalhe']);
