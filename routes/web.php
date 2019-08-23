<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Product routes
    Route::get('/products/create', 'Product\ProductCreate')->name('products.create');
    Route::post('/products/', 'Product\ProductStore')->name('products.store');

    Route::get('/products/{product}/edit', 'Product\ProductEdit')->name('products.edit');
    Route::put('/products/{product}', 'Product\ProductUpdate')->name('products.update');

    Route::get('/products/list', 'Product\ProductIndex')->name('products.index');

    Route::delete('/products/{product}', 'Product\ProductDestroy')->name('products.destroy');
});
