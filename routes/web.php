<?php

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'can:view,App\Dashboard,auth'], function(){
  Route::get('create', 'DashBoardController@create')->name('dashboard.create');
  Route::post('store', 'ProdutosController@store')->name('produto.store');
  Route::delete('delete', 'ProdutosController@delete')->name('produto.delete');
  Route::put('update', 'ProdutosController@update')->name('produto.update');
  Route::get('card/create', 'CardController@create')->name('card.create');
});

// Route::get('dashboard/card/create', function() {

// })->middleware('can:view,App\Dashboard')->name('card.create');

// Route::put('/post/{post}', function (Post $post) {
//   // The current user may update the post...
// })->middleware('can:view,post');

Route::group(['prefix' => 'carrinho', 'middleware' => 'auth'], function() {
  Route::get('/', 'CarrinhoController@index')->name('carrinho.index');
  Route::get('adicionar/{id}', 'CarrinhoController@addCart')->name('carrinho.adicionar');
  Route::get('remover/{id}', 'CarrinhoController@removeCart')->name('carrinho.remover');
});

Route::get('dashboard', 'DashBoardController@view')->
name('dashboard')->middleware('auth');

Route::get('/', 'HomeController@index')->name('home');
Route::get('detalhe/{id}', 'ProdutosController@detail')->name('produto.detalhe');