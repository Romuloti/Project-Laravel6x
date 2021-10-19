<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', function (){
    return '';
});

Route::get('/empresa', function (){
    return view('site.empresa');
});

Route::get('/contato', function (){
    return view('contato');
});

Route::any('/any', function (){
    return 'any';
});

Route::match(['get', 'post'], '/match', function (){  // ['post', 'put']
    return 'match';
});

Route::get('/categorias/{teste}', function ($prm){
    return "Produtos da categoria: {$prm}";
});

Route::get('/categoria/{valor}/posts', function ($parametro){
    return "Posts da categoria: {$parametro}";
});

Route::get('/prod/{idProdutos?}', function ($idProdutos = ''){
    return "Produto: {$idProdutos}";
});

Route::get('/prod/{idProdutos?}/default', function ($idProdutos = ''){
    return "Produto {$idProdutos}";
});

Route::get('/produto/{idProduct}', function ($idProduct){
    return "Produto(s): {$idProduct}";
});

Route::redirect('/redirect00', '/redirect2');

// Route::get('redirect01', function (){
//     return redirect('/redirect2');
// });

Route::get('redirect2', function (){
    return 'Redirect 02, redirecionamento de rota';
});

























































































































































































