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

Route::get('/k', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Mes routes

Route::get('/', 'DashController@dash')->name('dash');

Route::get('book', 'AddbookController@addbook');

Route::post('/member', 'AddmemberController@store_member')->name('store_member');

Route::get('biblio', 'BiblioController@biblio');

Route::get('type', 'TypeController@type');

Route::get('auteur', 'AuteurController@auteur');

Route::get('pays', 'PaysController@pays');
