<?php



Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
  Route::get('create', 'DashBoardController@create')->name('dashboard.create');
  Route::post('store', 'ProdutosController@store')->name('produto.store');
  Route::delete('delete', 'ProdutosController@delete')->name('produto.delete');
  Route::put('update', 'ProdutosController@update')->name('produto.update');
});

Route::group(['prefix' => 'carrinho', 'middleware' => 'auth'], function() {
  Route::get('/', 'CarrinhoController@index')->name('carrinho.index');
});

Route::get('dashboard', 'DashBoardController@view')->
name('dashboard')->middleware('auth');

Route::get('/', 'HomeController@index')->name('home');
