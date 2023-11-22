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
    return view('welcome');
});

Route::get('guests','GuestsController@index');

Route::get('masters','MastersController@index');

Route::get('rooms','RoomsController@index');

Route::get('reservations','ReservationsController@index');