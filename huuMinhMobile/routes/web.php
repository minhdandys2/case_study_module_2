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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/set-locale', 'LangController@setLang')->name('setLang');
Route::middleware('locale')->group(function () {
    Route::prefix('phone')->group(function () {
        Route::get('/', 'PhoneController@index')->name('phone.index');
        Route::get('/create', 'PhoneController@create')->name('phone.create');
        Route::post('/create', 'PhoneController@store')->name('phone.store');
        Route::get('/delete/{id}', 'PhoneController@delete')->name('phone.delete');
        Route::get('/edit/{id}', 'PhoneController@edit')->name('phone.edit');
        Route::post('/edit/{id}', 'PhoneController@update')->name('phone.update');
        Route::get('/search', 'PhoneController@search')->name('phone.search');
        Route::get('/information/{id}', 'PhoneController@information')->name('phone.information');
        Route::get('/cart/addToCart/{id}', 'CartController@addToCart')->name('phone.addToCart');
        Route::get('/cart/showCart', 'CartController@showCart')->name('phone.showCart');
        Route::get('/cart/delete/{id}','CartController@delete')->name('cart.delete');
    });
});
