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

Route::get('/shop', function () {
    return view('layouts_wish.home_shop');
});

Route::get('/category', function () {
    return view('layouts_wish.category_shop');
});

Route::get('/cart', function () {
    return view('layouts_wish.cart_shop');
});

Route::get('/checkout', function () {
    return view('layouts_wish.checkout_shop');
});

Route::get('/contact', function () {
    return view('layouts_wish.contact_shop');
});

Route::get('/product', function () {
    return view('layouts_wish.product_shop');
});

//---------------------------------------------
Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::post('products', 'ProductController@store')->name('products.store');

Route::get('/products/{product}', 'ProductController@show')->name('products.show');

Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');

Route::put('/products/{product}', 'ProductController@update')->name('products.update');

Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

Route::middleware(['auth'])->group(function () {
    Route::post('/orders','OrderController@store')->name('orders.store');
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







