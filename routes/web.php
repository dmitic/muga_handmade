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
    
    Route::put('/proizvodi/{proizvod}', 'ProizvodController@update')->name('updateProizvod');
    Route::post('/proizvodi/create', 'ProizvodController@update')->name('create');
    Route::post('/proizvodi/dodajSliku/{proizvod}', 'ProizvodController@dodajSliku')->name('dodajSliku');
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
    Route::get('/realizovane-fakture', 'FaktureController@index')->name('admin.fakture');
    Route::get('/ne-realizovane-fakture', 'FaktureController@neRealizovaneIndex')->name('admin.neFakture');
    Route::get('/pretraga-fakture', 'FaktureController@search');
});


Route::prefix('user')->group(function () {

    Route::get('/', 'FaktureUserController@index')->middleware('auth');

    Route::get('/detaljnije', 'UsersController@show')->name('detaljiUsers');
    Route::get('/edit', 'UsersController@edit')->name('izmeniUser');
    Route::put('/edit', 'UsersController@update')->name('updateUser');

    // fakture
    Route::get('/fakture', 'FaktureUserController@index')->name('user.fakture');

    // Promena šifre
    Route::get('/sifra', 'PromenaSifreController@index');
    Route::post('/sifra', 'PromenaSifreController@store')->name('promeniSifru');
});