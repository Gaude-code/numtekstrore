<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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
/*Route::get('/', function () {
    return view('welcome');
});*/

//Route de l'ensemble de produits

Route::get('/', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::get('/panier', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/videpanier', function () { Cart::destroy();});

//Checkout Route
Route::get('/paiement', 'App\Http\Controllers\checkoutController@index')->name('checkout.index');


//Route::delete('/panier/{rowId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');

//Route d'affichage d'un produit
Route::get('/{slug}', 'App\Http\Controllers\ProductController@show')->name('products.show');


//Route du panier
Route::post('/panier/ajouter', 'App\Http\Controllers\CartController@store')->name('cart.store');

