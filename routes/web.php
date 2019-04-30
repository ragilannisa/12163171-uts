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
    // Route::get('/', 'ProductController@index');
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/new', 'ProductController@create');
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
});

Route::group(['prefix' => 'product'], function() {
    //[... CODE SEBELUMYA ...]
    
    Route::post('/', 'ProductController@save');
});

Route::group(['prefix' => 'product'], function() {
    // [.. CODE SEBELUMNYA ..]
    Route::delete('/{id}', 'ProductController@destroy');
});

Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index');
});

Route::group(['prefix' => 'customer'], function() {
    //[.. CODE SEBELUMNYA ..]
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
});

Route::group(['prefix' => 'customer'], function() {
	// [.. CODE SEBELUMNYA ..]
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
});

Route::group(['prefix' => 'customer'], function() {
    //[.. CODE SEBELUMNYA ..]
    Route::delete('/{id}', 'CustomerController@destroy');
});
