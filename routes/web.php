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

Route::get('/', 'FrontController@index');

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/products', function () {
    return view('products');
});

Route::get('/buy', function () {
    return view('buy');
});

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return view('user.index');
    })->name('user.index');
});

Route::get('/home', 'FrontController@index')->name('home');

Route::resource('products', 'ProductsController');

Route::resource('category','CategoriesController');


