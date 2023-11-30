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

//利用者
Route::get('guests','GuestsController@index');
//部屋種類検索
Route::get('guests','GuestsController@search');

//部屋種類
Route::get('masters','MastersController@index');
//部屋種類検索
Route::get('masters','MastersController@search');


//部屋
Route::get('rooms','RoomsController@index');

//詳細ページ
Route::get('reservations','ReservationsController@index');
//詳細日付検索
Route::get('reservations','ReservationsController@search');


// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
