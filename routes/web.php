<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('layouts.app');
});
Route::get('/perjalanan','PerjalananController@index');
Route::post('/perjalanan/create','PerjalananController@create');
Route::post('/perjalanan/store','PerjalananController@store');
Route::get('/perjalanan/delete/{id}','PerjalananController@destroy');



Auth::routes();
Route::get('/user','UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store','UserController@store');
Route::put('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id}','UserController@update');
