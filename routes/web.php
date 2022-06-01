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

Route::get('/', 'PublicController@showHomepage')->name('home');

Route::get('/Catalog','PublicController@showCatalogo')->name('catalogo');
Route::get('/Catalogo/{regione}','PublicController@showCatalogoRegionale')->name('catalogo_regionale');
Route::get('/Search','UserController@searchCatalogo')->name('search');
Route::get('/Faq','PublicController@getFaq')->name('faq');

Route::get('/Annuncio/{alloggio}','UserController@getAnnuncio')->name('annuncio');

Route::view('/Who','who')->name('who');
Route::view('/Where','where')->name('where');
Route::view('/What','what')->name('what');
Route::view('/Privacy','privacy_cookies')->name('privacy');
Route::view('/Regolamento','termini_condizioni')->name('termini_condizioni');

//Route Admin
Route::get('/Admin','AdminController@index')->name('admin')->middleware('can:isAdmin');

//Route Locatore
Route::get('/Locatore','LocatoreController@index_loca')->name('locatore')->middleware('can:isLocatore');

Route::get('/Messaggi', 'UserController@showMessaggi')->name('messaggi');
Route::get('/Profilo', 'LocatoreController@showProfilo')->name('profilo')->middleware('auth');
Route::get('/Locatore/Richieste', 'LocatoreController@showRichieste')->name('richieste');

Route::put('/Locatore/UpdateProfilo','LocatoreController@updateProfilo')->name('updateProfilo.update');

Route::get('/Locatore/NewHome','LocatoreController@addHome')->name('addHome');
Route::post('/Locatore/NewHome','LocatoreController@storeHome')->name('addHome.store');

//Route Locatario
Route::get('/Locatario','LocatoreController@index_lario')->name('locatario')->middleware('can:isLocatario');
//Sottoinsime di Auth::routes()
Route::get('login','Auth\LoginController@showLoginForm')->name('login'); //Rotta che genera la form GET
Route::post('login','Auth\LoginController@login');//Usata al submit della form che attiva il processo di autenticazione

Route::post('logout','Auth\LoginController@logout')->name('logout');


Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');//Rotta che genera la form di registrazione
Route::post('register','Auth\RegisterController@register'); //Rotta che effettivamente registra l'utente

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
