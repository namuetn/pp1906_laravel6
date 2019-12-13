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

Route::get('/home', 'HomeController@index')->name('home');

//---------------------------------------------
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{product}', 'ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

Route::middleware(['auth'])->group(function () {
    Route::post('orders','OrderController@store')->name('orders.store');
    Route::get('carts', 'OrderController@showCart')->name('orders.show');
    Route::put('carts/update', 'OrderController@updateCart')->name('orders.update');
    Route::post('orders/delete', 'OrderController@destroyProduct')->name('orders.product.destroy');

});

//--------------------------------------------------
Route::get('/admin', function() {
	view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
	Route::resource('products', 'ProductController');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
	Route::resource('categories', 'CategoryController');
});

//-----------------ajax---------------------------







