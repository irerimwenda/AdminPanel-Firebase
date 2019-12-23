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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/firebase', 'FirebaseController@index')->name('firebase');
Route::get('/links', 'LinkController@index')->name('link');
Route::post('/add-link', 'LinkController@addLink')->name('add-link');
