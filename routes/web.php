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

Route::get('/', 'PublicController@showHomepage');

Route::get('/Catalog','PublicController@showCatalogo')->name('catalogo');
Route::get('/Catalogo/{regione}','PublicController@showCatalogoRegionale')->name('catalogo_regionale');
Route::get('/Search','UserController@searchCatalogo')->name('search');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
