<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| Contém o grupo de middleware "Web". Agora crie algo grande!
| 
*/

Route::get('/','PrincipalController@principal')->name('site.index');

Route::get('/SobreNos','SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/Contato','ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function()
{
    Route::get('/cliente', function(){ return 'Cliente';})->name('app.cliente');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');

});

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');


Route::fallback(function (){
    echo 'A rota não existe nesse contexto. <a href="'.route('site.index').'">clique aqui</a> para ir ao inicio da aplicação';
});