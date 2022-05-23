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

Route::get('/Admin','AdminController@index')->name('admin');
Route::get('/User','UserController@index')->name('user')->middleware('can:isUser');

//Sottoinsime di Auth::routes()
Route::get('login','Auth\LoginController@showLoginForm')->name('login'); //Rotta che genera la form GET
Route::post('logout','Auth\LoginController@login');//Usata al submit della form che attiva il processo di autenticazione

Route::post('logout','Auth\LoginController@logout')->name('logout');


Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');//Rotta che genera la form di registrazione
Route::post('register','Auth\RegisterCotroller@register'); //Rotta che effettivamente registra l'utente

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
