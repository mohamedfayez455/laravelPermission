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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@doLogin');


Route::any('/logout', 'LoginController@logout')->middleware('auth')->name('logout');
Route::resource('/users' , 'UserController')->middleware('auth');
