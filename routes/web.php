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



Route::view('profile', 'profile');

Route::get('listasset', 'AssetController@index' );
Route::get('listasset/create', 'AssetController@create' );
Route::post('listasset', 'AssetController@store' );
Route::get('listasset/{id}/edit', 'AssetController@edit');
Route::patch('listasset/{id}', 'AssetController@update');
Route::get('listasset/{id}/delete', 'AssetController@destroy');

Route::get('pemesanan', 'BelanjaController@index' );
Route::get('pemesanan/create', 'BelanjaController@create' );
Route::post('pemesanan', 'BelanjaController@store' );
Route::get('pemesanan/{id}/edit', 'BelanjaController@edit');
Route::patch('pemesanan/{id}', 'BelanjaController@update');
Route::get('pemesanan/{id}/delete', 'BelanjaController@destroy');

Route::get('/', 'RumahController@index' )->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'UserController@edit')->name('profile');
