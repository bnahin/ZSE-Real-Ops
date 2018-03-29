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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

/** Login Routes */
Route::get('/login', 'LoginController@login')->name('login');
Route::get('/validate', 'LoginController@validateLogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

/** Event Routes */
Route::get('event/{event?}', 'EventController@index');