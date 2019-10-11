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
