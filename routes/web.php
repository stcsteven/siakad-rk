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

// Route::get('/master', function () {
//     return view('layouts/master');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@showLogin');
Route::post('/', 'HomeController@doLogin');
Route::get('/home','HomeController@showHome');

Route::get('/nilaiuh','NilaiController@showUH');
Route::get('/nilaips','NilaiController@showPsiko');
Route::get('/nilaiaf','NilaiController@showAfe');
Route::get('/nilaimidend','NilaiController@showMidFin');
