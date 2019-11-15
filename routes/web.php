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

Route::get('/', 'HomeController@index');
Route::get('/json', 'MainController@json_response');
Route::get('/korpa', 'MainController@index');
Route::get('/detaljnije/{id}', 'MainController@show');
Route::post('/posalji-narudzbenicu', 'MainController@create');

Auth::routes();

// čisto da preusmere ako je admin ili korisnik na odgovarajući CP
Route::get('/cp', 'ProizvodController@index');
Route::get('/cp/home', 'ProizvodController@index');
Route::get('/home', 'ProizvodController@index');

Route::prefix('admin')->group(function () {

    Route::get('/', 'ProizvodController@index');
    Route::get('/home', 'ProizvodController@index');
    // Route::get('/', 'AdminController@index');
    // Route::get('/home', 'AdminController@index');

    // Proizvodi rute
    Route::get('/pretragaProizvodi', 'ProizvodController@search');
    Route::get('/proizvodi', 'ProizvodController@index');
    Route::get('/proizvodi/noviProizvod', 'ProizvodController@edit')->name('noviProizvod');
    Route::get('/proizvodi/{proizvod}', 'ProizvodController@show')->name('proizvodDetaljnije');
    Route::get('/proizvodi/{proizvod}/edit', 'ProizvodController@edit')->name('izmeniProizvod');
    
    Route::put('/proizvodi/{proizvod}', 'ProizvodController@create')->name('updateProizvod');
    Route::post('/proizvodi/create', 'ProizvodController@create')->name('create');
    Route::post('/proizvodi/dodajSliku/{proizvod}', 'ProizvodController@dodajSlikuPojedinacno')->name('dodajSlikuPojedinacno');
    Route::delete('/proizvodi/{proizvod}', 'ProizvodController@destroy')->name('brisiProizvod');
    Route::delete('/proizvodi/slikaBrisanje/{slika}', 'SlikeController@destroy')->name('obrisiSliku');

    // Korisnici rute
    Route::get('/pretraga', 'KorisniciController@search');
    Route::get('/korisnici', 'KorisniciController@index');
    Route::get('/detalji/{user}', 'KorisniciController@show')->name('detalji');
    Route::get('/korisnici/{user}/edit', 'KorisniciController@edit')->name('izmeni');
    Route::put('/korisnici/{user}', 'KorisniciController@update')->name('update');
    Route::delete('/korisnici/{user}', 'KorisniciController@destroy')->name('brisi');

    // narudžbenice rute
    Route::get('/pretraga-fakture', 'FaktureController@search');
    Route::get('/realizovane-fakture', 'FaktureController@index')->name('admin.fakture');
    Route::get('/nerealizovane-fakture', 'FaktureController@neRealizovaneIndex')->name('admin.neFakture');
    Route::put('/realizuj/{faktura}', 'FaktureController@realizuj')->name('admin.realizuj');
    Route::delete('/realizovane-fakture/{faktura}/delete', 'FaktureController@destroy')->name('admin.real.brisanje');
    Route::delete('/nerealizovane-fakture/{faktura}/delete', 'FaktureController@destroy')->name('admin.nereal.brisanje');
    Route::delete('/fakture-pretraga/{faktura}/delete', 'FaktureController@destroy')->name('admin.pret.brisanje');

    Route::get('/detaljnije-fakture/{id}', 'StavkeController@show')->name('admin.fakt.detaljnije');

    // Promena šifre
    Route::get('/sifra/{user}', 'PromenaSifreController@indexAdmin')->middleware('testUserRole');
    Route::put('/sifra', 'PromenaSifreController@storeAdmin')->middleware('testUserRole')->name('promeniSifruAdmin');
});


Route::prefix('user')->group(function () {

    Route::get('/', 'FaktureUserController@index')->middleware('auth');

    Route::get('/detaljnije', 'UsersController@index')->name('detaljiUsers');
    Route::get('/edit', 'UsersController@edit')->name('izmeniUser');
    Route::put('/edit', 'UsersController@update')->name('updateUser');

    // fakture
    Route::get('/fakture', 'FaktureUserController@index')->name('user.fakture');
    Route::get('/fakture/{id}', 'FaktureUserController@show');

    // Promena šifre
    Route::get('/sifra', 'PromenaSifreController@index');
    Route::post('/sifra', 'PromenaSifreController@store')->name('promeniSifru');
});