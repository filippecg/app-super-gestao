<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/login', function() { return 'Login'; })->name('site.login');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para retornar para a página inicial.';
});

// adicionando where na rota para validar se recebeu nome recebeu string e se categoria_id recebeu int.
// Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id) {
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+');
