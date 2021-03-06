<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'MallController@index');
Route::get('/add', 'AddController@index');
Route::get('/selectShop', function () {
    return view('selectShop');
});
Route::get('/selectMall', function () {
    return view('selectMall');
});

Route::resource('/product', 'ProductController')->except('create');
Route::resource('/shop', 'ShopController')->except('create');
Route::resource('/mall', 'MallController');
Route::get('/product/create/{shopID}', 'ProductController@create');
Route::get('/shop/create/{mallID}', 'ShopController@create');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
