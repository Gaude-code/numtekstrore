<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\ProductController@index');

//Route d'affichage d'un produit
Route::get('/{slug}', 'App\Http\Controllers\ProductController@show')->name('products.show');